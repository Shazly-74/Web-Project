<?php

$DB_NAME = 'dbvariant';
$DB_USER = 'root';
$DB_PASSWORD = '';
$DB_HOST = 'localhost';

// try {
//   $conn = new PDO("mysql:host=$DB_HOST;dbname=$DB_NAME", $DB_USER, $DB_PASSWORD);
//   // set the PDO error mode to exception
//   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//   echo "Connected successfully";
// } catch(PDOException $e) {
//   echo "Connection failed: " . $e->getMessage();
// }

$db = mysqli_connect($DB_HOST, $DB_USER, $DB_PASSWORD, $DB_NAME);
if(!$db)
{
    die("Connection failed". mysqli_connect_error());
}

//echo 'Successfully connected';
?>
