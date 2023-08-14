<?php
switch($action){
    case '':
        require 'model/lop_model.php';
        $result = lop_index();
        require 'view/lop_view/index.php';
        break;
    case 'create':
        require 'view/lop_view/create.php';
        break;
    case 'store':
        $ten_lop = $_POST['ten_lop'];
        require 'model/lop_model.php';
        lop_store($ten_lop);
        redirectToIndex();
        break;
    case 'edit':
        $ma_lop = $_GET['ma'];
        require 'model/lop_model.php';
        $first = lop_edit($ma_lop);
        require 'view/lop_view/edit.php';
        break;
    case 'update':
        $ma_lop = $_POST['ma_lop'];
        $ten_lop = $_POST['ten_lop'];
        require 'model/lop_model.php';
        lop_update($ten_lop, $ma_lop);
        redirectToIndex();
        break;
    case 'delete':
        $ma_lop = $_GET['ma'];
        require 'model/lop_model.php';
        lop_delete($ma_lop);
        redirectToIndex();
        break;
   
    default:
        echo "action not allowed";
        break;
}

function redirectToIndex() {
    header('location:index.php?controller=lop');
    exit();
}
