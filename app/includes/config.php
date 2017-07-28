<?php

// $host="db655120741.db.1and1.com";
// $dbUserName="dbo655120741";
// $password="xUbMO,R}=_XL";
// $dbName="db655120741";

$host="localhost";
$dbUserName="root";
$password="";
$dbName="db655120741";

// Connect to server and select databse.
$conn = new PDO("mysql:host=$host;dbname=$dbName","$dbUserName","$password");
$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
global $conn;

 ?>
