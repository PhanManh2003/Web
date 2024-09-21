<?php show_array($_POST); ?>
<div id="content">
    <h1><?php if (isset($subject)) echo $subject ?></h1>
    <p><?php if (isset($content)) echo $content ?></p>
    <img src="<?php if (isset($upload_file)) echo $upload_file; ?> "/>
    <div class="post_detail">
        <p><?php if (isset($post_detail)) echo $post_detail ?></p>
    </div>
</div>