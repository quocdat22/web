<?php

require_once 'model/connect.php';
$connect = connect();

function lop_index() {
    global $connect;
    $sql = "select * from lop";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function lop_store($ten_lop) {
    global $connect;
    $sql = "insert into lop(ten) values('$ten_lop')";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    
}

function lop_edit($ma_lop) {
    global $connect;
    $sql = "select * from lop where ma = '$ma_lop'";
    $result = mysqli_query($connect,$sql);
    $first = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $first;
}

function lop_update($ten_lop,$ma_lop) {
    global $connect;
    $sql = "update lop set ten = '$ten_lop' where ma = '$ma_lop'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
    
}

function lop_delete($ma_lop) {
    global $connect;
    $sql = "delete from lop where ma = '$ma_lop';";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}



