<?php

class Connect{
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'webj2';

    private function conn() {
        $connect = mysqli_connect($this->host,$this->user,$this->pass,$this->db);
        mysqli_set_charset($connect,'utf8');

        return $connect;
    }

    public function query($sql){
        $connect = $this->conn();
        $result = mysqli_query($connect,$sql);
        mysqli_close($connect); 
        return $result;
    }

    public function excute($sql):void{
        $connect = $this->conn();
        mysqli_query($connect,$sql);
        mysqli_close($connect); 
    }

}