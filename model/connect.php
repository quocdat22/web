<?php
function connect(){
    $connect = mysqli_connect('localhost','root','','webj2');
    mysqli_set_charset($connect,'utf8');
    return $connect;
}