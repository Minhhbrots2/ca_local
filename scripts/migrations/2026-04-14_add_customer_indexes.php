<?php
if (php_sapi_name() !== 'cli') {
	echo "Run this script from CLI only.\n";
	exit(1);
}

define('DS', DIRECTORY_SEPARATOR);
define('ABSPATH', dirname(dirname(dirname(__FILE__))));
define('ROOTPATH', ABSPATH);
require ABSPATH . DS . 'init.php';

$db = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3306);
if ($db->connect_errno) {
	echo "DB connect failed: " . $db->connect_error . PHP_EOL;
	exit(1);
}
$db->set_charset('utf8mb4');

$table = DB_PREFIX . 'customer';
$indexes = array(
	'idx_cus_trash_admin_upd' => array('is_trash','admin_id','upd_date'),
	'idx_cus_trash_admin_reg' => array('is_trash','admin_id','reg_date'),
	'idx_cus_trash_admin_status_resource' => array('is_trash','admin_id','status_id','resource_id'),
	'idx_cus_trash_user_upd' => array('is_trash','user_id','upd_date'),
	'idx_cus_admin_phone' => array('admin_id','phone'),
);

$exists = array();
$rs = $db->query("SHOW INDEX FROM `{$table}`");
if ($rs) {
	while ($row = $rs->fetch_assoc()) {
		$exists[$row['Key_name']] = 1;
	}
}

foreach ($indexes as $name => $cols) {
	if (isset($exists[$name])) {
		echo "[SKIP] {$name} already exists\n";
		continue;
	}
	$sql = "ALTER TABLE `{$table}` ADD INDEX `{$name}` (`" . implode('`,`', $cols) . "`)";
	if ($db->query($sql)) {
		echo "[OK] Added index {$name}\n";
	} else {
		echo "[ERR] {$name}: " . $db->error . PHP_EOL;
	}
}

echo "Done.\n";
