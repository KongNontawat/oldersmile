<?php
include('../conn.php');
include('../auth_proc/check_login2.php');

$user_id = $my_id;
$user_wallet = $_POST['user_wallet'];

$sql = "UPDATE user SET
user_wallet=user_wallet + '$user_wallet'
WHERE user_id = '$user_id'
";

$query = mysqli_query($conn,$sql);
if($query) {
    succ('../wallet.php','เติมเงินสำเร็จ');
    
}else{
    err('../wallet.php','เติมเงินไม่สำเร็จ');

}

?>