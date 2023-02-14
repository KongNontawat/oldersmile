<?php
include('../conn.php');
include('auth_proc/check_login.php');

$sql = "SELECT * FROM category WHERE not cat_id = 1";
$query = mysqli_query($conn,$sql);
// $row2 = mysqli_fetch_assoc($query2);
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
                            <li class="breadcrumb-item"><a href="ads_mng.php">จัดการโฆษณา</a></li>
                            <li class="breadcrumb-item active">เพิ่มโฆษณา</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3 class="mb-3">เพิ่มโฆษณา</h3>

                        </div>

                        <div class="row">
                            <div class="col-md-5">

                                <form action="ads_proc/ads_add_proc.php" method="post" enctype="multipart/form-data">

                                    <div class="mb-3">
                                        <label for="">เนื้อหา</label>
                                        <textarea name="ad_body" class="form-control" id="" cols="30" rows="5" required placeholder="เนื้อหาโฆษณา"></textarea>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">ลิงก์โฆษณา</label>
                                        <input type="text" name="ad_link" id="" class="form-control" required placeholder="https://...">
                                    </div>
                                    <div class="mb-3">
                                        <label for="">กลุ่มเป้าหมาย</label>
                                        <select name="cat_id" class="form-select" id="" required>
                                            <option value="" >-- เลือกกลุ่มเป้าหมาย --</option>
                                            <?php foreach($query as $i => $row):?>
                                                <option value="<?php echo $row['cat_id'];?>"><?php echo $row['cat_name'];?></option>
                                            <?php endforeach;?>
                                        </select>
                                    </div>
                                    <div class="mb-3">
                                        <label for="">จำนวนการมองเห็น</label>
                                        <input type="number" name="ad_point" id="" class="form-control" required>
                                    </div>

                                    <div class="input-group mb-3">
                                        <label class="input-group-text" for="image">ภาพโฆษณา</label>
                                        <input type="file" name="ad_image" accept="image/*" id="image" class="form-control" required>
                                    </div>

                                    <div class="mt-5">
                                        <a onclick="window.history.back()" href="#" class="btn btn-secondary">กลับ</a>
                                        <button type="reset" class="btn btn-info">ล้างข้อมูล</button>
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
            $('.sidebar a.ads').addClass('active');
        })
    </script>

</body>

</html>