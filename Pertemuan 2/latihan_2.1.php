<?php
class Mobil {
    var $jumlahRoda = 4;
    var $warna = "Merah";
    var $bahanBakar = "Pertamax";
    var $harga = 120000000;
    var $merek = "A";

    public function statusHarga() {
        if ($this->harga > 50000000) $status = 'Mahal';
        else $status = 'Murah';
        return $status;
    }
}

$ObjekBMW = new Mobil;   // membuat objek BMW dari class Mobil
$ObjekTesla = new Mobil; // membuat objek Tesla dari class Mobil
$ObjekAudi = new Mobil;  // membuat objek Audi dari class Mobil

echo "Merek mobil : " . $ObjekBMW->merek. "<br>";
echo "Mobil BMW itu " . $ObjekBMW->statusHarga() . "<br>";
echo "Jumlah Roda : " . $ObjekBMW->jumlahRoda . "<br>";
echo "Warna : " . $ObjekBMW->warna . "<br>"; 
echo "Bahan Bakar : " . $ObjekBMW->bahanBakar . "<br>";
?>