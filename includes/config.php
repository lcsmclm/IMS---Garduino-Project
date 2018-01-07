<?php
defined('DB_SERVER') ? null : define('DB_SERVER','localhost');
defined('DB_USER') ? null : define('DB_USER','root');
defined('DB_PASS') ? null : define('DB_PASS','root');
defined('DB_NAME') ? null : define('DB_NAME','db_gnome');
defined('BASE_URL') ? null : define('BASE_URL','http://localhost:8888/School/IMS-Garduino-Project/');
$connection = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
if($connection->connect_errno) {
  die("Database connection failed: ".mysqli_error());
}
?>
