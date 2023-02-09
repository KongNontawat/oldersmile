<?php
include('../../conn.php');

$id = $_GET['id'];

$sql = "DELETE FROM question WHERE ques_id = '$id'";
$query = mysqli_query($conn,$sql);
if($query) {
    succ('../ques_mng.php','ลบ สำเร็จ');
    
}else{
    err('../ques_mng.php','ลบ ไม่สำเร็จ');

}

?>