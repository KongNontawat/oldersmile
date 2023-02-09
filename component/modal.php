<div class="modal fade" id="modal">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5>สร้างโพสต์/บทความ</h5>
                <button class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <form action="post_proc/post_add_proc.php" method="post" enctype="multipart/form-data">
                    <textarea name="post_body" id="" cols="30" rows="5" class="form-control mb-3" placeholder="เขียนเรื่องราวเกี่ยวกับสุขภาพ..."></textarea>
                    <input class="form-select mb-3" list="datalist" id="cat_name" name="cat_name" placeholder="หมวดหมู่....">
                    <datalist id="datalist">
                            <?php foreach($query_all_cat as $cat3): ?>
                            <option value="<?php echo $cat3['cat_name'] ?>">
                            <?php endforeach; ?>
                    </datalist>
                    <div class="input-group">
                        <label for="image" class="input-group-text">รูป/วีดีโอ</label>
                        <input type="file" name="post_media" accept="image/*,video/mp4,video/*" id="image" class="form-control"> 
                    </div>

                    <button type="submit" class="btn btn-primary col-12 btn-lg mt-3">โพสต์</button>
                </form>
            </div>
        </div>
    </div>
</div>