<?php
//inheritance
class Warung {
    public $namaBarang;
    public $harga;

    public function __construct ($namaBarang, $harga) {
        $this->namaBarang = $namaBarang;
        $this->harga = $harga;

    }

    public function informasi() {
        echo "Barang: $this->namaBarang, Harga; Rp $this->harga<br>";
    }
}


class Warung2 extends Warung {
    public $exp;

    public function __construct ($namaBarang, $harga, $exp) {
        parent ::__construct ($namaBarang, $harga);
        $this->exp = $exp;
    }

    //Overriding
    public function informasi() {
        echo "Barang2: $this->namaBarang, Harga; Rp $this->harga, Kadaluarsa: $this->exp<br>";
    }


}

//Overloading
class Warung3 {
    public function __call($namaBarang, $X) {
        if ($namaBarang == "total") {
            if (count($X) == 1) {
                return $X[0];
            }
            else if (count($X) == 2) {
                return $X[0] * $X[1];
            }
            else {
                return 0;
            }
        }
    }
}

$barang1 = new Warung ("Susu Kotak", 6000);
$barang1-> informasi();

$barang2 = new Warung2("Yogurt", 12000, "15-11-2025");
$barang2-> informasi();

$barang3 = new Warung3();
echo "Harga Indomie" . $barang3->total(4000) . "<br>";
echo "Harga Telur Rp " . $barang3->total(2000, 5) . "<br>";
?>