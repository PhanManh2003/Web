<?php
$file_url = '../public/img/thumb/hinh_nen.jpg';
if(@unlink($file_url)){
    echo "Xóa: {$file_url} thành công";
} else {
    echo "file: {$file_url} không tồn tại trên hệ thống";
}


?>