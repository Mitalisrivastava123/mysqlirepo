<?php
$servername = "mysql-server";
$username = "root";
$password = "secret";
$dbname="persons";
// database connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  ?>