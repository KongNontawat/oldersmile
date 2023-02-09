<?php
include('../conn.php');

$post_id = $_GET['id'];
$user_id = $my_id;

 
$sql = "DELETE FROM post_like WHERE post_id = {$post_id} AND user_id = {$user_id}";
$query = mysqli_query($conn,$sql);



?>