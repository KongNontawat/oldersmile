<?php
include('../conn.php');
include('../auth_proc/check_login2.php');

$user_id = $my_id;
$part_fname = $_POST['part_fname'];
$part_email = $_POST['part_email'];
$part_address = $_POST['part_address'];
$part_detail = $_POST['part_detail'];
$part_bank_number = $_POST['part_bank_number'];
$part_bank_acc = $_POST['part_bank_acc'];
$part_bank_name = $_POST['part_bank_name'];
$part_status = 0;

$sql = "INSERT INTO partner VALUES('','$user_id','$part_fname','$part_email','$part_address','$part_detail','$part_bank_number','$part_bank_acc','$part_bank_name','$part_status')";

$query = mysqli_query($conn,$sql);
if($query) {
    succ('../my_profile.php','สมัครเป็นพันธมิตรสำเร็จ');
    
}else{
    err('../my_profile.php','สมัครเป็นพันธมิตรไม่สำเร็จ');

}

?>