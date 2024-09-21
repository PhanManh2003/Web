<html>
    <head>
        <title>title</title>
        <link href="public/style.css" rel="stylesheet" type="text/css"/>
        <script src="plugins/ckeditor/ckeditor.js" type="text/javascript"></script>
    </head>
    <body>
        <div id="wrapper">
            <div id="header">
                <nav id="menu">
                    <ul id="main-menu">
                        <li class="item"><a href="?page=home">Trang chủ</a></li>
                        <li class="item"><a href="?page=product">Sản phẩm</a></li>
                        <li class="item"><a href="?page=contact">Liên hệ</a></li>
                        <li class="item"><a href="?page=about">Giới thiệu</a></li>
                        <li class="item"><a href="?page=post">Tin tức</a></li>
                    </ul>
                    <div id="account">
                        <p class="name"><?php account(); ?> <span><a href="pages/logout.php">Đăng xuất</a></span></p>
                    </div>
                </nav>
            </div>