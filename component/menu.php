<div class="active-menu">
    <?php if(isset($_SESSION['login']) AND $_SESSION['my_role'] != 'user'): ?>
    <a href="#!" data-bs-target="#modal" data-bs-toggle="modal" class="btn btn-primary col-12 mt-2 mb-2">+ สร้างโพสต์</a>
    <?php endif; ?>
    <a href="my_profile.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center fs-5 my_profile"><img src="img/<?php echo (isset($_SESSION['my_image']))?$_SESSION['my_image']:'avatar.png' ?>" class="rounded-circle me-2" alt="" width="40" height="40"><?php echo (isset($_SESSION['my_name']))?$_SESSION['my_name']:'โปรดเข้าสู่ระบบก่อน' ?></a>
    <a href="chat_list.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center chat_list"><img src="icon/chat.png" class="me-2" alt="" width="30" height="30"><p>แชท</p></a>
    <a href="search.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center search"><img src="icon/search.png" class="me-2" alt="" width="30" height="30"><p>ค้นหา</p></a>
    <a href="follow.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center follow"><img src="icon/follow.png" class="me-2" alt="" width="30" height="30"><p>ติดตาม</p></a>
    <a href="category.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center category"><img src="icon/pin.png" class="me-2" alt="" width="30" height="30"><p>เรื่องที่น่าสนใจ</p></a>
    <a href="activity.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center activity"><img src="icon/megaphone.png" class="me-2" alt="" width="30" height="30"><p>ประชาสัมพันธ์</p></a>

    <?php if(isset($_SESSION['login']) AND $_SESSION['my_role'] == 'market'): ?>
    <a href="promote.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center promote"><img src="icon/promote.png" class="me-2" alt="" width="30" height="30"><p>โปรโมท</p></a>
    <?php endif; ?>
    <a href="wallet.php" class="rounded-4 px-1 py-2 mb-1 d-flex align-items-center wallet"><img src="icon/wallet.png" class="me-2" alt="" width="30" height="30"><p>กระเป๋าเงิน</p></a>

    <?php if(mysqli_num_rows($query_my_cat) > 0): ?>
    <h5 class="mt-3 mb-1">ความสนใจของฉัน</h5>
    <?php endif; ?>
    <?php 
    if(isset($my_id)):
    $query_my_cat_2 = mysqli_query($conn, "SELECT * FROM user_cat AS uc LEFT JOIN category AS c ON uc.cat_id = c.cat_id WHERE user_id = '$my_id'");
    foreach($query_my_cat_2 as $my_cat2):
    ?>
    <a href="index.php?cat_id=<?php echo $my_cat2['cat_id'] ?>&cat_name=<?php echo $my_cat2['cat_name'] ?>" class="rounded-3 px-1 d-block text-primary" style="font-size:17px!important;">#<?php echo $my_cat2['cat_name'] ?></a>
    <?php endforeach; ?>
    <?php endif; ?>
</div>