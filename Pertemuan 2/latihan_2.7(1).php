<?php
// Membuat class Kendaraan
class Kendaraan
{
    // Properti (atribut) dari class Kendaraan
    public $jumlahRoda = 4;
    public $warna;
    public $bahanBakar = "Premium";
    public $harga = 100000000;
    public $merek;
    public $tahunPembuatan = 2004;

    // Method untuk mengecek status harga kendaraan
    public function statusHarga()
    {
        if ($this->harga > 50000000) {
            $status = "Harga Kendaraan Mahal";
        } else {
            $status = "Harga Kendaraan Murah";
        }
        return $status;
    }

    // Method untuk mengecek apakah kendaraan mendapat subsidi
    public function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }
}

// -------------------------------
// Bagian program utama
// -------------------------------

// Instansiasi (membuat objek) dari class Kendaraan
$objekKendaraan = new Kendaraan();

// Menampilkan properti (variabel dalam class)
echo "Jumlah Roda : " . $objekKendaraan->jumlahRoda . "<br>";

// Menampilkan hasil method statusHarga()
echo "Status Harga : " . $objekKendaraan->statusHarga() . "<br>";

// Menampilkan hasil method statusSubsidi()
echo "Status Subsidi : " . $objekKendaraan->statusSubsidi() . "<br>";
?>
