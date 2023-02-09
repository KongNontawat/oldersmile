<?php
include('conn.php');

$sql = "SELECT *,
    (SELECT SUM(post_like) FROM post_like WHERE p.post_id = post_id) AS post_like,
    (SELECT COUNT(*) FROM view_post  WHERE p.post_id = post_id) AS view_post,
    (SELECT COUNT(*) FROM comment WHERE p.post_id = post_id) AS comment
FROM post AS p
    LEFT JOIN category AS c
    ON p.cat_id = c.cat_id
    LEFT JOIN user AS u
    ON p.user_id = u.user_id
GROUP BY p.post_id
ORDER BY p.post_id DESC
";

if(isset($_GET['cat_id'])) {
    $sql = "SELECT *,
    (SELECT SUM(post_like) FROM post_like WHERE p.post_id = post_id) AS post_like,
    (SELECT COUNT(*) FROM view_post  WHERE p.post_id = post_id) AS view_post,
    (SELECT COUNT(*) FROM comment WHERE p.post_id = post_id) AS comment
FROM post AS p
    LEFT JOIN category AS c
    ON p.cat_id = c.cat_id
    LEFT JOIN user AS u
    ON p.user_id = u.user_id
WHERE p.cat_id = {$_GET['cat_id']}
GROUP BY p.post_id
ORDER BY p.post_id DESC
";

}
$sql_act = "SELECT *,
(SELECT SUM(post_like) FROM post_like WHERE post_id = p.post_id) AS post_like,
(SELECT COUNT(*) FROM view_post WHERE post_id = p.post_id) AS view_post,
(SELECT COUNT(*) FROM comment WHERE post_id = p.post_id) AS comment
FROM post AS p
LEFT JOIN user AS u
ON u.user_id = p.user_id
LEFT JOIN category AS c
ON c.cat_id = p.cat_id
WHERE p.cat_id = 1
GROUP BY p.post_id
ORDER BY p.post_id DESC LIMIT 3";

$query_part = mysqli_query($conn, "SELECT * FROM user WHERE user_role = 'partner' LIMIT 3");

$query_act = mysqli_query($conn, $sql_act);
$query_post = mysqli_query($conn, $sql);

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
                
            <?php include('component/banner.php'); ?>

                <nav class="nav nav-pills nav-fill nav-justified mb-3 tab">
                    <a href="index.php" class="nav-link border active">โพสต์ทั้งหมด</a>
                    <a href="my_feed.php" class="nav-link border bg-white">โพสต์ที่สนใจ</a>
                </nav>

                <?php if(!isset($_GET['cat_name'])): ?>
                <h4 class="active-header mb-2 mb-lg-3 d-md-none"></h4>
                <?php endif; ?>

                <?php if(isset($_GET['cat_name'])): ?>
                <h4 class="mb-2 mb-lg-3">เรื่องที่สนใจ : <?php echo $_GET['cat_name']; ?></h4>
                <?php endif; ?>

                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="mb-3"><img src="icon/megaphone.png" class="me-2" width="25" height="25" alt="">ข่าวประชาสัมพันธ์</h5>
                        <?php foreach($query_act as $act): ?>
                        <div class="d-flex pb-2 mb-2 border-bottom">
                            <div class="flex-shrink-1">
                            <a href="post_detail.php?id=<?php echo $act['post_id'] ?>"><img src="img/<?php echo $act['post_media'] ?>" alt="" class="rounded-4" width="150" height="100"></a>
                            </div>
                            <div class="flex-grow-0 ms-2">
                                <a href="user_profile.php?id=<?php echo $act['user_id'] ?>" class="d-flex align-items-center">
                                    <img src="img/<?php echo $act['user_image'] ?>" alt="" class="rounded-circle me-2 border" width="30" height="30">
                                    <small><?php echo $act['user_name'] ?></small>
                                    <?php if($act['user_role'] == 'admin' OR $act['user_role'] == 'partner') : ?>
                                    <img src="icon/verify.png" alt="" class="ms-1" width="15" height="15">
                                    <?php endif; ?>
                                </a>
                                <small class="text-muted" style="font-size:14px"><?php echo $act['post_created'] ?></small> <br>
                                <a href="post_detail.php?id=<?php echo $act['post_id'] ?>"><small class="text-o-1"><?php echo $act['post_body'] ?></small></a>
                            </div>
                        </div>
                        <?php endforeach; ?>
                        <a href="activity.php" class="btn btn-light col-12">ดูทั้งหมด</a>
                    </div>
                </div>



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

                <?php if($i == 4): ?>
                    <div class="card shadow-sm mb-3">
                    <div class="card-body">
                        <h5 class="mb-3"><img src="icon/partner.png" class="me-2" width="25" height="25" alt="">แนะนำผู้เชี่ยวชาญ</h5>
                        <div class="d-flex flex-row justify-content-around text-center">
                            <?php foreach($query_part as $i => $part): ?>
                                <div>
                                <a href="user_profile.php?id=<?php echo $part['user_id'] ?>">
                                <img src="img/<?php echo $part['user_image'] ?>" alt="" class="rounded-circle border mb-2" width="60" height="60">
                                <h6><?php echo $part['user_name'] ?></h6>
                                </a>
                                <a href="chat.php?id=<?php echo $part['user_id'] ?>" class="btn btn-outline-primary btn-sm mt-3">พูดคุย</a>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>

                <?php if($i == rand(1,10)): ?>
                    <?php
                $query_advert = mysqli_query($conn,"SELECT * FROM advert WHERE ad_status = 1 ORDER BY RAND() LIMIT 1");
                $advert = mysqli_fetch_assoc($query_advert);
                ?>
                <div class="card shadow-sm mb-3">
                    <div class="card-header bg-white"><h5>โฆษณา</h5></div>
                    <a href="ad_proc/ad_view.php?id=<?php echo $advert['ad_id'] ?>&link=<?php echo $advert['ad_link'] ?>" target="_blank"><img src="img/<?php echo $advert['ad_image'] ?>" alt="" class="card-img-top advert-img"></a>
                </div>
                <?php endif; ?>
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
            $('.active-menu a.home').addClass('active');
            $('.active-header').text('หน้าแรก');

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