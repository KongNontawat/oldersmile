<?php
include('conn.php');
include('auth_proc/check_login.php');

$id = $my_id;
$query_user = mysqli_query($conn, "SELECT * FROM user WHERE user_id = '$id'");
$user = mysqli_fetch_assoc($query_user);

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
                    <form action="user_proc/wallet_add_proc.php" method="post" enctype="multipart/form-data">
                    <h4 class="mt-3 mb-4 text-center">กระเป๋าเงินของฉัน</h4>

                        <div class="d-flex align-items-center justify-content-center">
                            <img src="icon/money.png" alt="" class="me-2" width="40" height="40">
                            <h4>จำนวนเงินในกระเป๋า : <?php echo number_format($user['user_wallet'],2) ?> บาท</h4>
                        </div>

                        <h5 class="my-3">เติมเงิน</h5>
                        <div class="mb-3">
                            <label for="">จำนวนเงินที่ต้องการเติม</label>
                            <input type="number" name="user_wallet" id="" required class="form-control" min="1" placeholder="จำนวนเงินที่ต้องการเติม (บาท)">
                        </div>

                        <div class="mt-3">
                            <button type="button" class="btn btn-outline-primary col-12 btn-showdata">ยืนยัน</button>
                        </div>

                        <div class="showdata mt-4 d-none">
                            <label for="">คัดลอกเลข E-wallet เพื่อนำไปเติมเงิน</label>
                            <input type="text" name="" disabled readonly id="" class="form-control" value="<?php echo rand(10000000000000,999999999999999) ?>">

<h5 class="mt-3">วิธีเติมเงิน</h5>
<pre class="mt-2">
1.คัดลอกเลข E-wallet
2.เข้าแอพธนาคารของท่าน
3.เลือกเมนู เติมเงิน > เติมเงินพร้อมเพย์
4.วางเลข E-wallet ที่คัดลอกไว้แล้ว กดเติมเงิน
</pre>


<div class="mt-4">
                            <button type="submit" class="btn btn-primary col-12 btn-lg">เติมเงิน</button>
                        </div>
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
            $('.active-menu a.wallet').addClass('active');
            $('.active-header').text('กระเป๋าเงิน');

            $('.btn-showdata').click(function() {
                $('.showdata').removeClass('d-none')
            })

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