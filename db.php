<?php
$host = "localhost";
$username = "uxgukysg8xcbd";
$password = "6imcip8yfmic";
$dbname = "dbceg1rviizdnk";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit();
}
?>
