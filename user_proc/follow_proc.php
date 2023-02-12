<?php
include('../conn.php');

$following = $_GET['following'];

$sql = "INSERT INTO follow VALUES ('$my_id','$following')";
$query = mysqli_query($conn, $sql);

if($query) {
  succ($_SERVER['HTTP_REFERER']);
}else {
  err($_SERVER['HTTP_REFERER']);
}