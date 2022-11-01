<?php

include('../conn.php');

$user_id = 1;
$post_cat_id = $_POST['post_cat_id'];
$post_body = $_POST['post_body'];
$image_name = '';

$check = getimagesize($_FILES['image_name']['tmp_name']);
$ext = end(explode('.',$_FILES['image_name']['name']));
$image_name = md5(uniqid()).'.'.$ext;
move_uploaded_file($_FILES['image_name']['tmp_name'],'../image/upload/'.$image_name);

$sql1 = "INSERT INTO post (user_id,post_cat_id,post_body) VALUES('$user_id','$post_cat_id','$post_body')";
$query1 = mysqli_query($conn, $sql1);

$sql2 = "SELECT LAST_INSERT_ID()";
$query2 = mysqli_query($conn, $sql2);
$last_id = mysqli_fetch_assoc($query2);

$sql3 = "INSERT INTO post_image VALUES('',".$last_id['LAST_INSERT_ID()'].",'$image_name')";
$query3 = mysqli_query($conn, $sql3);

exit();

if($query1) {
  header('location:../index.php');
}else {
  echo 'fail';
}

