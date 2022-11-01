<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'oldersmile_demo';

$conn = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($conn, "SET NAMES UTF8");

