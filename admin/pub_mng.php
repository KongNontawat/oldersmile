<?php
include('../conn.php');
include('auth_proc/check_login.php');

$sql = "SELECT * FROM post WHERE cat_id = 1";
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
                            <li class="breadcrumb-item active">จัดการโพสต์</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3>จัดการโพสต์</h3>

                            <a href="pub_add.php" class="btn btn-primary px-4">+ <img src="../icon/P.png" style="filter: invert(1);" alt=""> โพสต์</a>
                        </div>

                        <!-- Table!!! -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 15%;"></th>
                                        <th style="width: 50%;">เนื้อหา</th>
                                        <th style="width: 10%;">โพสต์เมื่อ</th>
                                        <th style="width: 20%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($query as $i => $row):?>
                                    <tr>
                                        <td><?php echo $i+1;?></td>
                                        <td>
                                            <img src="../img/<?php echo $row['post_media'];?>" height="100"alt="">
                                        </td>
                                        <td><p class="text-o-1"><?php echo $row['post_body'];?></p></td>
                                        <td><?php echo $row['post_created'];?></td>
                                        <td>
                                            <a href="../post_detail.php?id=<?php echo $row['post_id'];?>" class="btn btn-info btn-sm mb-3 px-2">
                                                <img src="../icon/view.png" style="filter:invert(1);" alt="">
                                            </a>
                                            <a href="pub_edit.php?id=<?php echo $row['post_id'];?>" class="btn btn-warning btn-sm mb-3"><img src="../icon/edit.png" alt=""/></a>
                                            <a onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะลบ')" href="pub_proc/pub_del_proc.php?id=<?php echo $row['post_id'];?>" class="btn btn-danger btn-sm mb-3"><img src="../icon/trash.png" style="filter:invert(1);" alt=""/></a>
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
            $('.sidebar a.pub').addClass('active');
        })
    </script>

</body>

</html>