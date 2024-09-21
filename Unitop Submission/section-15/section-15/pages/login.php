<?php
session_start();
require '../lib/data.php';
require '../lib/validation.php';
if (isset($_POST['login'])) {
    $error = array();
    if (empty($_POST['username'])) {
        $error['username'] = 'Không để trống username';
    } else {
        $username = $_POST['username'];
    }
    if (empty($_POST['password'])) {
        $error['password'] = 'Không để trống password';
    } else {
        $password = $_POST['password'];
    }

   if(!empty($username) && !empty($password)){
       $_SESSION['login'] = true;
       $_SESSION['username'] = $username;
       header("location: ../index.php");
   }
}
?>

<html>
    <head>
        <title>Danh sách đăng nhập</title>
    </head>
    <link href="../public/style.css" rel="stylesheet" type="text/css"/>
    <body>
        <div id="wrapper">
            <div id="content">
                <h1>Đăng nhập</h1>
                <form action="" method="POST">
                    <label for="username">Username</label>
                    <input type="type" name="username" id="username" value=""> 
                    <?php form_error('username') ?>
                     <label for="password">Password</label>
                    <input type="password" name="password" id="password"> 
                    <?php form_error('password') ?> <br> <br>
                    <input type="submit" name="login" value="Login">
                </form>
                    <h5>Username password tùy ý</h5>
            </div>
        </div>

    </body>
</html>
