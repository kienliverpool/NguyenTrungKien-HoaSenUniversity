<?php
setcookie('user',$_COOKIE['user'],time()-10);
setcookie('pass',$_COOKIE['pass'],time()-10);
header('location: showcookie.php');
?>