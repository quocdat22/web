<?php

class SinhVienObject{
    private $ma;
    private $ten;
    private $ho;
    private $lop;
    private $ten_lop;

    public function __construct($row){
        $this->ma = $row['ma'] ?? 0;
        $this->ho = $row['ho'];
        $this->ten = $row['ten'];
        $this->lop = $row['lop'];
        $this->ten_lop = $row['ten_lop'] ?? '';
    }

    public function get_ma() {
        return $this->ma;
    }
    public function set_ma($value) {
        $this->ma = $value;
    }

    public function get_ten() {
        return $this->ten;
    }
    public function set_ten($value) {
        $this->ten = $value;
    }
    
    public function get_ho() {
        return $this->ho;
    }
    public function set_ho($value) {
        $this->ho = $value;
    }

    public function get_lop() {
        return $this->lop;
    }
    public function set_lop($value) {
        $this->lop = $value;
    }

    public function get_ten_lop() {
        return $this->ten_lop;
    }

    public function get_ho_ten() {
        return $this->ho . " " . $this->ten;
    }
}