<?php if(isset($_SESSION['succ'])): ?>
<section class="position-fixed end-0 bottom-0 m-2">
    <div class="toast bg-success show py-0" style="max-width:280px">
        <div class="d-flex">
            <div class="toast-body text-white fs-5"><?php echo $_SESSION['succ']; unset($_SESSION['succ']); ?></div>
            <button class="btn-close btn-close-white m-auto me-2 btn-close-toast"></button>
        </div>
    </div>
</section>
<?php endif; ?>
<?php if(isset($_SESSION['err'])): ?>
<section class="position-fixed end-0 bottom-0 m-2">
    <div class="toast bg-danger show py-0" style="max-width:280px">
        <div class="d-flex">
            <div class="toast-body text-white fs-5"><?php echo $_SESSION['err']; unset($_SESSION['err']); ?></div>
            <button class="btn-close btn-close-white m-auto me-2 btn-close-toast"></button>
        </div>
    </div>
</section>
<?php endif; ?>