<?php
include('../conn.php');
include('auth_proc/check_login.php');

$sql = "SELECT * FROM user";

if(isset($_GET['search'])) {
    $search = $_GET['search'];
    $sql = "SELECT * FROM user WHERE user_name LIKE '%$search%'";
}

$query = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="../icon/icon.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
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
                            <li class="breadcrumb-item active">จัดการสมาชิก</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3>จัดการสมาชิก</h3>

                            <div class="d-flex flex-wrap">
                                <a href="user_add.php" class="btn btn-primary me-3">+ <i class="bi bi-person-fill"></i> เพิ่มสมาชิก</a>

                                <form action="" method="get">
                                    <div class="input-group d-flex align-items-center">
                                        <input type="text" name="search" id="" class="form-control" placeholder="ค้นหา...">
                                        <button type="submit" class="btn btn-outline-secondary">
                                            <i class="bi bi-search fs-6"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Table!!! -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 5%;"></th>
                                        <th style="width: 20%;">ชื่อผู้ใช้</th>
                                        <th style="width: 12%;">เบอร์โทร</th>
                                        <th style="width: 8%;">เพศ</th>
                                        <th style="width: 15%;">วันเกิด</th>
                                        <th style="width: 10%;">สถานะ</th>
                                        <th style="width: 20%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($query as $i => $row):?>
                                    <tr>
                                        <td><?php echo $i+1;?></td>
                                        <td>
                                            <img src="../img/<?php echo $row['user_image'];?>" class="rounded-circle" height="40" width="40" alt="">
                                        </td>
                                        <td><?php echo $row['user_name'];?></td>
                                        <td><?php echo $row['user_tel'];?></td>
                                        <td><?php echo $row['user_gender'];?></td>
                                        <td><?php echo $row['user_dob'];?></td>
                                        <td>
                                            <?php if($row['user_role']=='admin'):?>
                                                <span class="badge bg-danger"><?php echo $row['user_role'];?></span>
                                            <?php elseif($row['user_role']=='market'):?>
                                                    <span class="badge bg-warning"><?php echo $row['user_role'];?></span>
                                            <?php elseif($row['user_role']=='partner'):?>
                                                <span class="badge bg-success"><?php echo $row['user_role'];?></span>
                                            <?php else:?>
                                                <span class="badge bg-primary"><?php echo $row['user_role'];?></span>
                                            <?php endif;?>

                                        </td>
                                        <td>
                                            <a href="user_edit.php?id=<?php echo $row['user_id'];?>" class="btn btn-warning btn-sm mb-3"><img src="../icon/edit.png" alt=""/></a>
                                            <?php if($row['user_id']!==$my_id):?>
                                            <a onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" href="user_proc/user_del_proc.php?id=<?php echo $row['user_id'];?>" class="btn btn-danger btn-sm mb-3"><img src="../icon/trash.png" style="filter:invert(1);" alt=""/></a>
                                            <?php endif;?>
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
            $('.sidebar a.user').addClass('active');
        })
    </script>

</body>

</html>