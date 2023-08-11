<?php

$connect = mysqli_connect('localhost','root','','webj2');
mysqli_set_charset($connect,'utf8');

switch ($action) {
    case '':
        $sql = "select * from sinhvien";
        $result = mysqli_query($connect,$sql);
        break;
    
    case 'store':
        $sql = "insert into sinhvien (ten) values ('$ten')";
        mysqli_query($connect,$sql);
        break;
    case 'edit':
        // $sql = "update sinhvien set ten = '$ten' where ma = '$ma'";
        $sql = "select * from sinhvien where ma = '$ma'";
        $result = mysqli_query($connect,$sql);
        $first = mysqli_fetch_array($result);
        break;
    case 'update':
        $sql = "update sinhvien set ten = '$ten' where ma = '$ma'";
        mysqli_query($connecit,$sql);
        break;
    case 'delete':
        $sql = "delete from sinhvien where ma = '$ma'";
        mysqli_query($connect,$sql);
        break;
}

mysqli_close($connect);