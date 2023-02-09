<?php
include('conn.php');

$sql = "SELECT * FROM user WHERE NOT user_id = '$my_id'";
if(isset($_GET['search'])) {
    $sql = "SELECT * FROM user WHERE NOT user_id = '$my_id' AND user_name LIKE '%{$_GET['search']}%'";
}

$query_user = mysqli_query($conn, $sql);
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




                <div class="card shadow-sm mb-3">
                    <div class="card-body">
                    <form action="" method="get" class="d-flex align-items-center">
                            <img src="icon/search.png" width="30" height="30" alt="" class="me-2">
                            <div class="input-group">
                                <input type="text" name="search" placeholder="ค้นหา..." id="" class="form-control">
                                <button type="submit" class="btn btn-outline-primary">ค้นหา</button>
                            </div>
                        </form>
                    </div>
                </div>

                <ul class="list-group">
                    <?php foreach($query_user as $user): ?>
                    <li class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                        <a href="user_profile.php?id=<?php echo $user['user_id'] ?>" class="d-flex align-items-center">
                            <img src="img/<?php echo $user['user_image'] ?>" alt="" class="rounded-circle me-2 border" width="40" height="40">
                            <p style="font-size: 18px;"><?php echo $user['user_name'] ?></p>
                            <?php if($user['user_role'] == 'admin' OR $user['user_role'] == 'partner'): ?>
                            <img src="icon/verify.png" alt="" class="ms-1" width="15" height="15">
                            <?php endif; ?>
                        </a>
                        <a href="user_profile.php?id=<?php echo $user['user_id'] ?>" class="btn btn-outline-primary btn-sm">ดูโปรไฟล์</a>
                    </li>
                    <?php endforeach; ?>
                </ul>
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
            $('.active-menu a.search').addClass('active');
            $('.active-header').text('ค้นหา');

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