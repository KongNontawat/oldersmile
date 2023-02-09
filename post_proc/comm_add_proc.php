<?php
include('../conn.php');
include('../auth_proc/check_login2.php');
$post_id = $_POST['post_id'];
$user_id = $my_id;
$comm_body = $_POST['comm_body'];
$comm_created = date('d-m-Y');

 
$sql = "INSERT INTO comment VALUES ('','$post_id','$user_id','$comm_body','$comm_created')";
$query = mysqli_query($conn,$sql);
if($query) {
    header('location:'.$_SERVER['HTTP_REFERER']);
}else{
    header('location:'.$_SERVER['HTTP_REFERER']);
}


?>