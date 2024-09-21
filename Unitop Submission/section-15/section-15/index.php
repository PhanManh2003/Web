<?php
require 'lib/data.php';
require 'lib/validation.php';
require 'lib/template.php';
if (isset($_POST['btn_post'])) {
    $error = array();
    $content = $_POST['content'];
    if (empty($_POST['subject'])) {
        $error['subject'] = 'Không để trống tiêu dề';
    } else {
        $subject = $_POST['subject'];
    }
    if (empty($_POST['post_detail'])) {
        $error['post_detail'] = 'Nhập thông tin chi tiết bài viết';
    } else {
        $post_detail = $_POST['post_detail'];
    }
}
if (isset($_FILES['file'])) {
    //Đường dẫn file
    $upload_dir = 'public/img/thumb/';
    $upload_file = $upload_dir . basename($_FILES['file']['name']);
    $type_img_allow = array('jpg', 'gif', 'jpeg', 'png');
    $type = pathinfo($_FILES['file']['name'], PATHINFO_EXTENSION);
    if (!in_array($type, $type_img_allow)) {
        $error['file'] = 'Chỉ upload file ảnh';
    } else {
        //KT kích thước file img <20MB ~ 29.000.000
        $file_size = $_FILES['file']['size'];
        if ($file_size > 29000000) {
            $error['file'] = 'Kích thước ảnh bé hơn 20MB';
        }
        //KT file đã tồn tại
        if (file_exists($upload_file)) {
            $error['file'] = 'File đã tồn tại';
        }
    }
    if (empty($error['file'])) {
        move_uploaded_file($_FILES['file']['tmp_name'], $upload_file);
    }
 
}
?>


<?php get_header(); ?>
<div id="content">
    <?php form_page(); ?>
    <h1><?php if (isset($subject)) echo $subject ?></h1>
    <p><?php if (isset($content)) echo $content ?></p>
    <img class="thumb" src="<?php if (isset($upload_file)) echo $upload_file; ?> "/>
    <div class="post_detail">
        <p><?php if (isset($post_detail)) echo $post_detail ?></p>
    </div>
</div>
<?php get_footer(); ?>

