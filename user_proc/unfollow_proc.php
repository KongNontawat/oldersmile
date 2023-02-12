<?php
include('../conn.php');

$follower = $_GET['follower'];

$sql = "DELETE FROM follow WHERE user_id='$my_id' AND follower='$follower'";
$query = mysqli_query($conn, $sql);

if($query) {
  succ($_SERVER['HTTP_REFERER']);
}else {
  err($_SERVER['HTTP_REFERER']);
}