<?php


$controller = '';
if(!empty($_GET['controller'])){
    $controller = $_GET['controller'];
}

switch($controller){
    case '':
        require 'controller/root_controller.php';
        break;
    case 'lop':
        require 'controller/lop_controller.php';
        break;
    case 'sinh_vien':
        require'controller/sinh_vien_controller.php';
        break;
    default:
        echo 'controller not found';
        break;
}