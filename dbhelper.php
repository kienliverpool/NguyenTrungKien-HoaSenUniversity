<?php
require_once('config.php');
function excute($sql){
    //Create connection to Database
    $conn = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
    //Query
    mysqli_query($conn,$sql);
    //Close connection 
    mysqli_close($conn);
}

function excuteResult($sql){
    //Create connection to Database
    $conn = mysqli_connect(HOST,USER,PASSWORD,DATABASE);
    //Query
    $result = mysqli_query($conn,$sql);
    $list = [];
    while($row = mysqli_fetch_array($result)){
        $list[] = $row;
    }
    //Close connection 
    mysqli_close($conn);
    return $list;
}
?>