<?php
include('../conn.php');
include('auth_proc/check_login.php');

$sql = "SELECT * FROM partner LEFT JOIN user ON user.user_id = partner.user_id WHERE partner.part_status = 0";
$query = mysqli_query($conn,$sql);

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

                <div class="container-fluid mt-3 pb-5">

                    <div class="p-4 bg-white shadow-sm rounded-3">
                    
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="../index.php">หน้าแรก</a></li>
                            <li class="breadcrumb-item active">อนุมัติการเป็นพาร์ทเนอร์</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">อนุมัติการเป็นพาร์ทเนอร์</h3>

                        </div>

                        <!-- Table!!! -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 15%;">ชื่อผู้ใช้</th>
                                        <th style="width: 15%;">ชื่อ - สกุล</th>
                                        <th style="width: 15%;">อีเมล</th>
                                        <th style="width: 30%;">ที่อยู่</th>
                                        <th style="width: 10%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($query as $i => $row):?>
                                    <tr>
                                        <td><?php echo $i+1;?></td>
                                        <td><?php echo $row['user_name'];?></td>
                                        <td><?php echo $row['part_fname'];?></td>
                                        <td><?php echo $row['part_email'];?></td>
                                        <td><?php echo $row['part_address'];?></td>
                                        <td>
                                            <a href="part_detail.php?id=<?php echo $row['user_id'];?>" class="btn btn-info btn-sm px-4"><img src="../icon/search2.png" alt=""></a>
                                        </td>
                                    </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
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