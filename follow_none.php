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



        <h2 class="mb-2 mb-lg-3 text-center mt-4">คุณยังไม่ได้ติดตาม</h2>






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
    $('.active-menu a.follow').addClass('active');
    $('.active-header').text('ติดตาม');

    $('a.like').click(function() {
      let like = parseInt($(this).text())
      let el = $(this).children().attr('src')
      let id = $(this).attr('id')

      if (el == 'icon/star.png') {
        $.get('post_proc/like_proc.php?id=' + id)
        $(this).children().attr('src', 'icon/star-fill.png')
        $(this).children().text(like + 1)
      } else {
        $.get('post_proc/unlike_proc.php?id=' + id)
        $(this).children().attr('src', 'icon/star.png')
        $(this).children().text(like - 1)
      }
    })
    $('a.unlike').click(function() {
      let like = parseInt($(this).text())
      let el = $(this).children().attr('src')
      let id = $(this).attr('id')

      if (el == 'icon/star.png') {
        $.get('post_proc/like_proc.php?id=' + id)
        $(this).children().attr('src', 'icon/star-fill.png')
        $(this).children().text(like + 1)
      } else {
        $.get('post_proc/unlike_proc.php?id=' + id)
        $(this).children().attr('src', 'icon/star.png')
        $(this).children().text(like - 1)
      }
    })
  })
  </script>
</body>

</html>