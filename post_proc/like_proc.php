<?php
include('../conn.php');

$post_id = $_GET['id'];
$user_id = $my_id;

 
$sql = "INSERT INTO post_like VALUES ('$post_id','$user_id',1)";
$query = mysqli_query($conn,$sql);



?>