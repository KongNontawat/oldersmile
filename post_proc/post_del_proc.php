<?php
include('../conn.php');
include('../auth_proc/check_login2.php');

$post_id = $_GET['id'];

 
$sql = "DELETE FROM post WHERE post_id = {$post_id}";
$query = mysqli_query($conn,$sql);
if($query) {
    header('location:'.$_SERVER['HTTP_REFERER']);
}else{
    header('location:'.$_SERVER['HTTP_REFERER']);
}


?>