<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
$db_host = 'localhost';
$db_user = 'root';
$db_password = 'password';
$db_name  = 'jqajax';


$conn = new mysqli($db_host, $db_user, $db_password, $db_name);
if ($conn->connect_error) {
    die('connection Failed!');
}
