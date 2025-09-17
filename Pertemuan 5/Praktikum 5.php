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


class Programmer extends Employee {
    public function hitungBonus() {
        $gaji = $this->gajiDasar;

        if ($this->masaKerja < 1) {
            return 0;
        } elseif ($this->masaKerja <= 10) {
            return 0.01 * $this->masaKerja * $gaji;
        } else {
            return 0.02 * $this->masaKerja * $gaji;
        }
    }

    public function hitungTotalGaji() {
        return $this->gajiDasar + $this->hitungBonus();
    }
}

class Direktur extends Employee {
    public function hitungBonus() {
        return 0.5 * $this->masaKerja * $this->gajiDasar;
    }

    public function hitungTunjangan() {
        return 0.1 * $this->masaKerja * $this->gajiDasar;
    }

    public function hitungTotalGaji() {
        return $this->gajiDasar + $this->hitungBonus() + $this->hitungTunjangan();
    }
}

class PegawaiMingguan extends Employee {
    private $hargaBarang;
    private $stockBarang;
    private $totalPenjualan;

    public function __construct($masaKerja, $hargaBarang, $stockBarang, $totalPenjualan) {
        parent::__construct($masaKerja);
        $this->hargaBarang    = $hargaBarang;
        $this->stockBarang    = $stockBarang;
        $this->totalPenjualan = $totalPenjualan;
    }

    public function hitungBonus() {
        $persentasePenjualan = ($this->totalPenjualan / $this->stockBarang) * 100;

        if ($persentasePenjualan > 70) {
            return 0.10 * $this->hargaBarang * $this->totalPenjualan;
        }
        return 0.03 * $this->hargaBarang * $this->totalPenjualan;
    }

    public function hitungTotalGaji() {
        return $this->gajiDasar + $this->hitungBonus();
    }
}


function tampilkanOutput($tipe, $gaji, $bonus, $tunjangan = 0, $total) {
    echo "<b>{$tipe}</b><br>";
    echo "Gaji Pokok : Rp " . number_format($gaji, 0, ',', '.') . "<br>";
    echo "Bonus      : Rp " . number_format($bonus, 0, ',', '.') . "<br>";
    if ($tunjangan > 0) {
        echo "Tunjangan  : Rp " . number_format($tunjangan, 0, ',', '.') . "<br>";
    }
    echo "Total Gaji : Rp " . number_format($total, 0, ',', '.') . "<br><br>";
}


echo "=== Programmer ===<br>";
$programmer1 = new Programmer(0.6); 
tampilkanOutput("Programmer (0.6 tahun)", $programmer1->getGajiDasar(), $programmer1->hitungBonus(), 0, $programmer1->hitungTotalGaji());

$programmer2 = new Programmer(4); 
tampilkanOutput("Programmer (4 tahun)", $programmer2->getGajiDasar(), $programmer2->hitungBonus(), 0, $programmer2->hitungTotalGaji());

$programmer3 = new Programmer(11); 
tampilkanOutput("Programmer (11 tahun)", $programmer3->getGajiDasar(), $programmer3->hitungBonus(), 0, $programmer3->hitungTotalGaji());

echo "=== Direktur ===<br>";
$direktur = new Direktur(10);
tampilkanOutput("Direktur (10 tahun)", $direktur->getGajiDasar(), $direktur->hitungBonus(), $direktur->hitungTunjangan(), $direktur->hitungTotalGaji());

echo "=== Pegawai Mingguan ===<br>";
$pegawai1 = new PegawaiMingguan(1, 50000, 250, 200); 
tampilkanOutput("Pegawai Mingguan (200/250)", $pegawai1->getGajiDasar(), $pegawai1->hitungBonus(), 0, $pegawai1->hitungTotalGaji());

$pegawai2 = new PegawaiMingguan(1, 50000, 250, 150); 
tampilkanOutput("Pegawai Mingguan (150/250)", $pegawai2->getGajiDasar(), $pegawai2->hitungBonus(), 0, $pegawai2->hitungTotalGaji());

?>
