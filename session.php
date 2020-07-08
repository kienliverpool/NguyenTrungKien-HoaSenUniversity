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
    <form method="post">
    Tên đăng nhập: <input type="text" name="user">
    Mật khẩu: <input type="text" name="pass">
    <input type="submit" name="submit" value="Đăng nhập">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $_SESSION['user'] = $_POST['user'];
        $_SESSION['pass'] = $_POST['pass'];
        header("location: showsession.php");
    }
    ?>
</body>
</html>