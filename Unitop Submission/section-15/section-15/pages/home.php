<div id="content">
    <form action="" enctype="multipart/form-data" method="POST">
        <label for="subject">Tiêu đề</label>
        <input type="text" name="subject" id="subject" value="">
        <?php form_error('subject') ?>
        <label for="content_body">Mô tả ngắn</label>
        <textarea class="" name="content" rows="5" cols="100" id="content_body"></textarea>
        <label>Ảnh đại diện</label> 
        <input type="file" name="file" id="file" value="">
        <?php form_error('file') ?>
        <label>Mô tả chi tiết</label> 
        <textarea class="ckeditor" name="post_detail" rows="5" cols="10"></textarea>
        <?php form_error('post_detail') ?>
        <input type="submit" name="btn_post" value="Đăng bài" id="btn_post">
    </form>
</div>