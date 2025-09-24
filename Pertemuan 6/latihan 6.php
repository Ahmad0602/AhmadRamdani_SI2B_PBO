<?php
class Belanja {
    public $namaBarang;
    public $harga;
    public $jumlah;
    public $total;
    public function __destruct () {
        echo "Destructor : Data Belanja '$this->namaBarang' dihapus"; 
    
    }
    public function __construct ($namaBarang, $harga, $jumlah) {
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;
        $this->jumlah = $jumlah;
        $this->total = $harga * $jumlah;
        echo "Constructor : Data Belanja '$this->namaBarang' dibuat.\n";
    }

    public function getinfo() {
        return $this->namaBarang . " (" . $this->harga . "x" . $this->jumlah . ") = " . $this->total;
    }

    
}

$mie = new Belanja ("Indomie", 2000, 100);

?>