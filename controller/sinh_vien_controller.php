<?php
switch($action){
    case '':
        require 'model/sinh_vien_model.php';
        $result = sinh_vien_index();
        require 'view/sinh_vien_view/index.php';
        break;
    case 'create':
        require 'model/lop_model.php';
        $dsL = lop_index();
        require 'view/sinh_vien_view/create.php';
        break;
    case 'store':
        $ten_sinh_vien = $_POST['ten_sinh_vien'];
        $ma_lop = $_POST['lop'];
        require 'model/sinh_vien_model.php';
        sinh_vien_store($ten_sinh_vien,$ma_lop);
        redirectToIndex();
        break;
    case 'edit':
        require 'model/lop_model.php';
        $dsL = lop_index();
        $ma_sinh_vien = $_GET['ma'];
        require 'model/sinh_vien_model.php';
        $first = sinh_vien_edit($ma_sinh_vien);
        require 'view/sinh_vien_view/edit.php';
        break;
    case 'update':
        $ma_sinh_vien = $_POST['ma'];
        $ten_sinh_vien = $_POST['ten'];
        $ma_lop = $_POST['lop'];
        require 'model/sinh_vien_model.php';
        sinh_vien_update($ten_sinh_vien,$ma_lop,$ma_sinh_vien);
        
        redirectToIndex();
        break;
    case 'delete':
        $ma_sinh_vien = $_GET['ma'];
        require 'model/sinh_vien_model.php';
        sinh_vien_delete($ma_sinh_vien);
        redirectToIndex();
        break;
    default:
        echo "action not allowed";
        break;


}

function redirectToIndex() {
    header('location:index.php?controller=sinh_vien');
    exit();
}