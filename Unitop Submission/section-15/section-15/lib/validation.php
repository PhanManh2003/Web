<?php

function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field])) {
        echo "<p class = 'error'>(*) {$error[$label_field]}</p>";
    }
}

function account() {
    session_start();
    if (isset($_SESSION['login'])) {
        echo $_SESSION['username'];
    } else {
        header("location: pages/login.php");
    }
}

function form_page() {
    $page = !empty($_GET['page']) ? $_GET['page'] : 'home';
    $path = "pages/{$page}.php";
    if (file_exists($path)) {
        require $path;
    } else {
        echo "Không tồn tại file này trên hệ thống";
    }
}

?>