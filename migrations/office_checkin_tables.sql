-- =====================================================================
-- Office Check-in — thiết kế CSDL (cập nhật theo luật BOD chốt 2026-06-26)
-- Điểm danh bằng ảnh + GPS. ĐỘC LẬP, KHÔNG thuộc CRM. MyISAM/utf8.
-- ⚠️ FILE NHÁP — KHÔNG chạy live khi chưa duyệt (không staging).
--
-- LUẬT CHECK-IN (đã đơn giản hoá):
--  • Check-in ở VP NÀO CŨNG ĐƯỢC: server so GPS với MỌI VP _OFFICE đang bật,
--    khớp VP GẦN NHẤT trong bán kính → office_id = VP đó.
--  • Ngoài bán kính TẤT CẢ VP → TỪ CHỐI (không tạo dòng). Không có out-zone/duyệt.
--  • 1 KHUNG GIỜ GLOBAL 09:00–10:00 (hằng config, KHÔNG per-office). Trong khung +
--    trong vùng = điểm danh hợp lệ; sau 10:00 hoặc trước 09:00 → từ chối.
--  • KHÔNG phân biệt đúng giờ/muộn, KHÔNG check-out.
--  • "Vắng" = suy ra khi đọc: roster phòng ban (org-tree) trừ NV có dòng ngày đó.
--  • Chống gian lận NHẸ (BOD chấp nhận lách luật là không tránh khỏi): chốt
--    UNIQUE 1 lần/ngày + hash ảnh + trần sai số GPS global; KHÔNG làm sâu hơn.
-- =====================================================================


-- ---------------------------------------------------------------------
-- VĂN PHÒNG = các dòng CÓ SẴN trong `default_setting` (_type='_OFFICE')
-- 7 VP: CN_01..CN_07 (Ecopark/Sao Biển 23/KD1-02/SH7-65/Trường Chinh/TPHCM/Đà Nẵng).
-- Model models/Setting.php → $clsSetting->getArraySearchByKey('_OFFICE'). Quản lý ở admin `setting`.
--
-- more_information = JSON — CHỈ thêm các khoá geofence (giữ khoá cũ
--   setting_code/intro/image/bgcolor/textcolor/user_id...):
--     {
--       "is_active": 1,
--       "address": "…",
--       "lat": 21.028511,        // key 'lat'/'lng' khớp module map dự án
--       "lng": 105.804817,
--       "radius_m": 200,         // bán kính cho phép (m) — nên cap ≤250 ở form
--       "max_accuracy_m": 80     // ngưỡng sai số GPS riêng VP (kèm trần global)
--     }
--   ❌ ĐÃ BỎ khỏi office JSON: window_open/ontime_deadline/late_cutoff (→ global),
--      list_department_id (any-office: không còn ràng buộc thuộc VP).
--
--   Khung giờ + ngày làm = HẰNG GLOBAL trong config.php (KHÔNG per-office):
--     _CHECKIN_WINDOW_START = '09:00'
--     _CHECKIN_WINDOW_END   = '10:00'
--     _CHECKIN_MAX_ACCURACY = 100      // trần sai số GPS toàn hệ thống (m)
--     (working_days nếu cần: hằng global, mặc định T2–T7)
--
--   Form geofence (Bước 1) = mở rộng trình sửa _OFFICE sẵn có: thêm bản đồ + radius
--   + max_accuracy. KHÔNG còn multiselect phòng ban, KHÔNG còn ô khung giờ.
-- ---------------------------------------------------------------------
-- (Không có DDL cho văn phòng — chỉ UPDATE more_information các dòng _OFFICE khi chạy thật.)


-- ---------------------------------------------------------------------
-- default_office_checkin — nhật ký check-in ảnh + GPS (NHIỀU lần/người/ngày).
-- KHÔNG ràng buộc khung giờ / vị trí văn phòng (office_id=0, distance_m=0); chỉ cần GPS + ảnh.
-- ---------------------------------------------------------------------
CREATE TABLE `default_office_checkin` (
	`id`               BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`office_id`        INT(10) UNSIGNED NOT NULL DEFAULT 0,            -- = default_setting.setting_id của VP gần nhất khớp (vd 9595)
	`profile_id`       INT(10) UNSIGNED NOT NULL DEFAULT 0,           -- nhân viên check-in
	`department_id`    INT(10) UNSIGNED NOT NULL DEFAULT 0,           -- snapshot phòng ban của NV (cho roster/báo cáo + tính vắng)
	`work_date`        INT(10) UNSIGNED NOT NULL DEFAULT 0,           -- ngày làm YYYYMMDD (vd 20260626) — khoá theo ngày
	`checkin_time`     INT(10) UNSIGNED NOT NULL DEFAULT 0,           -- unix thời điểm gửi (trong 09:00–10:00)
	`photo`            VARCHAR(255)     NOT NULL DEFAULT '',          -- đường dẫn ảnh đã upload (đã resize)
	`photo_hash`       CHAR(32)                  DEFAULT NULL,        -- md5 ảnh — chống gửi lại ảnh cũ/trùng
	`note`             VARCHAR(255)              DEFAULT NULL,        -- chú thích kèm (tuỳ chọn)
	`lat`              DECIMAL(10,7)             DEFAULT NULL,        -- vị trí lúc check-in
	`lng`              DECIMAL(10,7)             DEFAULT NULL,
	`distance_m`       INT(10)                   DEFAULT NULL,        -- khoảng cách tới tâm VP khớp (m) — soi bất thường
	`accuracy_m`       INT(10)                   DEFAULT NULL,        -- độ chính xác GPS client báo (m)
	`more_information` TEXT                      DEFAULT NULL,        -- json: ip, user_agent, mock_flag...
	`reg_date`         INT(10) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`),
	KEY `idx_profile_day` (`profile_id`, `work_date`),               -- check-in NHIỀU lần/ngày (đã bỏ UNIQUE uq_profile_day — chốt 2026-06)
	KEY `idx_office_day` (`office_id`, `work_date`),                 -- ai check-in tại VP nào / ngày
	KEY `idx_dept_day` (`department_id`, `work_date`),               -- roster + tính vắng theo phòng ban
	KEY `idx_work_date` (`work_date`)                                -- tổng hợp theo ngày
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
-- ❌ ĐÃ BỎ cột (so với bản trước): status, in_zone, is_approved, approved_by, approved_at
--    (không còn muộn / ngoài-vùng-được-lưu / duyệt — luật mới: trong-vùng-trong-giờ mới có dòng).
