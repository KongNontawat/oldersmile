<?php
include('conn.php');
include('auth_proc/check_login.php');
$sql = "SELECT * FROM follow AS f LEFT JOIN user AS u ON u.user_id = f.following WHERE f.follower = '$my_id'";
$query_user = mysqli_query($conn, $sql);
$following = [];
foreach($query_user as $foll) {
    array_push($following, $foll['following']);
}
$sql_post = "SELECT *,
    (SELECT SUM(post_like) FROM post_like WHERE p.post_id = post_id) AS post_like,
    (SELECT COUNT(*) FROM view_post  WHERE p.post_id = post_id) AS view_post,
    (SELECT COUNT(*) FROM comment WHERE p.post_id = post_id) AS comment
FROM post AS p
    LEFT JOIN category AS c
    ON p.cat_id = c.cat_id
    LEFT JOIN user AS u
    ON p.user_id = u.user_id
WHERE p.user_id IN (".implode(',',$following).")
GROUP BY p.post_id
ORDER BY p.post_id DESC
";
$query_post = mysqli_query($conn, $sql_post);
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





        <div class="accordion accordion-flush mb-3" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="flush-headingOne">
              <button class="accordion-button collapsed h4" type="button" data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                <img src="icon/follow.png" width="30" height="30" class="me-2" alt=""> ผู้ที่ฉันติดตาม
              </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne"
              data-bs-parent="#accordionFlushExample">
              <div class="accordion-body">
                <ul class="list-group">
                  <?php foreach($query_user as $user): ?>
                  <li
                    class="list-group-item list-group-item-action d-flex justify-content-between align-items-center py-3">
                    <a href="user_profile.php?id=<?php echo $user['user_id'] ?>" class="d-flex align-items-center">
                      <img src="img/<?php echo $user['user_image'] ?>" alt="" class="rounded-circle me-2 border"
                        width="40" height="40">
                      <p style="font-size: 18px;"><?php echo $user['user_name'] ?></p>
                      <?php if($user['user_role'] == 'admin' OR $user['user_role'] == 'partner'): ?>
                      <img src="icon/verify.png" alt="" class="ms-1" width="15" height="15">
                      <?php endif; ?>
                    </a>
                    <a href="user_profile.php?id=<?php echo $user['user_id'] ?>"
                      class="btn btn-outline-primary btn-sm">ดูโปรไฟล์</a>
                  </li>
                  <?php endforeach; ?>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <h5 class="mb-3">โพสต์ของผู้ที่ฉันติดตาม</h5>

        <?php foreach($query_post as $i => $post): ?>
        <div class="card mb-3 shadow-sm">
          <div class="card-header bg-white d-flex align-items-center justify-content-between">
            <a href="user_profile.php?id=<?php echo $post['user_id'] ?>" class="d-flex align-items-center">
              <img src="img/<?php echo $post['user_image'] ?>" alt="" class="rounded-circle me-2 border" width="40"
                height="40">
              <p style="font-size: 18px;"><?php echo $post['user_name'] ?></p>
              <?php if($post['user_role'] == 'admin' OR $post['user_role'] == 'partner'): ?>
              <img src="icon/verify.png" alt="" class="ms-1" width="15" height="15">
              <?php endif; ?>
            </a>
            <?php if(isset($_SESSION['my_role']) AND ($my_id == $post['user_id'] OR $_SESSION['my_role'] == 'admin')): ?>
            <a href="post_proc/post_del_proc.php?id=<?php echo $post['post_id'] ?>" class="btn-close"
              onclick="return confirm('คุณแน่ใจหรือไม่ว่าจะลบโพสต์นี้')"></a>
            <?php endif; ?>
          </div>
          <?php if($post['post_media']): ?>
          <?php error_reporting(0); ?>
          <?php if(end(explode('.',$post['post_media'])) == 'mp4'): ?>
          <video class="w-100" controls autoplay muted>
            <source src="img/<?php echo $post['post_media'] ?>" type="video/mp4">
            </source>
          </video>
          <?php else: ?>
          <a href="post_detail.php?id=<?php echo $post['post_id'] ?>"><img src="img/<?php echo $post['post_media'] ?>"
              alt="" class="card-img-top"></p></a>
          <?php endif; ?>
          <?php endif; ?>
          <div class="card-body">
            <a href="post_detail.php?id=<?php echo $post['post_id'] ?>">
              <p class="text-o-3"><?php echo $post['post_body'] ?></p>
            </a>
            <div class="d-flex align-items-center justify-content-between mt-1 d-flex">
              <a href="index.php?cat_id=<?php echo $post['cat_id'] ?>&cat_name=<?php echo $post['cat_name'] ?>"
                class="text-primary">#<?php echo $post['cat_name'] ?></a>
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