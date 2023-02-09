<?php
include('../../conn.php');

$id = $_GET['id'];

$sql = "UPDATE partner SET part_status = 1 WHERE user_id = '$id'";

if($query) {
    succ('../part_mng.php','ไม่อนุมัติ สำเร็จ');
    
}else{
    err('../part_detail.php','ไม่อนุมัติ ไม่สำเร็จ');

}

?>