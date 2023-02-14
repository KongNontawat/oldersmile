<?php
include('conn.php');
include('auth_proc/check_login.php');

$id = $my_id;
$query_user = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$id'");
$user = mysqli_fetch_assoc($query_user);
$sql = "SELECT * FROM advert WHERE user_id = '$id' ORDER BY ad_id DESC";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($query);

$query_cat6 = mysqli_query($conn, "SELECT * FROM category WHERE NOT cat_id = 1");

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
                    <form action="ad_proc/ad_add_proc.php" method="post" enctype="multipart/form-data">
                    <h4 class="mt-3 mb-4 text-center">ลงโฆษณากับเรา</h4>

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
                                <?php foreach($query_cat6 as $i => $cat):?>
                                    <option value="<?php echo $cat['cat_id'];?>"><?php echo $cat['cat_name'];?></option>
                                <?php endforeach;?>
                            </select>
                        </div>
                        <div class="mb-3">
                            <h5>จำนวนเงินในกระเป๋า : <?php echo number_format($user['user_wallet']) ?> บาท</h5>
                        </div>
                        <span class="text-danger">*หัก 1 บาท ต่อการคลิกโฆษณา 1 ครั้ง</span>
                        <div class="mb-3">
                            <label for="">งบประมาณในการโฆษณา (บาท)</label>
                            <input type="number" name="ad_point" id="" class="form-control" required max="<?php echo $user['user_wallet'] ?>">
                        </div>

                        <div class="input-group mb-3">
                            <label class="input-group-text" for="image">ภาพโฆษณา</label>
                            <input type="file" name="ad_image" accept="image/*" id="image" class="form-control" required>
                        </div>

                        <div class="mt-5">
                            <button type="submit" class="btn btn-primary col-12">ยืนยัน</button>
                        </div>


                        </form>
                    </div>
                </div>

                <h5 class="my-3">โฆษณาของฉัน</h5>
                <?php foreach($query as $ad): ?>
                <div class="card shadow-sm mb-3">
                    <img src="img/<?php echo $ad['ad_image'] ?>" alt="" class="card-img-top">
                    <div class="card-body">
                    <?php if($ad['ad_status'] == 0): ?>
                        <span class="text-warning">รอการอนุมัติ</span>
                        <?php elseif($ad['ad_status'] == 1): ?>
                        <span class="text-success">กำลังเผยแพร่</span>
                        <?php endif; ?>

                        <p>เนื้อหา : <?php echo $ad['ad_body'] ?></p>
                        <p>งบโฆษณา : <?php echo number_format($ad['ad_point'],2) ?> บาท</p>
                        <a href="<?php echo $ad['ad_link'] ?>" target="_blank" class="text-primary"><?php echo $ad['ad_link'] ?></a> <br>
                        <?php if($ad['ad_status'] == 0): ?>
                        <a href="ad_proc/ad_cancel_proc.php?id=<?php echo $ad['ad_id'] ?>&user_id=<?php echo $ad['user_id'] ?>&point=<?php echo $ad['ad_point'] ?>" class="btn btn-sm btn-danger px-4 mt-2">ยกเลิกโฆษณานี้</a>
                        <?php endif; ?>
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
            $('.active-menu a.promote').addClass('active');
            $('.active-header').text('โปรโมท');

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