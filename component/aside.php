<?php if(isset($ad_show)): ?>
    <?php 
$query_ad2 = mysqli_query($conn,"SELECT * FROM advert WHERE ad_status = 1 AND cat_id = {$post['cat_id']}");
if(mysqli_num_rows($query_ad2) > 0):
?>
<div class="carousel slide mb-3" id="slide2">
    <div class="carousel-inner">
        <?php foreach($query_ad2 as $i => $ad2): ?>
        <div class="carousel-item <?php echo ($i == 0)?' active':'' ?>">
            <a href="ad_proc/ad_view.php?id=<?php echo $ad2['ad_id'] ?>&part_id=<?php echo $post['user_id'] ?>&link=<?php echo $ad2['ad_link'] ?>" target="_blank"><img src="img/<?php echo $ad2['ad_image'] ?>" alt="" class="w-100 d-block rounded-4" height="250"></a>
        </div>
        <?php endforeach; ?>
    </div>
    <button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#slide2">
        <span class="carousel-control-prev-icon"></span>
    </button>
    <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#slide2">
        <span class="carousel-control-next-icon"></span>
    </button>
</div>
<?php endif; ?>
<?php endif; ?>





<div class="card shadow-sm position-sticky" style="top:70px">
    <div class="card-header bg-white">
        <h5>เรื่องที่น่าสนใจ</h5>
    </div>
    <div class="card-body cat_bar">
        <?php foreach($query_all_cat as $cat1): ?>
        <a href="index.php?cat_id=<?php echo $cat1['cat_id'] ?>&cat_name=<?php echo $cat1['cat_name'] ?>" class="rounded-3 d-block p-1 mb-1 text-primary" style="font-size:19px;">#<?php echo $cat1['cat_name'] ?></a>
        <?php endforeach; ?>
    </div>
</div>