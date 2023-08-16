<?php
require_once 'model/Connect.php';
require 'model/SinhVienObject.php';

class SinhVien{

    private string $table = 'sinhvien';

    function all():array {
        $sql = "select $this->table.*, lop.ten as ten_lop
                from $this->table
                join lop on lop.ma = $this->table.lop
                ";
                $result = (new Connect())->query($sql);

        $arr = [];
        foreach($result as $r){
            $object = new SinhVienObject($r);
            
            $arr[] = $object;
        }

        return $arr;
    }

    function create($params):void{
        
        $object = new SinhVienObject($params);
        $sql = "insert into $this->table(ho,ten,lop) values 
                ('" . $object->get_ho() . "', '" . $object->get_ten() . "', '" . $object->get_lop() . "')";
        (new Connect())->excute($sql);
        
    }

    function find($ma): object {
        
        $sql = "select * from $this->table where ma='$ma'";
        $result = (new Connect())->query($sql);

        $first = mysqli_fetch_array($result);
        
        return new SinhVienObject($first);
        
        
    }
    function update(array $params):void{
        $object = new SinhVienObject($params);
        
        $sql = "update $this->table set ho = '". $object->get_ho()."', ten = '".$object->get_ten()."'
                , lop = '".$object->get_lop()."'
                where ma = '". $object->get_ma()."'";
        (new Connect())->excute($sql);
    }

    function delete($ma){
        $sql = "delete from $this->table where ma='$ma'";
        (new Connect())->excute($sql);
    }
}