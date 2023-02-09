<?php
include('../conn.php');
include('../auth_proc/check_login2.php');

$user_id = $my_id;
$cat_id = $_POST['cat_id'];
$post_body = $_POST['post_body'];
$post_created = date('d-m-Y');
$post_media = '';

if($_FILES['post_media']['error'] == 0){
    $ext = end(explode('.',$_FILES['post_media']['name']));
    $post_media = md5(uniqid()).'.'.$ext;
    move_uploaded_file($_FILES['post_media']['tmp_name'],'../img/'.$post_media);
}
 
$sql = "INSERT INTO post VALUES ('','$user_id','$cat_id','$post_body','$post_media','$post_created')";
$query = mysqli_query($conn,$sql);
if($query) {
    succ('../index.php','สร้างโพสต์ สำเร็จ');
    
}else{
    err('../index.php','สร้างโพสต์ ไม่สำเร็จ');

}


?>