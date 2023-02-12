<?php
include('../conn.php');
include('auth_proc/check_login.php');

$sql = "SELECT * FROM advert AS a LEFT JOIN category AS c ON a.cat_id = c.cat_id WHERE ad_status = 0";
$query = mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                            <li class="breadcrumb-item active">อนุมัติโฆษณา</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3>อนุมัติโฆษณา</h3>

                        </div>

                        <!-- Table!!! -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th style="width: 5%;">#</th>
                                        <th style="width: 15%;"></th>
                                        <th style="width: 30%;">เนื้อหา</th>
                                        <th style="width: 15%;">กลุ่มเป้าหมาย</th>
                                        <th style="width: 15%;">งบโฆษณา</th>
                                        <th style="width: 20%;"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach($query as $i => $row):?>
                                    <tr>
                                        <td><?php echo $i+1;?></td>
                                        <td>
                                            <img src="../img/<?php echo $row['ad_image'];?>" height="100"alt="">
                                        </td>
                                        <td><?php echo $row['ad_body'];?></td>
                                        <td><?php echo $row['cat_name'];?></td>
                                        <td><?php echo $row['ad_point'];?></td>
                                        <td>
                                            <a href="ad_proc/ad_allow_proc.php?id=<?php echo $row['ad_id'];?>&point=<?php echo $row['ad_point'];?>&user_id=<?php echo $row['user_id'];?>" class="btn btn-success px-4">อนุมัติ</a>
                                            <a onclick="return confirm('คุณแน่ใจ หรือไม่ ว่าจะไม่อนุมัติ')" href="ad_proc/ad_cancel_proc.php?id=<?php echo $row['ad_id'];?>" class="btn btn-danger">ไม่อนุมัติ</a>
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
            $('.sidebar a.ad').addClass('active');
        })
    </script>

</body>

</html>