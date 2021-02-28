<?php

define('DB_SERVER', '192.185.52.192');
define('DB_USERNAME', 'tannerhe_tanner');
define('DB_PASSWORD', 'rockingh');
define('DB_NAME', 'tannerhe_rockingH');
/*
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'tanner1304');
define('DB_NAME', 'rockingH');
*/
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if($link === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>
