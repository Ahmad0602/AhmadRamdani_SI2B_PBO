<?php
// Superclass
class BangunDatar {
    public function luas() {
        return 0;
    }

    public function keliling() {
        return 0;
    }
}

// Subclass Persegi
class Persegi extends BangunDatar {
    public $sisi;

    public function __construct($sisi) {
        $this->sisi = $sisi;
    }

    public function luas() {
        return $this->sisi * $this->sisi;
    }

    public function keliling() {
        return 4 * $this->sisi;
    }
}

// Subclass Lingkaran
class Lingkaran extends BangunDatar {
    public $r;

    public function __construct($r) {
        $this->r = $r;
    }

    public function luas() {
        return pi() * $this->r * $this->r;
    }

    public function keliling() {
        return 2 * pi() * $this->r;
    }
}

// Subclass Persegi Panjang
class PersegiPanjang extends BangunDatar {
    public $panjang, $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function luas() {
        return $this->panjang * $this->lebar;
    }

    public function keliling() {
        return 2 * ($this->panjang + $this->lebar);
    }
}

// Subclass Segitiga
class Segitiga extends BangunDatar {
    public $alas, $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function luas() {
        return 0.5 * $this->alas * $this->tinggi;
    }

    // Anggap segitiga sama sisi agar bisa dihitung keliling
    public function keliling() {
        return 3 * $this->alas;
    }
}

// ========================
// Main Program
// ========================
echo "<h3>Hitung Luas dan Keliling Bangun Datar</h3>";

// Persegi
$persegi = new Persegi(5);
echo "Persegi (sisi = 5)<br/>";
echo "Luas: " . $persegi->luas() . "<br/>";
echo "Keliling: " . $persegi->keliling() . "<br/><br/>";

// Lingkaran
$lingkaran = new Lingkaran(7);
echo "Lingkaran (r = 7)<br/>";
echo "Luas: " . $lingkaran->luas() . "<br/>";
echo "Keliling: " . $lingkaran->keliling() . "<br/><br/>";

// Persegi Panjang
$pp = new PersegiPanjang(10, 4);
echo "Persegi Panjang (p = 10, l = 4)<br/>";
echo "Luas: " . $pp->luas() . "<br/>";
echo "Keliling: " . $pp->keliling() . "<br/><br/>";

// Segitiga
$segitiga = new Segitiga(6, 8);
echo "Segitiga (alas = 6, tinggi = 8)<br/>";
echo "Luas: " . $segitiga->luas() . "<br/>";
echo "Keliling (diasumsikan sama sisi): " . $segitiga->keliling() . "<br/>";
?>
