<nav class="navbar navbar-light bg-white shadow-sm py-1 position-sticky top-0" style="z-index:1000;">
    <div class="container">
        <a href="index.php" class="navbar-brand d-none d-sm-inline">
            <h3 class="text-logo"><b>OlderSmile</b></h3>
        </a>

        <ul class="active-menu nav nav-pills nav-fill flex-fill align-items-center" style="max-width: 500px;">
            <li class="nav-item"><a href="index.php" class="nav-link px-1 px-sm-3 home"><img src="icon/home.png" alt="" width="30" height="30"></a></li>
            <li class="nav-item"><a href="search.php" class="nav-link px-1 px-sm-3 search"><img src="icon/search.png" alt="" width="30" height="30"></a></li>
            <li class="nav-item"><a href="category.php" class="nav-link px-1 px-sm-3 category"><img src="icon/pin.png" alt="" width="30" height="30"></a></li>
            <li class="nav-item"><a href="chat_list.php" class="nav-link px-1 px-sm-3 chat_list"><img src="icon/chat.png" alt="" width="30" height="30"></a></li>
            <li class="nav-item d-md-none"><a href="#!" data-bs-target="#offcanvas" data-bs-toggle="offcanvas" class="nav-link px-1 px-sm-3"><img src="icon/menu.png" alt="" width="30" height="30"></a></li>
        </ul>

        <ul class="navbar-nav justify-content-end" style="max-width: 180px;">
            <li class="nav-item">
                <?php if(!isset($_SESSION['login'])): ?>
                <a href="login.php" class="btn btn-primary d-none d-md-inline">เข้าสู่ระบบ</a>
                <a href="register.php" class="btn btn-outline-primary d-none d-md-inline">สมัคร</a>
                <?php endif; ?>
                <?php if(isset($_SESSION['login']) AND $_SESSION['my_role'] != 'admin'): ?>
                <p class="d-none d-md-inline">ยินดีต้อนรับคุณ : <?php echo $_SESSION['my_name'] ?></p>
                <?php endif; ?>

                <?php if(isset($_SESSION['login']) AND $_SESSION['my_role'] == 'admin'): ?>
                <a href="admin/dashboard.php" class="btn btn-outline-secondary d-none d-md-inline"><img src="icon/chart2.png" alt=""> จัดการหลังบ้าน</a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</nav>