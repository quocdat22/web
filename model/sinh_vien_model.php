<?php

require_once 'model/connect.php';
$connect = connect();

function sinh_vien_index(){
    global $connect;
    $sql = "select sinhvien.*,lop.ten as ten_lop from sinhvien join lop on sinhvien.lop = lop.ma;";
    $result = mysqli_query($connect, $sql);
    mysqli_close($connect);
    return $result;
}

function sinh_vien_store($ten_sinh_vien,$ma_lop){
    global $connect;
    $sql = "insert into sinhvien(ten,lop) values('$ten_sinh_vien','$ma_lop')";
    $result = mysqli_query($connect,$sql);
    mysqli_close($connect);
    return $result;
}

function sinh_vien_edit($ma_sinh_vien){
    global $connect;
    $sql = "select * from sinhvien where ma = '$ma_sinh_vien'";
    $result = mysqli_query($connect,$sql);
    $first = mysqli_fetch_array($result);
    mysqli_close($connect);
    return $first;
}
function sinh_vien_update($ten_sinh_vien,$ma_lop,$ma_sinh_vien){
    global $connect;
    $sql = "update sinhvien set ten = '$ten_sinh_vien' , lop = '$ma_lop' where ma = '$ma_sinh_vien'";
    mysqli_query($connect,$sql);
    mysqli_close($connect);

}
function sinh_vien_delete($ma_sinh_vien){
    global $connect;
    $sql = "delete from sinhvien where ma = '$ma_sinh_vien';";
    mysqli_query($connect,$sql);
    mysqli_close($connect);
}
