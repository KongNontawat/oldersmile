<?php
include('conn.php');
include('auth_proc/check_login.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="boostrap/bootstrap.min.css">
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/style.css">
    <title>OlderSmile</title>
</head>
<body>
    <!-- Alert -->
    <?php include('component/alert.php'); ?>
    <!-- Modal -->
    <?php include('component/modal.php'); ?>

    <!-- Navbar -->
    <?php include('component/navbar.php'); ?>


    <!-- canvas -->
    <?php include('component/canvas.php'); ?>


    <!-- Main -->
    <div class="container pb-5">
        <div class="row gy-3 mt-2 mt-lg-3">
            <!-- Sidebar -->
            <div class="col-md-4 col-lg-3 d-none d-md-block">
                <?php include('component/sidebar.php'); ?>     
            </div>

            <!-- Content -->
            <div class="col-md-8 col-lg-6">
                
                

                <h4 class="active-header mb-2 mb-lg-3 d-md-none"></h4>


                <div class="card shadow-sm">
                    <div class="card-body">
                    <form action="user_proc/mar_add_proc.php" method="post" enctype="multipart/form-data">
                    <h4 class="mt-3 mb-4 text-center">สมัครเป็นร้านกับเรา</h4>
                        <span class="text-muted">หากเป็นร้านค้าจะสามารถลงโฆษณากับเราได้</span>
                        <div class="mb-3">
                        <label for="">ชื่อกิจการ :</label>
                            <input type="text" name="mar_name" id="" class="form-control" required placeholder="โปรดกรอก ชื่อ-สกุล">
                        </div>
                        <div class="mb-3">
                        <label for="">ชื่อ-สกุล เจ้าของกิจการ :</label>
                            <input type="text" name="mar_fname" id="" class="form-control" required placeholder="โปรดกรอก ชื่อ-สกุล">
                        </div>
                        <div class="mb-3">
                        <label for="">อีเมล :</label>
                            <input type="text" name="mar_email" id="" class="form-control" required placeholder="โปรดกรอก อีเมล">
                        </div>
                        <div class="mb-3">
                        <label for="">เบอร์โทร :</label>
                            <input type="text" name="mar_tel" id="" class="form-control" required placeholder="โปรดกรอก เบอร์โทร">
                        </div>
                        <div class="mb-3">
                        <label for="">ที่อยู่ :</label>
                            <textarea name="mar_address" id="" cols="30" rows="4" class="form-control" required placeholder="โปรดกรอก ที่อยู่"></textarea>

                        </div>
                        <div class="mb-3">
                            <select name="mar_type" id="" class="form-select" required>
                                <option value="" disabled selected>-- เลือกประเภทกิจการของท่าน ---</option>
                                <option value="ร้านค้าออนไลน์">ร้านค้าออนไลน์</option>
                                <option value="ห้างร้าน">ห้างร้าน</option>
                                <option value="บริษัท">บริษัท</option>
                                <option value="ร้านของขายชำ">ร้านของขายชำ</option>
                                <option value="ธุรกิจส่วนตัว">ธุรกิจส่วนตัว</option>
                            </select>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary col-12">สมัคร</button>
                        </div>


                        </form>
                    </div>
                </div>
            </div>

            <!-- Aside -->
            <div class="col-md-3 d-none d-lg-block">
                <?php include('component/aside.php'); ?>
            </div>
        </div>
    </div>
    

    <script src="jquery/jquery-3.6.2.min.js"></script>
    <script src="boostrap/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script>
        $(function() {
            $('.active-menu a.my_profile').addClass('active');
            $('.active-header').text('สมัครเป็นร้านค้า');

            $('a.like').click(function() {
                let like = parseInt($(this).text())
                let el = $(this).children().attr('src')
                let id = $(this).attr('id')

                if(el == 'icon/star.png') {
                    $.get('post_proc/like_proc.php?id='+id)
                    $(this).children().attr('src','icon/star-fill.png')
                    $(this).children().text(like+1)
                }else {
                    $.get('post_proc/unlike_proc.php?id='+id)
                    $(this).children().attr('src','icon/star.png')
                    $(this).children().text(like-1)
                }
            })
            $('a.unlike').click(function() {
                let like = parseInt($(this).text())
                let el = $(this).children().attr('src')
                let id = $(this).attr('id')

                if(el == 'icon/star.png') {
                    $.get('post_proc/like_proc.php?id='+id)
                    $(this).children().attr('src','icon/star-fill.png')
                    $(this).children().text(like+1)
                }else {
                    $.get('post_proc/unlike_proc.php?id='+id)
                    $(this).children().attr('src','icon/star.png')
                    $(this).children().text(like-1)
                }
            })
        })
    </script>
</body>
</html>