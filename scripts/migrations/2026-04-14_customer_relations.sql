-- Customer relation tables (dual-write compatible with legacy list_* columns)
-- Run in maintenance window if table is very large.

CREATE TABLE IF NOT EXISTS `default_customer_share` (
  `customer_id` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `reg_date` int(10) NOT NULL DEFAULT '0',
  `upd_date` int(10) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_id_update` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`,`admin_id`),
  KEY `idx_dcs_admin` (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE IF NOT EXISTS `default_customer_campaign` (
  `customer_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `reg_date` int(10) NOT NULL DEFAULT '0',
  `upd_date` int(10) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `user_id_update` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`customer_id`,`campaign_id`),
  KEY `idx_dcc_campaign` (`campaign_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Customer indexes are created by:
-- scripts/migrations/2026-04-14_add_customer_indexes.php
