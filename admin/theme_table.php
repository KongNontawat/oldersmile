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
                            <li class="breadcrumb-item active">จัดการ</li>
                        </ol>   

                        <div class="d-flex flex-wrap justify-content-between">
                            <h3>จัดการ</h3>

                            <div class="d-flex flex-wrap">
                                <a href="" class="btn btn-primary me-3">+ เพิ่ม</a>

                                <form action="" method="get">
                                    <div class="input-group">
                                        <input type="text" name="search" id="" class="form-control" placeholder="ค้นหา...">
                                        <button type="submit" class="btn btn-outline-secondary">ค้นหา</button>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <!-- Table!!! -->
                        <div class="table-responsive mt-3">
                            <table class="table table-hover align-middle">
                                <thead>
                                    <tr>
                                        <th>Text</th>
                                        <th>Text</th>
                                        <th>Text</th>
                                        <th>Text</th>
                                        <th>Text</th>
                                        <th>Text</th>
                                        <th>Text</th>
                                        <th>Text</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>Test</td>
                                        <td>
                                            <a href="_mng.php" class="btn btn-warning btn-sm">แก้ไข</a>
                                            <a href="_mng.php" class="btn btn-danger btn-sm">ลบ</a>
                                        </td>
                                    </tr>
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
            $('.sidebar a.').addClass('active');
        })
    </script>

</body>

</html>