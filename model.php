<?php

$connect = mysqli_connect('localhost','root','','webj2');
mysqli_set_charset($connect,'utf8');

$sql = "select * from sinhvien";

$result = mysqli_query($connect,$sql);



