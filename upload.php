<?php
if(isset($_POST['submit'])){
    if($_FILES['upload']['error'] > 0){
        echo "<br>Upload File Failed";
    }
    else{
        move_uploaded_file($_FILES['upload']['tmp_name'],'upload/'.$_FILES['upload']['name']);
        //tmp_name là file nháp
        //'upload/' là tên folder lấy dữ liệu vào
        echo "<br>Upload File Successed";
        echo "<pre>";
        print_r($_FILES['upload']);
        echo "</pre>";
        $st = 'upload/'.$_FILES['upload']['name'];
        echo "<br><a href='$st'>Download File</a>";
    }
}
?>