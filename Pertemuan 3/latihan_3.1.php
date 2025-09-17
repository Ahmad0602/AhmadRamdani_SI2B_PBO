<?php
class BarangHarian {
    var $namaBarang;
    var $harga;
    var $jumlah;

    function hitungTotalPembayaran() {
        return $this->harga * $this->jumlah;
    }

    function statusPembayaran($total) {
        if ($total > 50000) {
            return "Mahal";
        } else {
            return "Murah";
        }
    }
}

// Barang 1
$barang1 = new BarangHarian();
$barang1->namaBarang = "Mie Instan";
$barang1->harga = 15000;
$barang1->jumlah = 3;

// Barang 2
$barang2 = new BarangHarian();
$barang2->namaBarang = "Kopi";
$barang2->harga = 3000;
$barang2->jumlah = 5;

// Barang 3
$barang3 = new BarangHarian();
$barang3->namaBarang = "Air Mineral";
$barang3->harga = 3500;
$barang3->jumlah = 5;

// Cetak Barang 1
echo $barang1->namaBarang . "<br>";
echo "Harga: " . $barang1->harga . "<br>";
$total1 = $barang1->hitungTotalPembayaran();
echo "Total: " . $total1 . "<br>";
echo "Status: " . $barang1->statusPembayaran($total1) . "<br><br>";

// Cetak Barang 2
echo $barang2->namaBarang . "<br>";
echo "Harga: " . $barang2->harga . "<br>";
$total2 = $barang2->hitungTotalPembayaran();
echo "Total: " . $total2 . "<br>";
echo "Status: " . $barang2->statusPembayaran($total2) . "<br><br>";

// Cetak Barang 3
echo $barang3->namaBarang . "<br>";
echo "Harga: " . $barang3->harga . "<br>";
$total3 = $barang3->hitungTotalPembayaran();
echo "Total: " . $total3 . "<br>";
echo "Status: " . $barang3->statusPembayaran($total3) . "<br>";
?>
