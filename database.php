<?php


/* Include our site wide configuration file */
include(__DIR__ . '/config.php');

try {
	$dbo = new PDO(DBDRIVER . ":host=" . DBHOSTNAME . ";dbname=" . DBNAME, DBUSERNAME, DBPASSWORD);
	if (debug_mode) {
        $dbo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

} catch( PDOException $Exception ) {
	if (PHP_SAPI !== 'cli' || isset($_SERVER['HTTP_USER_AGENT'])) {
		echo "Could not connect to database! <br />";
		if (debug_mode) echo $Exception->getMessage() . " " . $Exception->getCode();

	} else {
		Log::Error($Exception->getMessage() . " " . $Exception->getCode());
	}
	exit();
	die();
}
