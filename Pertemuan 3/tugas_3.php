<?php

class DiskonBelanja {
   
    var $kartuMember;
    var $totalBelanja;
    var $diskon = 0;

    
    public function __construct( $kartuMember, $totalBelanja) {
        $this->kartuMember = $kartuMember;
        $this->totalBelanja = $totalBelanja;

       
        if ($this->kartuMember === "ya") {
            if ($this->totalBelanja > 500000) {
                $this->diskon = 50000;
            } else if ($this->totalBelanja > 100000) {
                $this->diskon = 15000;
            } else {
                $this->diskon = 0;
            }
        } else {
            if ($this->totalBelanja > 100000) {
                $this->diskon = 5000;
            } else {
                $this->diskon = 0;
            }
        }
        
        $totalBayar = $this->totalBelanja - $this->diskon;

        
        echo "Status Member: " . $this->kartuMember . "<br>";
        echo "Total Belanja: " . $this->totalBelanja . "<br>";
        echo "Diskon yang Diterima: " . $this->diskon . "<br>";
        echo "Total Bayar: Rp " . $totalBayar . "<br>";
    }
}

$pembeli1 = new DiskonBelanja("ya", 200000);
echo "<br>";
$pembeli2 = new DiskonBelanja("ya", 570000);
echo "<br>";
$pembeli3 = new DiskonBelanja("tidak", 120000);
echo "<br>";
$pembeli4 = new DiskonBelanja("tidak", 50000);
?>