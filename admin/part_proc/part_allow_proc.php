<?php
include('../../conn.php');

$id = $_GET['id'];

$sql = "UPDATE partner SET part_status = 1 WHERE user_id = '$id'";
$sql2 ="UPDATE user SET user_role = 'partner' WHERE user_id = '$id'";
$query = mysqli_query($conn,$sql);
$query2 = mysqli_query($conn,$sql2);

if($query2) {
    succ('../part_mng.php','อนุมัติ สำเร็จ');
    
}else{
    err('../part_detail.php','อนุมัติ ไม่สำเร็จ');

}

?>