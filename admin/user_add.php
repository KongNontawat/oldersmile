<?php
include('../conn.php');
include('auth_proc/check_login.php');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../icon/icon.png">
    <link rel="stylesheet" href="../boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="../css/base.css">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Older Smile</title>
</head>

<body>
    <?php include('component/alert.php');?>

    <!-- Main!!! -->
    <div class="main d-flex">

        <!-- SideBar!!! -->
        <?php include('component/sidebar.php');?>

        <div class="content">
            <!-- NavBar!!! -->
            <?php include('component/navbar.php');?>

            <div class="content-body">

                <div class="container-fluid mt-3 mb-5">

                    <div class="p-4 bg-white shadow-sm rounded-3">
                    
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">หน้าแรก</a></li>
                            <li class="breadcrumb-item"><a href="user_mng.php">จัดการสมาชิก</a></li>
                            <li class="breadcrumb-item active">เพิ่มสมาชิก</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">เพิ่มสมาชิก</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-5">

                                <form action="user_proc/user_add_proc.php" method="post" enctype="multipart/form-data">

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

                                    <div class="mb-3">
                                        <label for="">สถานะ</label>
                                        <select name="user_role" id="" class="form-select" required>
                                            <option value="" selected disabled>-- เลือกสถานะ --</option>
                                            <option value="user">user</option>
                                            <option value="partner">partner</option>
                                            <option value="market">market</option>
                                            <option value="admin">admin</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image">รูปโปรไฟล์</label>
                                        <input type="file" name="user_image" id="image" class="form-control">
                                    </div>

                                    <div class="mt-5">
                                        <a onclick="window.history.back()" href="#" class="btn btn-secondary"><img src="../icon/back.png" alt=""></a>
                                        <button type="reset" class="btn btn-info px-4"><img src="../icon/reset.png" alt=""></button>
                                        <button type="submit" class="btn btn-primary px-4"><img src="../icon/save.png" style="filter:invert(1);" alt=""></button>
                                    </div>


                                </form>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="../jquery/jquery-3.6.2.min.js"></script>
    <script src="../boostrap/bootstrap.bundle.min.js"></script>
    <script src="../js/admin.js"></script>

    <script>
        $(function () {
            $('.sidebar a.user').addClass('active');
        })
    </script>

</body>

</html>