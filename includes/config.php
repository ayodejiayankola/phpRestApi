<?php

$db_host = 'localhost';
$db_user = 'root';
$db_name = 'restapi';
$db_password = '';

//$db = new PDO("mysql:host=$db_host;db_name=$db_name", $db_user, $db_password);

$db = new PDO('mysql:host='. $db_host . ';dbname='.$db_name.';charset=utf8', $db_user, $db_password);


//Set DB attribute
$db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
$db->setAttribute(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY, true);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

define('APP_NAME', 'PHP REST API');



?>