<?php
include('../../conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM category WHERE cat_id = '$id'";
$query = mysqli_query($conn,$sql);
if($query) {
    succ('../cat_mng.php','ลบ สำเร็จ');
    
}else{
    err('../cat_mng.php','ลบ ไม่สำเร็จ');

}

?>