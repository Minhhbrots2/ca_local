-- Backfill reminder cho follow-up CRM CŨ (tạo trước khi save_activity tự set reminder).
-- Chỉ cuộc hẹn TƯƠNG LAI, chưa hoàn thành, chưa set reminder_time → bật nhắc 15' trước (cron notify_task quét).
-- An toàn: chỉ SET cờ nhắc, không đụng dữ liệu nghiệp vụ. Save mới đã tự set nên chỉ cần chạy 1 lần cho data cũ.
--
-- LƯU Ý schema live: `reminder_time` NULLABLE (khác DDL repo) → dùng COALESCE bắt cả NULL lẫn 0.
-- `is_send_reminder` dòng cũ có thể NULL → BẮT BUỘC set =0 (cron lọc ='0', NULL sẽ bị bỏ qua).
--
-- Dry-run (đếm số dòng sẽ ảnh hưởng) TRƯỚC khi UPDATE:
--   SELECT COUNT(*) FROM `default_followups`
--   WHERE `followup_type`='_crm' AND `customer_id`>0 AND `is_trash`=0
--     AND `status_id`<>299 AND `date_id` > UNIX_TIMESTAMP() AND COALESCE(`reminder_time`,0)=0;

UPDATE `default_followups`
SET `is_reminder`      = 1,
    `reminder_before`  = '15',
    `reminder_time`    = `date_id` - 900,
    `is_send_reminder` = 0
WHERE `followup_type` = '_crm'
  AND `customer_id`   > 0
  AND `is_trash`      = 0
  AND `status_id`    <> 299                  -- _FOLLOWUP_STATUS_DONE_ID
  AND `date_id`       > UNIX_TIMESTAMP()     -- chỉ hẹn còn ở tương lai
  AND COALESCE(`reminder_time`, 0) = 0;      -- dòng cũ chưa set reminder (NULL hoặc 0)
