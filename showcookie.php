<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_COOKIE['user']) && isset($_COOKIE['pass'])){
    echo "Tên đăng nhập: ".$_COOKIE['user']."<br>";
    echo "Mật khẩu: ".$_COOKIE['pass']."<br>";
}
else{
    echo "Cookie này không tồn tại";
}
?>
<br><a href="cookie.php">Quay về trang cookie</a> | <a href="deletecookie.php">Xóa cookie</a>
</body>
</html>