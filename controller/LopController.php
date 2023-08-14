<?php 

class LopController{

    function index(){
        require 'model/Lop.php';
        $arr = (new Lop())->all();
        require 'view/lop/index.php';
    }
    function create(){
        require 'view/lop/create.php';
    }
    function store(){
        $ten = $_POST['ten'];
        $ho = $_POST['ho'];
        require 'model/Lop.php';
        (new Lop())->create($ten, $ho);
        header('Location: index.php');  
    }
    function edit(){
        $ma = $_GET['ma'];
        require 'model/Lop.php';
        $first = (new Lop())->find($ma);
        require 'view/lop/edit.php';
    }
    function update(){
        $ma = $_POST['ma'];
        $ten = $_POST['ten'];
        $ho = $_POST['ho'];
        require'model/Lop.php';
        (new Lop())->update($ten,$ho,$ma);
        header('Location: index.php');
    }

    function delete(){
        $ma = $_GET['ma'];
        require'model/Lop.php';
        (new Lop())->delete($ma);
        header('Location: index.php');
    }
    

}