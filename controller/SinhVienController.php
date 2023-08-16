<?php

class SinhVienController{

    public function index():void{
        require 'model/SinhVien.php';
        $arr = (new SinhVien())->all();
        require 'view/sinhvien/index.php';
    }

    public function create():void{

        require 'model/Lop.php';
        $dsLop = (new Lop())->all();
        require 'view/sinhvien/create.php';
    }
    public function store():void{
        
        require 'model/SinhVien.php';
        (new SinhVien())->create($_POST);
        header('Location: ?controller=sinhvien');  
    }
    public function edit():void{
        $ma = $_GET['ma'];
        require 'model/SinhVien.php';
        require 'model/Lop.php';
        $dsLop = (new Lop())->all();
        $first = (new SinhVien())->find($ma);
        require 'view/sinhvien/edit.php';
    }
    public function update():void{
        
        require'model/SinhVien.php';
        (new SinhVien())->update($_POST);
        header('Location: ?controller=sinhvien');
    }

    public function delete():void{
        
        require'model/SinhVien.php';
        (new SinhVien())->delete($_GET['ma']);
        header('Location: ?controller=sinhvien');
    }

}