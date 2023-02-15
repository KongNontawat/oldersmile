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
<body class="w-100 vh-100 d-flex justify-content-center align-items-center px-2">
    <!-- Alert -->

    <main class="w-100" style="max-width:450px">
        <div class="card shadow-sm">
            <div class="card-body px-4 pt-5">
                <a href="index.php" class="text-center">
                    <h1 class="text-logo"><b>OlderSmile</b></h1>
                </a>
                <h3 class="my-3 text-logo2 text-center">เข้าสู่ระบบ</h3>
                <form action="auth_proc/login_proc.php" method="post">
                    <?php include('component/alert2.php'); ?>

                    <div class="mb-3">
                        <label for="">ชื่อผู้ใช้ :</label>
                        <input type="text" name="user_name" required id="" autofocus placeholder="โปรดกรอกชื่อผู้ใช้" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="">รหัสผ่าน :</label>
                        <input type="password" name="user_pass" required id="" placeholder="โปรดกรอกรหัสผ่าน" class="form-control">
                    </div>

                    <div class="mt-4 text-center">
                        <button type="submit" class="btn btn-primary col-12 btn-lg mb-3">เข้าสู่ระบบ</button>
                        <a href="register.php" class="text-link text-primary">สมัครสมาชิก?</a>
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