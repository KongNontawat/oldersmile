<?php if(isset($_SESSION['succ'])): ?>
<div class="alert alert-success fade show alert-dismissible py-1 align-items-center">
    <p class="fs-5"><?php echo $_SESSION['succ']; unset($_SESSION['succ']); ?></p>
    <button class="btn-close p-2" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>
<?php if(isset($_SESSION['err'])): ?>
<div class="alert alert-danger fade show alert-dismissible py-1 align-items-center">
    <p class="fs-5"><?php echo $_SESSION['err']; unset($_SESSION['err']); ?></p>
    <button class="btn-close p-2" data-bs-dismiss="alert"></button>
</div>
<?php endif; ?>
