<?php
include('../conn.php');
include('../auth_proc/check_login2.php');

$following = $_GET['following'];

$sql = "DELETE FROM follow WHERE follower ='$my_id' AND following='$following'";
$query = mysqli_query($conn, $sql);

if($query) {
  succ($_SERVER['HTTP_REFERER'],'เลิกติดตามสำเร็จ');
}else {
  err($_SERVER['HTTP_REFERER'],'เลิกติดตามไม่สำเร็จ');
}