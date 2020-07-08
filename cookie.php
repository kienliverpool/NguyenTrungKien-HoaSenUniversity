<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Tên đăng nhập:    <input type="text" name="user">
    Mật khẩu:         <input type="password" name="pass">
    <input type="submit" name="submit" value="Đăng nhập">
    </form>
    <?php
    if(isset($_POST["submit"])){
        setcookie("user",$_POST["user"],time()+10);
        setcookie("pass",$_POST["pass"],time()+10);
        header("location: showcookie.php");
    }
    ?>
</body>
</html>