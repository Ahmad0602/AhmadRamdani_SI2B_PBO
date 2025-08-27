<?php
 
class kendaraan
{
    var $jumlahRoda;
    var $warna;
    var $bahanBakar;
    var $harga;
    var $merek;
 
    function statusHarga()
    {
        if ($this->harga > 50000000)
            $status = 'Mahal';
        else
            $status = 'Murah';
           
        return $status;
    }
}
 
// Objek 1
$ObjekKendaraan1 = new kendaraan();
$ObjekKendaraan1->merek = "Yamaha MIO";
$ObjekKendaraan1->harga = "10000000";
 
// Objek 2
$ObjekKendaraan2 = new kendaraan();
$ObjekKendaraan2->merek = "Toyota Avanza";
$ObjekKendaraan2->harga = "100000000";
 
echo "Merek: " . $ObjekKendaraan2->merek;
echo "<br>";
echo "Nominal Harga: " . $ObjekKendaraan2->harga;
echo "<br>";
echo "Status Harga Kendaraan: " . $ObjekKendaraan2->statusHarga();
 
?>
 