<?php
include('../conn.php');
include('auth_proc/check_login.php');

$id = $_GET['id'];
$sql = "SELECT * FROM partner LEFT JOIN user ON user.user_id = partner.user_id WHERE partner.user_id = '$id'";
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
                            <li class="breadcrumb-item"><a href="part_mng.php">อนุมัติการเป็นพาร์ทเนอร์</a></li>
                            <li class="breadcrumb-item active">รายละเอียดการสมัคร</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">รายละเอียดการสมัคร</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-5">

                                <dl class="row">
                                    <dt class="col-lg-4">ชื่อผู้ใช้</dt>
                                    <dd class="col-lg-8"><?php echo $row['user_name'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">ชื่อ - สกุล</dt>
                                    <dd class="col-lg-8"><?php echo $row['part_fname'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">อีเมล</dt>
                                    <dd class="col-lg-8"><?php echo $row['part_email'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">ที่อยู่</dt>
                                    <dd class="col-lg-8"><?php echo $row['part_address'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">เลขบัญชี</dt>
                                    <dd class="col-lg-8"><?php echo $row['part_bank_number'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">ชื่อบัญชี</dt>
                                    <dd class="col-lg-8"><?php echo $row['part_bank_name'];?></dd>
                                </dl>
                                <dl class="row">
                                    <dt class="col-lg-4">บัญชีธนาคาร</dt>
                                    <dd class="col-lg-8"><?php echo $row['part_bank_acc'];?></dd>
                                </dl>

                                <div class="mt-5">
                                    <a href="#" onclick="window.history.back()" class="btn btn-secondary">กลับ</a>
                                    <a href="part_proc/part_cancel_proc.php?id=<?php echo $row['user_id'];?>" class="btn btn-danger">ไม่อนุมัติ</a>
                                    <a href="part_proc/part_allow_proc.php?id=<?php echo $row['user_id'];?>" class="btn btn-success px-5">อนุมัติ</a>
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
            $('.sidebar a.part').addClass('active');
        })
    </script>

</body>

</html>