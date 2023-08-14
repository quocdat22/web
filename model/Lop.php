<?php
require 'model/Connect.php';

class Lop{
    private int $ma;
    private string $ho;
    private string $ten;

    public function get_ma() {
        return $this->ma;
    }
    public function set_ma($value) {
        $this->ma = $value;
    }

    public function get_ho() {
        return $this->ho;
    }
    public function set_ho($value) {
        $this->ho = $value;
    }

    public function get_ten() {
        return $this->ten;
    }
    public function set_ten($valuee) {
        $this->ten = $valuee;
    }

    public function get_ho_ten() {
        return $this->ho . " " . $this->ten;
    }



    function all(){
        

        $sql = "select * from lop";
        $result = (new Connect())->query($sql);

        $arr = [];
        foreach($result as $r){
            $object = new self();
            $object->set_ma($r['ma']);
            $object->set_ho($r['ho']);
            $object->set_ten($r['ten']);
            $arr[] = $object;
        }

        return $arr;
    }

    function create($ten,$ho):void{
        
        $object = new self();
        
        $object->set_ho($ho);
        $object->set_ten($ten);

        

        $sql = "insert into lop(ten,ho) values('{$object->ten}','{$object->ho}')";

        (new Connect())->excute($sql);
        
    }

    function find($ma){
        $connect = mysqli_connect('localhost','root','','webj2');
        mysqli_set_charset($connect,'utf8');
        $sql = "select * from lop where ma='$ma'";
        $result = (new Connect())->query($sql);

        $first = mysqli_fetch_array($result);
        
        $object = new self();
        $object->set_ma($first['ma']);
        $object->set_ho($first['ho']);
        $object->set_ten($first['ten']);
        return $object;
    }
    function update($ten,$ho,$ma){
        $sql = "update lop set ten='$ten',ho='$ho' where ma='$ma'";
        (new Connect())->excute($sql);
    }

    function delete($ma){
        $sql = "delete from lop where ma='$ma'";
        (new Connect())->excute($sql);
    }

}