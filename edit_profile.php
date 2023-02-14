<?php
include('conn.php');
include('auth_proc/check_login.php');
$id = $my_id;
$sql = "SELECT * FROM user WHERE user_id = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/x-icon" href="icon/icon.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon/icon.png" />
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
                        <form action="user_proc/edit_profile_proc.php" method="post" enctype="multipart/form-data">
                            <h4 class="mt-3 mb-4 text-center">แก้ไขโปรไฟล์</h4>
                            <div class="mb-3">
                                <label for="">ชื่อผู้ใช้ :</label>
                                <input type="text" name="user_name" id="" class="form-control" required  value="<?php echo $row['user_name'];?>">
                                <input type="hidden" name="user_id" value="<?php echo $row['user_id'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="">เพศ :</label>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="">ชาย</label>
                                    <input <?php echo ($row['user_gender']=='ชาย')?'checked':'';?> class="form-check-input" type="radio" name="user_gender" id="" value="ชาย" required>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label" for="">หญิง</label>
                                    <input <?php echo ($row['user_gender']=='หญิง')?'checked':'';?> class="form-check-input" type="radio" name="user_gender" id="" value="หญิง" required>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label for="">วันเกิด :</label>
                                <input type="date" name="user_dob" id="" class="form-control" required value="<?php echo $row['user_dob'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="">เบอร์โทร :</label>
                                <input type="tel" name="user_tel" id="" class="form-control" required value="<?php echo $row['user_tel'];?>">
                            </div>

                            <div class="mb-3">
                                <label for="">รหัสผ่านใหม่ :</label>
                                <input type="password" name="user_pass" id="" class="form-control">
                                <input type="hidden" name="old_pass" value="<?php echo $row['user_pass'];?>">
                            </div>


                            <div class="input-group mb-3">
                                <label class="input-group-text" for="image">รูปโปรไฟล์</label>
                                <input type="file" name="user_image" id="image" class="form-control">
                                <input type="hidden" name="old_image" value="<?php echo $row['user_image'];?>">
                            </div>

                            <h4 class="my-3">ความสนใจของคุณ</h4>
                                <?php 
                                $query_my_cat_3 = mysqli_query($conn, "SELECT * FROM category WHERE NOT cat_id = 1");
                                foreach($query_my_cat_3 as $my_cat3):
                                ?>
                                    <div class="form-check form-check-inline">
                                        <label class="form-check-label pe-0" for="<?php echo $my_cat3['cat_id'] ?>"><?php echo $my_cat3['cat_name'] ?></label>
                                        <input class="form-check-input" <?php echo (in_array($my_cat3['cat_id'], $my_cat))?' checked':'' ?> type="checkbox" name="cat_id[]" id="<?php echo $my_cat3['cat_id'] ?>" value="<?php echo $my_cat3['cat_id'] ?>">
                                </div>
                                <?php endforeach; ?>

                            <div class="mt-5">
                                <button type="submit" class="btn btn-primary col-12">แก้ไขข้อมูล</button>
                                <a onclick="window.history.back()" href="#" class="btn btn-secondary mt-3 col-12">กลับ</a>
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
            $('.active-header').text('แก้ไขโปรไฟล์');

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