<?php
include('../../conn.php');

$id = $_GET['id'];

$sql = "UPDATE market SET mar_status = 1 WHERE user_id = '$id'";

if($query) {
    succ('../mar_mng.php','ไม่อนุมัติ สำเร็จ');
    
}else{
    err('../mar_detail.php','ไม่อนุมัติ ไม่สำเร็จ');

}

?>