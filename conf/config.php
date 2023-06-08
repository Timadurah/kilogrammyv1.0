<?php

// $dsn="mysql:host=localhost;dbname=kilogram_vani196";
// $username="kilogram_vani196";
// $password="-!Ss]3-ey!pI71Rx";

$dsn = "mysql:host=localhost;dbname=dlab1";
$username = "root";
$password = "";
$conn = new PDO($dsn, $username, $password);
try {
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}


?>