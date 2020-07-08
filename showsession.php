<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_SESSION['user']) && isset($_SESSION['pass'])){
        echo "Tên đăng nhập: ".$_SESSION['user']."<br>";
        echo "Mật khẩu: ".$_SESSION['pass']."<br>";
    }
    else{
        echo "Seesion này không tồn tại";
    }
    ?>
    <br><a href="session.php">Quay về trang Seesion</a> | <a href="deletesession.php">Xóa Seesion</a>
</body>
</html>