<?php
$host = "your-rds-endpoint";
$dbname = "chitanya_school";
$user = "db_user";
$password = "db_password";

$conn = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$conn) {
    die("Connection failed: " . pg_last_error());
}

session_start();
?>
