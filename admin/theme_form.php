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
                            <li class="breadcrumb-item"><a href="">จัดการ</a></li>
                            <li class="breadcrumb-item active"><a href="">จัดการ</a></li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">จัดการ</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-5">

                                <form action="" method="post" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="">Text :</label>
                                        <input type="text" name="" id="" class="form-control" required>
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
                                        <label for="">Text :</label>
                                        <select name="" id="" class="form-select">
                                            <option value="" selected disabled>-- Text --</option>
                                            <option value="">...</option>
                                            <option value="">...</option>
                                            <option value="">...</option>
                                            <option value="">...</option>
                                        </select>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image">รูปภาพ</label>
                                        <input type="file" name="" id="image" class="form-control" required>
                                    </div>

                                    <div class="mt-5">
                                        <a onclick="window.history.back()" href="#" class="btn btn-secondary">กลับ</a>
                                        <button type="submit" class="btn btn-info">ล้างข้อมูล</button>
                                        <button type="submit" class="btn btn-primary px-5">บันทึกข้อมูล</button>
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
            $('.sidebar a.').addClass('active');
        })
    </script>

</body>

</html>