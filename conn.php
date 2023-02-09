<?php
session_start();
date_default_timezone_set('Asia/Bangkok');
// error_reporting(0);

$host = 'localhost';
$user = 'root';
$pass = '';
$dbname = 'oldersmile';

$conn = mysqli_connect($host, $user, $pass, $dbname);
mysqli_query($conn, "SET NAMES UTF8");

function succ($path, $msg) {
    $_SESSION['succ'] = $msg;
    header('location:'.$path);
}
function err($path, $msg) {
    $_SESSION['err'] = $msg;
    header('location:'.$path);
}

$my_id = (isset($_SESSION['my_id']))?$_SESSION['my_id']:'0';

mysqli_query($conn, "DELETE FROM advert WHERE ad_point <= 0");
$query_all_cat = mysqli_query($conn, "SELECT * FROM category WHERE NOT cat_id =1");

if(isset($my_id)) {
    $my_cat = [];
    $query_my_cat = mysqli_query($conn, "SELECT * FROM user_cat WHERE user_id = '$my_id'");
    foreach($query_my_cat as $fav) {
        $my_cat[] .= $fav['cat_id'];
    }
}
