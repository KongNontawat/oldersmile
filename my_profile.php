<?php
include('conn.php');
include('auth_proc/check_login.php');

$id = $my_id;
$sql = "SELECT * FROM user WHERE user_id = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

$sql2 = "SELECT *,
    (SELECT SUM(post_like) FROM post_like WHERE p.post_id = post_id) AS post_like,
    (SELECT COUNT(*) FROM view_post  WHERE p.post_id = post_id) AS view_post,
    (SELECT COUNT(*) FROM comment WHERE p.post_id = post_id) AS comment
FROM post AS p
    LEFT JOIN category AS c
    ON p.cat_id = c.cat_id
    LEFT JOIN user AS u
    ON p.user_id = u.user_id
WHERE p.user_id = {$id}
GROUP BY p.post_id
ORDER BY p.post_id DESC
";

$query_post = mysqli_query($conn, $sql2);

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
                    <div class="card-body text-center">
                        <h4 class="mt-3 mb-4 text-center">โปรไฟล์ของฉัน</h4>
                        
                        <img src="img/<?php echo $row['user_image'] ?>" alt="" class="rounded-circle border border-2 shadow-sm" width="150" height="150">
                        <h4 class="my-3"><?php echo $row['user_name'] ?></h4>
                        <p class="mb-2">(รหัสสมาชิก : <?php echo $row['user_id'] ?>)</p>
                        <p class="mb-2">เพศ : <?php echo $row['user_gender'] ?></p>
                        <p class="mb-2">วันเกิด : <?php echo $row['user_dob'] ?></p>
                        <p class="mb-2">เบอร์โทร : <?php echo $row['user_tel'] ?></p>
                        <div class="d-flex align-items-center justify-content-center">
                            <img src="icon/money.png" alt="" class="me-2" width="40" height="40">
                            <h4>เงินในกระเป๋า : <?php echo number_format($row['user_wallet']) ?> บาท</h4>
                        </div>
                        <?php if(mysqli_num_rows($query_my_cat) > 0): ?>
                        <h5 class="mt-4 mb-2">ความสนใจของฉัน</h5>
                        <?php endif; ?>


                        <?php 
                        $query_my_cat_4 = mysqli_query($conn, "SELECT * FROM user_cat AS uc LEFT JOIN category AS c ON uc.cat_id = c.cat_id WHERE user_id = '$my_id'");
                        foreach($query_my_cat_4 as $my_cat4):
                        ?>
                        <a href="index.php?cat_id=<?php echo $my_cat4['cat_id'] ?>&cat_name=<?php echo $my_cat4['cat_name'] ?>" class="rounded-3 px-1 text-primary">#<?php echo $my_cat4['cat_name'] ?></a>
                        <?php endforeach; ?>

                        <a href="edit_profile.php" class="btn btn-outline-primary col-12 mt-3">แก้ไขโปรไฟล์</a>
                        <?php if($row['user_role'] == 'admin'): ?>
                        <a href="admin/dashboard.php" class="btn btn-outline-secondary col-12 mt-2">จัดการหลังบ้าน</a>
                        <?php endif; ?>

                        <?php if($row['user_role'] == 'user'): ?>
                        <div class="mt-2">
                            <a href="part.php" class="text-success">สมัครเป็นพันธ์มิตรกับเรา?</a> <br>
                            <a href="mar.php" class="text-warning">สมัครเป็นร้านกับเรา?</a>
                        </div>
                        <?php endif; ?>
                        <div class="mt-4">
                            <a href="auth_proc/logout.php" class="text-danger">ออกจากระบบ</a>
                        </div>

                    </div>
                </div>

                <h4 class="my-3">โพสต์ของฉัน</h4>

                <?php foreach($query_post as $i => $post): ?>
                <div class="card mb-3 shadow-sm">
                    <div class="card-header bg-white d-flex align-items-center justify-content-between">
                        <a href="user_profile.php?id=<?php echo $post['user_id'] ?>" class="d-flex align-items-center">
                            <img src="img/<?php echo $post['user_image'] ?>" alt="" class="rounded-circle me-2 border" width="40" height="40">
                            <p style="font-size: 18px;"><?php echo $post['user_name'] ?></p>
                            <?php if($post['user_role'] == 'admin' OR $post['user_role'] == 'partner'): ?>
                            <img src="icon/verify.png" alt="" class="ms-1" width="15" height="15">
                            <?php endif; ?>
                        </a>
                        <?php if(isset($_SESSION['my_role']) AND ($my_id == $post['user_id'] OR $_SESSION['my_role'] == 'admin')): ?>
                        <a href="post_proc/post_del_proc.php?id=<?php echo $post['post_id'] ?>" class="btn-close" onclick="return confirm('คุณแน่ใจหรือไม่ว่าจะลบโพสต์นี้')"></a>
                        <?php endif; ?>
                    </div>
                    <?php if($post['post_media']): ?>
                        <?php error_reporting(0); ?>
                        <?php if(end(explode('.',$post['post_media'])) == 'mp4'): ?>
                            <video class="w-100" controls autoplay muted>
                                <source src="img/<?php echo $post['post_media'] ?>" type="video/mp4"></source>
                            </video>
                        <?php else: ?>
                            <a href="post_detail.php?id=<?php echo $post['post_id'] ?>"><img src="img/<?php echo $post['post_media'] ?>" alt="" class="card-img-top"></p></a>
                        <?php endif; ?>
                    <?php endif; ?>
                    <div class="card-body">
                        <a href="post_detail.php?id=<?php echo $post['post_id'] ?>"><p class="text-o-3"><?php echo $post['post_body'] ?></p></a>
                        <div class="d-flex align-items-center justify-content-between mt-1 d-flex">
                            <a href="index.php?cat_id=<?php echo $post['cat_id'] ?>&cat_name=<?php echo $post['cat_name'] ?>" class="text-primary">#<?php echo $post['cat_name'] ?></a>
                            <small class="text-muted">โพสต์เมื่อ : <?php echo $post['post_created'] ?></small>
                        </div>
                    </div>
                    <div class="card-footer bg-white d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center">
                            <?php  
                                $query_like = mysqli_query($conn, "SELECT * FROM post_like WHERE post_id = {$post['post_id']} AND user_id = {$my_id}");
                                if(mysqli_num_rows($query_like) > 0):
                            ?>
                            <a href="#!" class="d-flex align-items-center me-3 unlike" id="<?php echo $post['post_id'] ?>">
                                <img src="icon/star-fill.png" alt="" class="me-1" width="25" height="25">
                                <span><?php echo (isset($post['post_like']))?number_format($post['post_like']):'0' ?></span>
                            </a>
                            <?php else: ?>
                            <a href="#!" class="d-flex align-items-center me-3 like" id="<?php echo $post['post_id'] ?>">
                                <img src="icon/star.png" alt="" class="me-1" width="25" height="25">
                                <span><?php echo (isset($post['post_like']))?number_format($post['post_like']):'0' ?></span>
                            </a>
                            <?php endif; ?>
                            <a href="post_detail.php?id=<?php echo $post['post_id'] ?>" class="d-flex align-items-center" id="">
                                <img src="icon/comment.png" alt="" class="me-1" width="25" height="25">
                                <span><?php echo number_format($post['comment']) ?></span>
                            </a>
                        </div>
                        <small class="text-muted">รับชม : <?php echo number_format($post['view_post']) ?> ครั้ง</small>
                    </div>
                </div>
                <?php endforeach; ?>
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
            $('.active-header').text('โปรไฟล์');

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