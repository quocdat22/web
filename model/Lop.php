<?php
require 'model/Connect.php';
require 'model/LopObject.php';
class Lop{
    


    function all():array {
        

        $sql = "select * from lop";
        $result = (new Connect())->query($sql);

        $arr = [];
        foreach($result as $r){
            $object = new LopObject($r);
            
            $arr[] = $object;
        }

        return $arr;
    }

    function create($params):void{
        
        $object = new LopObject($params);
        // $sql = "insert into lop(ten,ho) values('{$object->get_ten()}','{$object->get_ho()}')";
        $sql = "insert into lop(ho,ten) values ('" . $object->get_ho() . "', '" . $object->get_ten() . "')";
        (new Connect())->excute($sql);
        
    }

    function find($ma): object {
        
        $sql = "select * from lop where ma='$ma'";
        $result = (new Connect())->query($sql);

        $first = mysqli_fetch_array($result);
        
        return new LopObject($first);
        
        
    }
    function update(array $params):void{
        $object = new LopObject($params);
        // $sql = "update lop set ten='$',ho='$ho' where ma='$ma'";
        $sql = "update lop set ho = '". $object->get_ho()."', ten = '".$object->get_ten()."'
        where ma = '". $object->get_ma()."'";
        (new Connect())->excute($sql);
    }

    function delete($ma){
        $sql = "delete from lop where ma='$ma'";
        (new Connect())->excute($sql);
    }

}