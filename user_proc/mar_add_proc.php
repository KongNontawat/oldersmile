<?php
include('../conn.php');
include('../auth_proc/check_login2.php');

$user_id = $my_id;
$mar_name = $_POST['mar_name'];
$mar_fname = $_POST['mar_fname'];
$mar_email = $_POST['mar_email'];
$mar_tel = $_POST['mar_tel'];
$mar_address = $_POST['mar_address'];
$mar_type = $_POST['mar_type'];
$mar_status = 0;

$sql = "INSERT INTO market VALUES('','$user_id','$mar_name','$mar_fname','$mar_email','$mar_tel','$mar_address','$mar_type','$mar_status')";

$query = mysqli_query($conn,$sql);
if($query) {
    succ('../my_profile.php','สมัครเป็นร้านค้าสำเร็จ');
    
}else{
    err('../my_profile.php','สมัครเป็นร้านค้าไม่สำเร็จ');

}

?>