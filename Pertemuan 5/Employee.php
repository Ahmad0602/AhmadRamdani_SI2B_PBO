<?php
class Employee {
    protected $masaKerja;
    protected $gajiDasar;
 
    public function __construct($masaKerja) {
        $this->masaKerja = $masaKerja;
        $this->gajiDasar = 5000000;
    }
 
    public function hitungGaji() {
        return $this->gajiDasar;
    }
 
    public function getGajiDasar() {
        return $this->gajiDasar;
    }
 
    public function getMasaKerja() {
        return $this->masaKerja;
    }
}
 ?>