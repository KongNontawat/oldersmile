<?php
include('../conn.php');

$user_name = $_POST['user_name'];
$user_gender = $_POST['user_gender'];
$user_dob = $_POST['user_dob'];
$user_tel = $_POST['user_tel'];
$user_pass = $_POST['user_pass'];
$user_role = 'user';
$user_wallet =0;
$user_image = '';

$user_pass2 = $_POST['user_pass2'];

if($user_pass == $user_pass2) {
    $sql = "SELECT * FROM user WHERE user_name = '$user_name'";
    $query = mysqli_query($conn,$sql);
    if(mysqli_num_rows($query) >0 ){
        err('../register.php','ชื่อผู้ใช้นี้มีอยู่แล้ว');
        
    }else{
        
        if($_FILES['user_image']['error'] == 0){
            $ext = end(explode('.',$_FILES['user_image']['name']));
            $user_image = md5(uniqid()).'.'.$ext;
            move_uploaded_file($_FILES['user_image']['tmp_name'],'../img/'.$user_image);
        }else{
            $user_image = 'avatar.png';
        }
        
        $user_pass = md5($user_pass);
        $sql2 = "INSERT INTO user VALUES ('','$user_name','$user_gender','$user_dob','$user_tel','$user_pass','$user_role','$user_wallet','$user_image')";
        $query2 = mysqli_query($conn,$sql2);
        $user_id = mysqli_insert_id($conn);
        foreach($_POST['cat_id'] as $cat) {
            $query_cat = mysqli_query($conn, "INSERT INTO user_cat VALUES('$user_id','$cat')");
        }
        if($query2) {
            succ('../login.php','สมัครสมาชิก สำเร็จ');
            
        }else{
            err('../register.php','บันทึกข้อมูล ไม่สำเร็จ');

        }

    }

}else{
    err('../register.php','รหัสผ่านไม่ตรงกัน');
}

?>