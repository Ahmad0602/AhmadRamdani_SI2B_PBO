<?php

class Kendaraan {
    public $harga;
    public $tahun;
    public $platNomor;
    public $bahanBakar;

    public function __construct($harga, $tahun, $platNomor, $bahanBakar) {
        $this->harga = $harga;
        $this->tahun = $tahun;
        $this->platNomor = $platNomor;
        $this->bahanBakar = $bahanBakar;
    }

    public function getStatusHarga() {
        if ($this->harga > 50000000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }

    public function getStatusBBM() {
        if ($this->bahanBakar == 'Premium' && $this->tahun < 2009) {
            return "Mendapat Subsidi";
        } else {
            return "Tidak Mendapat Subsidi";
        }
    }

    public function getHargaBekas() {
        $diskon = 0;
        if ($this->tahun > 2005) {
            $diskon = 0.20;
        } elseif ($this->tahun >= 2000 && $this->tahun <= 2005) {
            $diskon = 0.30;
        } else {
            $diskon = 0.40;
        }
        return $this->harga - ($this->harga * $diskon);
    }

    public function getJumlahPajak() {
        if ($this->tahun <= 2017) {
            return $this->harga * 0.025;
        } else {
            return "Tidak dikenakan pajak 2.5%"; // Atau sesuaikan dengan aturan pajak lainnya
        }
    }

    public function getHariOperasi() {
        $lastDigit = (int) substr($this->platNomor, -1);
        if ($lastDigit % 2 == 0) {
            return "Selasa, Kamis, Sabtu";
        } else {
            return "Senin, Rabu, Jumat, Minggu";
        }
    }
}

// Contoh penggunaan
$mobilSaya = new Kendaraan(40000000, 2010, 'B 1234 A', 'Pertamax');

echo "Status Harga : " . $mobilSaya->getStatusHarga() . "<br>";
echo "Status BBM : " . $mobilSaya->getStatusBBM() . "<br>";
echo "Harga Bekas : " . $mobilSaya->getHargaBekas() . "<br>";
echo "Jumlah Pajak : " . $mobilSaya->getJumlahPajak() . "<br>";
echo "Hari Operasi : " . $mobilSaya->getHariOperasi() . "<br>";

?>