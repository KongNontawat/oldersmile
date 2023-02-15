<?php
include('../conn.php');
include('auth_proc/check_login.php');

$id = $_GET['id'];
$sql = "SELECT * FROM post WHERE post_id = '$id'";
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
                            <li class="breadcrumb-item"><a href="pub_mng.php">จัดการส่วนประชาสัมพันธ์</a></li>
                            <li class="breadcrumb-item active">แก้ไขส่วนประชาสัมพันธ์</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">แก้ไขส่วนประชาสัมพันธ์</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-5">

                                <form action="pub_proc/pub_edit_proc.php" method="post" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <textarea name="post_body" class="form-control" id="" cols="30" rows="5" required placeholder="เนื้อหาประชาสัมพันธ์"><?php echo $row['post_body'];?></textarea>
                                        <input type="hidden" name="post_id" value="<?php echo $row['post_id'];?>">
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image">รูปภาพ</label>
                                        <input type="file" name="post_media" accept="image/*" id="image" class="form-control">
                                        <input type="hidden" name="old_media" value="<?php echo $row['post_media'];?>">
                                    </div>


                                    <div class="mt-5">
                                        <a onclick="window.history.back()" href="#" class="btn btn-secondary"><img src="../icon/back.png" alt=""></a>
                                        <button type="submit" class="btn btn-primary px-4"><img src="../icon/edit.png" style="filter:invert(1);" alt=""></button>
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
            $('.sidebar a.pub').addClass('active');
        })
    </script>

</body>

</html>