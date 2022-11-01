<?php
include('conn.php');
$sql_cat = "SELECT * FROM post_category";
$query_cat = mysqli_query($conn, $sql_cat);

$sql_post = "SELECT * FROM post AS p
LEFT JOIN post_Image AS pm
ON p.post_id = pm.post_id
LEFT JOIN post_category AS pc
ON p.post_cat_id = pc.post_cat_id
ORDER BY p.post_id DESC";
$query_post = mysqli_query($conn, $sql_post);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <title>Older Smile</title>
</head>

<body>

  <!-- Top Header -->
  <div class="position-sticky top-0 start-0 end-0" style="z-index: 1000;">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#">
          <h4 class="mb-0 text-primary fw-bold">OlderSmile</h4>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">แบบสอบถาม</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="nav-link" href="#">จัดการหลังบ้าน</a>
            </li>
            <li class="nav-item mx-md-2">
              <a class="btn btn-outline-primary" href="#">เข้าสู่ระบบ</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Appbar -->
    <section class="border pt-1 bg-white">
      <div class="container">
        <nav class="nav nav-pills nav-justified">
          <a href="" class="nav-link bg-light" href="#"><img src="icon/house-door.svg" alt="" width="25"
              height="25"></a>
          <a href="" class="nav-link"><img src="icon/search.svg" alt="" width="25" height="25"></a>
          <a href="" class="nav-link"><img src="icon/cart.svg" alt="" width="25" height="25"></a>
          <a href="" class="nav-link"><img src="icon/chat-left-dots.svg" alt="" width="25" height="25"></a>
          <a href="" class="nav-link"><img src="icon/people.svg" alt="" width="25" height="25"></a>
          <a href="" class="nav-link"><img src="image/avatar.png" class="rounded-circle " alt="" width="40"></a>
        </nav>
      </div>
    </section>
  </div>

  <!-- Tab -->
  <section class="my-2">
    <div class="container">
      <nav class="nav nav-pills nav-justified">
        <a class="nav-link border bg-primary" aria-current="page" href="#">ทั้งหมด</a>
        <a class="nav-link border" href="#">กิจกรรม</a>
        <a class="nav-link border" href="#">หมวดหมู่</a>
      </nav>
    </div>
  </section>

  <!-- Button Trigger Model -->
  <div class="container">
    <section class="py-2 px-4 bg-primary d-flex">
      <img src="image/avatar.png" class="rounded-circle me-2" alt="" width="50" height="50">
      <a href="" class="flex-fill p-2 rounded-pill bg-white text-muted" data-bs-toggle="modal"
        data-bs-target="#create_post"><img src="icon/pencil.svg" alt="" width="30" height="30"> แบ่งปันเรื่องราว</a>
    </section>
  </div>
  <!-- Model Create Post -->
  <div class="modal fade" id="create_post">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">สร้างโพสต์</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="post_procc/post_add.php" method="post" enctype="multipart/form-data">
            <textarea name="post_body" id="" cols="30" rows="5" class="form-control mb-3"
              placeholder="แบ่งปันเรื่องราว"></textarea>
            <select name="post_cat_id" id="" class="form-select mb-3">
              <option selected="selected" disabled="disabled">หมวดหมู่</option>
              <?php foreach($query_cat as $i => $cat): ?>
              <option value="<?php echo $cat['post_cat_id'] ?>"><?php echo $cat['post_cat_name'] ?></option>
              <?php endforeach; ?>
            </select>
            <div class="input-group mb-2">
              <label class="input-group-text" for="inputGroupFile01">รูปภาพ</label>
              <input type="file" name="image_name" class="form-control" id="image" multiple>
            </div>
            <div class="text-center">
              <img src="" alt="" id="imgpreview" style="width: 200px;max-height:200px;">
            </div>
            <button type="submit" class="btn btn-primary btn-lg col-12 mt-3">โพสต์</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Post Box -->
  <section class="py-3">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <div class="d-flex align-items-center flex-column">
            <?php foreach($query_post as $i => $post): ?>
            <div class="card mb-3" style="width:100%;">
              <div class="card-header bg-white d-flex justify-content-between align-items-center">
                <a href="" class="d-flex align-items-center">
                  <img src="image/avatar.png" class="rounded-circle me-2" alt="" width="50" height="50">
                  Kong Nontawat
                </a>
                <div class="dropdown">
                  <a class="" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown">
                    <img src="icon/three-dots.svg" alt="" width="30">
                  </a>

                  <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                  </ul>
                </div>
              </div>
              <img src="image/upload/<?= $post['image_name'] ?>" class="card-img-top" style="max-height:400px;">
              <div class="card-body">
                <p class="card-text"><?= $post['post_body'] ?></p>
                <div class="d-flex justify-content-between align-item-center">
                  <a href="" class="btn btn-sm btn-outline-primary rounded-pills"><?= $post['post_cat_name'] ?></a>
                  <small>โพสต์เมื่อ <?= $post['post_created'] ?></small>
                </div>
                <hr>
                <div class="d-flex justify-content-between align-item-center">
                  <a href="#" class=""><img src="icon/heart.svg" alt="" width="20"> 83</a>
                  <a href="#" class=""><img src="icon/chat.svg" alt="" width="20"> 5 ความคิดเห็น</a>
                </div>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="col-md-4">
          <ul class="list-group">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
          </ul>
        </div>
      </div>
    </div>
  </section>


  <script src="jquery/jquery-3.6.1.min.js"></script>
  <script src="bootstrap/bootstrap.bundle.min.js"></script>
  <script>
    $(function () {
      $('#image').change(function () {
        const file = this.files[0];
        console.log(file);
        if (file) {
          let reader = new FileReader();
          reader.onload = function (event) {
            $('#imgpreview').attr('src', event.target.result);
          }
          reader.readAsDataURL(file);
        }
      });
    })
  </script>
</body>

</html>