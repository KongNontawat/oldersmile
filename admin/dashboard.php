<?php
include('../conn.php');
include('auth_proc/check_login.php');

$sql = "SELECT *,COUNT(pl.post_like) as count FROM post AS p LEFT JOIN post_like as pl ON p.post_id = pl.post_id GROUP BY p.post_id ORDER BY count DESC";
$query = mysqli_query($conn,$sql);
$sql2 = "SELECT * FROM advert AS a LEFT JOIN category as c ON c.cat_id = a.cat_id LEFT JOIN user as u ON u.user_id = a.user_id ORDER BY ad_point DESC";
$query2 = mysqli_query($conn,$sql2);

$sql1 = "SELECT * FROM user";
$re1 = mysqli_query($conn,$sql1);

$sql2 = "SELECT * FROM post";
$re2 = mysqli_query($conn,$sql2);

$sql3 = "SELECT * FROM category";
$re3 = mysqli_query($conn,$sql3);

$best_cat = mysqli_query($conn,"SELECT *,COUNT(p.cat_id) as count FROM category AS c LEFT JOIN post AS p ON c.cat_id = p.cat_id WHERE NOT c.cat_id = 1 GROUP BY c.cat_id ORDER BY count DESC LIMIT 7");

$user_role = mysqli_query($conn,"SELECT *,COUNT(user_role) as count FROM user GROUP BY user_role");

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

                <div class="container-fluid mt-3 pb-5">
                    <div class="row g-3 mb-3">
                        <div class="col-lg-7">
                            <div class="card shadow-sm mb-3">
                                <div class="card-body">
                                <h4 class="mb-2"><img src="../icon/chart2.png" width="40" height="40" alt="" class="me-2">แดชบอร์ด</h4>

                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="rounded-4 p-3 text-center" style="background:#FFE2E6;">
                                                <img src="../icon/people.png" alt="" width="50" height="50">
                                                <h2 class="my-2"><?php echo number_format(mysqli_num_rows($re1)) ?></h2>
                                                <h6>ยอดผู้ใช้ทั้งหมด</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="rounded-4 p-3 text-center" style="background:#FFF4DE;">
                                                <img src="../icon/post.png" alt="" width="50" height="50">
                                                <h2 class="my-2"><?php echo number_format(mysqli_num_rows($re2)) ?></h2>
                                                <h6>จำนวนโพสต์ทั้งหมด</h6>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="rounded-4 p-3 text-center" style="background:#DCFCE7;">
                                                <img src="../icon/category.png" alt="" width="50" height="50">
                                                <h2 class="my-2"><?php echo number_format(mysqli_num_rows($re3)) ?></h2>
                                                <h6>จำนวนหมวดหมู่</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h5 class="mb-3 text-center">หมวดหมู่ที่ผู้ใข้สนใจมากที่สุด</h5>
                                    <canvas id="myChart2" style="max-height:195px;"></canvas>
                                </div>
                            </div>

                        </div>

                        <div class="col-lg-5">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                <h5 class="mb-3 text-center">สถานะผู้ใช้ในระบบ</h5>
                                <canvas id="myChart" style="max-height:500px;"></canvas>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h6 class="mb-3">โพสต์ยอดนิยม</h6>
                                    <table class="table table-hover align-middle">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 20%;">รูป</th>
                                                <th style="width: 60%;">เนื้อหา</th>
                                                <th style="width: 15%;">ยอดถูกใจ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query as $i => $row):?>
                                            <tr>
                                                <td><?php echo $i+1;?></td>
                                                <td><img src="../img/<?php echo $row['post_media'];?>" alt="" width="100" height="60" class="rounded-4"></td>
                                                <td><p class="text-o-1"><?php echo $row['post_body'];?></p></td>
                                                <td><?php echo $row['count'];?></td>
                                            </tr>
                                            <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card shadow-sm">
                                <div class="card-body">
                                    <h6 class="mb-3">โฆษณางบสูงสุด</h6>
                                    <table class="table table-hover align-middle">
                                        <thead>
                                            <tr>
                                                <th style="width: 5%;">#</th>
                                                <th style="width: 20%;">รูป</th>
                                                <th style="width: 50%;">เนื้อหา</th>
                                                <th style="width: 15%;">กลุ่มเป้าหมาย</th>
                                                <th style="width: 10%;">งบโฆษณา</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($query2 as $i2 => $row2):?>
                                            <tr>
                                                <td><?php echo $i2+1;?></td>
                                                <td><img src="../img/<?php echo $row2['ad_image'];?>" alt="" width="100" height="60" class="rounded-4"></td>
                                                <td><p class="text-o-1"><?php echo $row2['ad_body'];?></p></td>
                                                <td><?php echo $row2['cat_name'];?></td>
                                                <td><?php echo $row2['ad_point'];?></td>
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

        </div>

    </div>
    <script src="../jquery/jquery-3.6.2.min.js"></script>
    <script src="../boostrap/bootstrap.bundle.min.js"></script>
    <script src="../js/admin.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.2.0/dist/chart.umd.min.js"></script>

    <script>
        const ctx = document.getElementById('myChart');

        new Chart(ctx, {
            type: 'pie',
            data: {
            labels: ['Admin','Market','Partner','User'   ],
            datasets: [
                {
                    label: 'จำนวน',
                    data: [<?php foreach($user_role as $user_role2){echo $user_role2['count'].',';} ?>],
                    borderWidth: 1,
                    backgroundColor: ['#F4E8FF','#FFE2E6','#DCFCE7','#FFF4DE'],
                },
            ]
            },
            options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                },
            }
        });
    </script>
    <script>
        const ctx2 = document.getElementById('myChart2');

        new Chart(ctx2, {
            type: 'bar',
            data: {
            labels: [<?php foreach($best_cat as $best_catt2){echo '"'.$best_catt2['cat_name'].'"'.',';} ?>],
            datasets: [
                {
                    label: '',
                    data: [<?php foreach($best_cat as $best_catt){echo $best_catt['count'].',';} ?>],
                    borderWidth: 1,
                    backgroundColor: ['#FFE2E6','#FFF4DE','#DCFCE7','#F4E8FF','#CEF2FF','#FFE9E1','#CDD6F2'],
                },
            ]
            },
            options: {
                scales: {
                    y: {
                    beginAtZero: true
                    }
                },
            }
        });
    </script>
    <script>
        $(function () {
            $('.sidebar a.dashboard').addClass('active');
        })
    </script>



</body>

</html>