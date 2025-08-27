<?php
class Mobil {
var $JumlahRoda=4;
var $warna = "Merah";
var $bahanBakar = "Pertamax";
var $harga = 120000000;
var $merek = 'A';

    public function getJumlahRoda(){
        return "$this->JumlahRoda";
    }
   public function statusHarga()
    {
    if ($thi->harga > 50000000) $status = 'Mahal';
    else $status = 'Murah'; 
    return $status;
    }


}
$object1 = new Mobil();
$object2 = new Mobil();
$object3 = new Mobil();

echo $object1->getJumlahRoda();
?>