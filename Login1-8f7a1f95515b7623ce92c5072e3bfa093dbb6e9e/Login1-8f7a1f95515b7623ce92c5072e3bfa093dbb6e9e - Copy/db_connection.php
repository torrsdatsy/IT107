<?php
$host = 'localhost';
$dbname = 'user';
$username = 'root'; // Change if your database user is different
$password = ''; // Enter your database password

$conn = new mysqli($host, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

