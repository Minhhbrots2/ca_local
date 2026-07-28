<?php if (!defined('ABSPATH')) exit('No direct script access allowed');
/**
 * Cấu hình Database — PER-KHÁCH.
 * Sửa file này khi dựng host cho khách mới (config.php require vào).
 */
/** MySQL hostname */
define('DB_HOST', '127.0.0.1');
/** Tên database */
define('DB_NAME', 'skyrealty_db');
/** MySQL username */
define('DB_USER', 'skyrealty_db');
/** MySQL password */
define('DB_PASS', 'bbXaLPJHKBAewd5a');
/** The name of the database for ISOCMS */
// define('DB_NAME', 'fhgroupt_user');
/** MySQL database username */
// define('DB_USER', 'fhgroupt_user');
/** MySQL database password */
// define('DB_PASS', 'DtiTXyp2fZpbAF2W');
/** Charset */
define('DB_CHARSET', 'utf8');
/** Collate */
define('DB_COLLATE', '');
/** Loại database */
define('DB_TYPE', 'mysqli');
/** Tiền tố bảng (theo schema — thường giữ nguyên) */
define('DB_PREFIX', 'default_');
