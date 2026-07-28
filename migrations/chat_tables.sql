-- =====================================================================
-- Chat nội bộ — thiết kế CSDL
-- Kênh nội bộ: Toàn công ty / Phòng ban (+ Check-in là kênh ĐẶC BIỆT render từ
-- default_office_checkin, không lưu message ở đây). ĐỘC LẬP, KHÔNG thuộc CRM.
-- Không realtime (AJAX polling + push Firebase qua Notification model sẵn có).
-- Engine/charset khớp dự án: MyISAM / utf8 (utf8mb3_general_ci).
-- ⚠️ FILE NHÁP — KHÔNG chạy lên live khi chưa được duyệt.
-- =====================================================================


-- ---------------------------------------------------------------------
-- 1) default_chat_channel — danh sách kênh
--    type: 1=Toàn công ty, 2=Phòng ban, 3=Check-in (đặc biệt, render office_checkin)
--    Phạm vi thành viên suy ra từ scope: company=tất cả NV active; department=NV
--    thuộc list_department_id (org-tree). Kênh hệ thống (is_system=1) không xoá.
-- ---------------------------------------------------------------------
CREATE TABLE `default_chat_channel` (
	`channel_id`         INT(10) UNSIGNED NOT NULL AUTO_INCREMENT,
	`name`               VARCHAR(190)     NOT NULL DEFAULT '',
	`type`               TINYINT(3) UNSIGNED NOT NULL DEFAULT 2,        -- 1=company, 2=department, 3=checkin
	`list_department_id` VARCHAR(255)     NOT NULL DEFAULT '',          -- phạm vi phòng ban '|40|59|' (rỗng = toàn cty)
	`icon`               VARCHAR(40)      NOT NULL DEFAULT '',          -- tên icon (vd 'globe','users','calendar')
	`color`              VARCHAR(20)               DEFAULT NULL,        -- accent tuỳ chọn
	`is_system`          TINYINT(1)       NOT NULL DEFAULT 0,           -- 1=kênh hệ thống (không cho xoá)
	`is_active`          TINYINT(1)       NOT NULL DEFAULT 1,
	`is_trash`           TINYINT(1)       NOT NULL DEFAULT 0,
	`order_no`           INT(10)          NOT NULL DEFAULT 0,           -- thứ tự hiển thị
	`more_information`   TEXT                      DEFAULT NULL,
	`reg_date`           INT(10) UNSIGNED NOT NULL DEFAULT 0,
	`upd_date`           INT(10) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`channel_id`),
	KEY `idx_type_active` (`type`, `is_active`, `is_trash`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- ---------------------------------------------------------------------
-- 2) default_chat_message — tin nhắn trong kênh
--    type: 1=text, 2=image, 3=system (thông báo tham gia/rời/ghim...)
--    Escape content khi render (Smarty autoescape OFF). image = path đã upload.
-- ---------------------------------------------------------------------
CREATE TABLE `default_chat_message` (
	`message_id`   BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`channel_id`   INT(10) UNSIGNED NOT NULL DEFAULT 0,
	`profile_id`   INT(10) UNSIGNED NOT NULL DEFAULT 0,                 -- người gửi (0 nếu system)
	`type`         TINYINT(3) UNSIGNED NOT NULL DEFAULT 1,              -- 1=text, 2=image, 3=system
	`content`      TEXT                      DEFAULT NULL,              -- nội dung text
	`image`        VARCHAR(255)              DEFAULT NULL,              -- path ảnh (type=2)
	`reply_to_id`  BIGINT(20) UNSIGNED       DEFAULT NULL,              -- trả lời tin nào (tuỳ chọn)
	`is_trash`     TINYINT(1)       NOT NULL DEFAULT 0,
	`reg_date`     INT(10) UNSIGNED NOT NULL DEFAULT 0,                 -- unix gửi
	`upd_date`     INT(10) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`message_id`),
	KEY `idx_channel_msg` (`channel_id`, `message_id`),                -- nạp/scroll tin theo kênh
	KEY `idx_profile` (`profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- ---------------------------------------------------------------------
-- 3) default_chat_member — trạng thái đọc + tuỳ chọn của NV trong kênh
--    Tạo dòng LƯỜI (lazy) khi NV mở kênh lần đầu. Chưa đọc = đếm message có
--    message_id > last_read_message_id (và không phải của chính mình).
-- ---------------------------------------------------------------------
CREATE TABLE `default_chat_member` (
	`id`                   BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
	`channel_id`           INT(10) UNSIGNED NOT NULL DEFAULT 0,
	`profile_id`           INT(10) UNSIGNED NOT NULL DEFAULT 0,
	`role`                 TINYINT(3) UNSIGNED NOT NULL DEFAULT 0,      -- 0=member, 1=quản trị kênh
	`last_read_message_id` BIGINT(20) UNSIGNED NOT NULL DEFAULT 0,      -- mốc đã đọc (tính badge chưa đọc)
	`last_read_at`         INT(10) UNSIGNED NOT NULL DEFAULT 0,
	`is_muted`             TINYINT(1)       NOT NULL DEFAULT 0,
	`is_pinned`            TINYINT(1)       NOT NULL DEFAULT 0,
	`reg_date`             INT(10) UNSIGNED NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`),
	UNIQUE KEY `uq_channel_profile` (`channel_id`, `profile_id`),
	KEY `idx_profile` (`profile_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


-- ---------------------------------------------------------------------
-- Seed kênh hệ thống (chạy SAU khi tạo bảng, nếu BOD duyệt)
-- ---------------------------------------------------------------------
-- INSERT INTO `default_chat_channel` (`name`,`type`,`icon`,`is_system`,`order_no`,`reg_date`) VALUES
--   ('Toàn công ty', 1, 'globe',    1, 1, UNIX_TIMESTAMP()),
--   ('Check-in',     3, 'calendar', 1, 9, UNIX_TIMESTAMP());
-- (Kênh Phòng ban type=2 sinh theo từng phòng khi cần.)
