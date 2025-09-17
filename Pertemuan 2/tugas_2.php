<?php
// Deklarasi Variable untuk input data 
$pinjaman = 1000000;          
$bunga = 10;                  
$lama_angsuran = 5;          
$hari_telat = 40;             
$denda_per_hari = 0.0015;     

// Perhitungan
$total_pinjaman = $pinjaman + ($pinjaman * $bunga / 100);
$angsuran = $total_pinjaman / $lama_angsuran;
$denda = $angsuran * $denda_per_hari * $hari_telat;
$total_pembayaran = $angsuran + $denda;

// Output
echo "TOKO PEGADAIAN SYARIAH <br>";
echo "Jl Keadilan No 16 <br>";
echo "Telp. 72353459 <br><br>";

echo "Program Penghitung Besaran Angsuran Hutang<br>";
echo "Besaran Pinjaman : Rp." . number_format($pinjaman,0,",",".") . "<br>";
echo "Masukkan besar bunga (%) : $bunga<br>";
echo "Total Pinjaman : Rp." . number_format($total_pinjaman,0,",",".") . "<br>";
echo "Lama angsuran (bulan) : $lama_angsuran<br>";
echo "Besaran angsuran : Rp." . number_format($angsuran,0,",",".") . "<br><br>";

echo "Keterlambatan Angsuran (Hari) : $hari_telat<br>";
echo "Denda Keterlambatan : Rp." . number_format($denda,0,",",".") . "<br>";
echo "Besaran Pembayaran : Rp." . number_format($total_pembayaran,0,",",".") . "<br>";
?>
