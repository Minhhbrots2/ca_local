-- Analytics rollup tables for the BOD dashboard. Additive; safe to re-run (IF NOT EXISTS).
-- Only the active-user set (derived from the large default_log) is materialized; member/stock/
-- affiliate metrics are queried live.

-- Active-user set per day = source for DAU/WAU/MAU/Stickiness/retention.
-- Populated incrementally by cronjobs/stat_rollup.php from default_log WHERE from_site='_user'
-- AND user_id>0; the log_id cursor is stored in default_configuration (key 'analytics_log_cursor').
CREATE TABLE IF NOT EXISTS `default_stat_active_daily` (
  `d` DATE NOT NULL,
  `user_id` INT UNSIGNED NOT NULL,
  PRIMARY KEY (`d`, `user_id`),
  KEY `uid` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Reserved for precomputed registration-cohort retention (Phase 03). Retention is currently
-- computed live from default_member x default_stat_active_daily.
CREATE TABLE IF NOT EXISTS `default_stat_cohort` (
  `cohort_date` DATE NOT NULL,
  `day_n` SMALLINT UNSIGNED NOT NULL,
  `cohort_size` INT UNSIGNED NOT NULL DEFAULT 0,
  `retained` INT UNSIGNED NOT NULL DEFAULT 0,
  `updated_at` INT UNSIGNED NOT NULL DEFAULT 0,
  PRIMARY KEY (`cohort_date`, `day_n`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- One-time backfill (already applied on prod via tunnel):
--   INSERT IGNORE INTO default_stat_active_daily (d, user_id)
--     SELECT DATE(FROM_UNIXTIME(reg_date)), user_id FROM default_log
--     WHERE from_site='_user' AND user_id>0;
--   INSERT INTO default_configuration (setting, value) VALUES ('analytics_log_cursor', <MAX(log_id)>)
--     ON DUPLICATE KEY UPDATE value=VALUES(value);
