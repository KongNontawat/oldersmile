<?php
include('../conn.php');
include('auth_proc/check_login.php');

$id = $_GET['id'];
$sql = "SELECT * FROM market LEFT JOIN user ON user.user_id = market.user_id WHERE market.user_id = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);


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
                            <li class="breadcrumb-item"><a href="mar_mng.php">อนุมัติการเป็นผู้ค้า</a></li>
                            <li class="breadcrumb-item active">รายละเอียดการสมัคร</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">รายละเอียดการสมัคร</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-5">

                                <dl class="row">
                                    <dt class="col-lg-4">ชื่อกิจการ</dt>
                                    <dd class="col-lg-8"><?php echo $row['mar_name'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">ชื่อ - สกุลเจ้าของ</dt>
                                    <dd class="col-lg-8"><?php echo $row['mar_fname'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">อีเมล</dt>
                                    <dd class="col-lg-8"><?php echo $row['mar_email'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">เบอร์โทร</dt>
                                    <dd class="col-lg-8"><?php echo $row['mar_address'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">ประเภทกิจการ</dt>
                                    <dd class="col-lg-8"><?php echo $row['mar_address'];?></dd>
                                </dl>
                                

                                <div class="mt-5">
                                    <a onclick="window.history.back()" href="#" class="btn btn-secondary"><img src="../icon/back.png" alt=""></a>
                                    <a href="mar_proc/mar_cancel_proc.php?id=<?php echo $row['user_id'];?>" class="btn btn-danger"><img src="../icon/cancel.png" style="width: 13px!important; height:13px!important;" alt=""> ไม่อนุมัติ</a>
                                    <a href="mar_proc/mar_allow_proc.php?id=<?php echo $row['user_id'];?>" class="btn btn-success px-5"><img src="../icon/check.png" alt=""> อนุมัติ</a>
                                </div>
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
            $('.sidebar a.mar').addClass('active');
        })
    </script>

</body>

</html>