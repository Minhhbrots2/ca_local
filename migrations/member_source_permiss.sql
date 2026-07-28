-- Bảng override phân quyền cá nhân của member (MOC/MF) — AS-BUILT
-- Bảng đã được tạo tay trên live trước 2026-07-02 (8.220 dòng seed từ sync()); file này là bản ghi schema, chạy lại vô hại.
-- Dùng bởi models/MemberSource.php (popup "Phân quyền" module admin member):
--   upsert theo (member_id, source); permiss_mod = JSON diff so với quyền mặc định của gói
--   member_id = default_member.profile_id
-- Lưu ý: bảng live CHƯA có UNIQUE (member_id, source) — model dùng get-rồi-update nên vẫn đúng,
-- nhưng nên bổ sung khi thuận tiện: ALTER TABLE `default_member_source` ADD UNIQUE KEY `uq_member_source` (`member_id`,`source`);
CREATE TABLE IF NOT EXISTS `default_member_source` (
	`id` int(10) NOT NULL AUTO_INCREMENT,
	`source` char(20) DEFAULT 'MF',
	`member_id` int(10) NOT NULL DEFAULT 0,
	`permiss_mod` longtext,
	`reg_date` int(10) NOT NULL DEFAULT 0,
	`upd_date` int(10) NOT NULL DEFAULT 0,
	PRIMARY KEY (`id`),
	KEY `member_id` (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
