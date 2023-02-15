<?php
include('conn.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="icon/icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon/icon.png" />
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/style.css">
    <title>OlderSmile</title>
</head>
<body class="w-100 d-flex justify-content-center align-items-center py-5 px-2">
    <!-- Alert -->

    <main class="w-100" style="max-width:650px">
        <div class="card shadow-sm">
            <div class="card-body px-4 pt-5">
                <a href="index.php" class="text-center">
                    <h1 class="text-logo"><b>OlderSmile</b></h1>
                </a>
                <h3 class="my-3 text-logo2 text-center">สมัครสมาชิก</h3>
                <form action="auth_proc/register_proc.php" method="post" enctype="multipart/form-data">
                    <?php include('component/alert2.php'); ?>

                    <div class="mb-3">
                                    <label for="">ชื่อผู้ใช้ :</label>
                                        <input type="text" name="user_name" id="" class="form-control" required autofocus>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">เพศ :</label>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="">ชาย</label>
                                            <input class="form-check-input" type="radio" name="user_gender" id="" value="ชาย" required>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <label class="form-check-label" for="">หญิง</label>
                                            <input class="form-check-input" type="radio" name="user_gender" id="" value="หญิง" required>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">วันเกิด :</label>
                                        <input type="date" name="user_dob" id="" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">เบอร์โทร :</label>
                                        <input type="tel" name="user_tel" id="" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">รหัสผ่าน :</label>
                                        <input type="password" name="user_pass" id="" class="form-control" required>
                                    </div>

                                    <div class="mb-3">
                                        <label for="">ยืนยันรหัสผ่าน :</label>
                                        <input type="password" name="user_pass2" id="" class="form-control" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image">รูปโปรไฟล์</label>
                                        <input type="file" name="user_image" id="image" accept="image/*" class="form-control">
                                    </div>
            <div class="text-center mt-2">
              <img src="" class="rounded-4" alt="" id="imgpreview" style="width: 200px;max-height:200px;">
            </div>
                                    <h4 class="my-3">ความสนใจของคุณ</h4>
                                    <?php 
                                    $query_my_cat_2 = mysqli_query($conn, "SELECT * FROM category WHERE NOT cat_id = 1");
                                    foreach($query_my_cat_2 as $my_cat2):
                                    ?>
                                     <div class="form-check form-check-inline">
                                            <label class="form-check-label pe-0" for="<?php echo $my_cat2['cat_id'] ?>"><?php echo $my_cat2['cat_name'] ?></label>
                                            <input class="form-check-input" type="checkbox" name="cat_id[]" id="<?php echo $my_cat2['cat_id'] ?>" value="<?php echo $my_cat2['cat_id'] ?>">
                                    </div>
                                    <?php endforeach; ?>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary col-12 btn-lg mb-3">สมัครสมาชิก</button>
                        <a href="login.php" class="text-link text-primary">เข้าสู่ระบบ?</a>
                    </div>
                </form>
            </div>
        </div>
    </main>
    

    <script src="jquery/jquery-3.6.2.min.js"></script>
    <script src="boostrap/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $('.active-menu a.home').addClass('active');
            $('.active-header').text('หน้าแรก');
        })
    </script>
</body>
</html>