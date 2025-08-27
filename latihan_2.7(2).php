<?php
// Membuat class Kendaraan
class Kendaraan
{
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

    // Method untuk mengecek subsidi
    public function statusSubsidi()
    {
        if ($this->tahunPembuatan < 2005 && $this->bahanBakar == "Premium") {
            $status = "DAPAT SUBSIDI";
        } else {
            $status = "TIDAK DAPAT SUBSIDI";
        }
        return $status;
    }

    // Method tambahan (harga bekas)
    public function hargaSecondKendaraan()
    {
        // Harga bekas sederhana: 50% dari harga asli
        $hargaBekas = $this->harga * 0.5;
        return $hargaBekas;
    }

    // Alias method untuk cek subsidi
    public function dapatSubsidi()
    {
        return $this->statusSubsidi();
    }
}

// --------------------------------
// Objek 1
// --------------------------------
echo "<h3>Output Objek 1</h3>";
$objekKendaraan1 = new Kendaraan();
$objekKendaraan1->harga = 1000000;
$objekKendaraan1->tahunPembuatan = 1999;

echo "Jumlah Roda : " . $objekKendaraan1->jumlahRoda . "<br>";
echo "Status Harga : " . $objekKendaraan1->statusHarga() . "<br>";
echo "Status Subsidi : " . $objekKendaraan1->statusSubsidi() . "<br>";
echo "Status BBM : " . $objekKendaraan1->dapatSubsidi() . "<br>";
echo "Harga Bekas : " . $objekKendaraan1->hargaSecondKendaraan() . "<br>";

// --------------------------------
// Objek 2
// --------------------------------
echo "<h3>Output Objek 2</h3>";
$objekKendaraan2 = new Kendaraan();
$objekKendaraan2->bahanBakar = "Pertamax";
$objekKendaraan2->tahunPembuatan = 1999;

echo "Jumlah Roda : " . $objekKendaraan2->jumlahRoda . "<br>";
echo "Status Harga : " . $objekKendaraan2->statusHarga() . "<br>";
echo "Status Subsidi : " . $objekKendaraan2->statusSubsidi() . "<br>";
echo "Status BBM : " . $objekKendaraan2->dapatSubsidi() . "<br>";
echo "Harga Bekas : " . $objekKendaraan2->hargaSecondKendaraan() . "<br>";
?>
