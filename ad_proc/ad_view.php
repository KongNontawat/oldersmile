<?php

include('../conn.php');
include('../auth_proc/check_login2.php');

$id = $_GET['id'];
$part_id = isset($_GET['part_id'])?$_GET['part_id']:'';
$link = $_GET['link'];

if(isset($part_id)) {
  $query = mysqli_query($conn, "UPDATE user SET user_wallet = user_wallet + 0.3 WHERE user_id = '$part_id' AND user_role = 'partner'");
}

$query2 = mysqli_query($conn, "UPDATE advert SET ad_point = ad_point - 1 WHERE ad_id = '$id'");

header('location:'.$link);