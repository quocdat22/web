<?php
class LopObject{
    private int $ma;
    private string $ho;
    private string $ten;

    public function __construct($row){
        $this->ma = $row['ma'] ?? 0;
        $this->ho = $row['ho'];
        $this->ten = $row['ten'];
    }

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

}