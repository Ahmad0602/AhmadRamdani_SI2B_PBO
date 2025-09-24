<?php
class KonversiSuhu {
    public $celcius;
    public $hasil = [];

    // Constructor untuk inisialisasi suhu celcius
    function __construct($celcius) {
        $this->celcius = $celcius;
        $this->hitungKonversi();
    }

    // Fungsi untuk menghitung semua konversi suhu
    function hitungKonversi() {
        $this->hasil = [
            "celcius"    => $this->celcius,
            "reamur"     => 0.8 * $this->celcius,
            "fahrenheit" => (1.8 * $this->celcius) + 32,
            "kelvin"     => $this->celcius + 273.15
        ];
    }

    // Fungsi untuk menampilkan hasil
    function tampilkan() {
        echo "<h2>Konversi Suhu dari Celcius</h2>";
        foreach ($this->hasil as $satuan => $nilai) {
            // percabangan untuk menampilkan sesuai format
            if ($satuan == "celcius") {
                echo "Suhu dalam Celcius = $nilai derajat<br>";
            } else {
                echo "Suhu dalam " . ucfirst($satuan) . " = <b>$nilai derajat</b><br>";
            }
        }
        echo "<br><i>Sekian konversi suhu yang bisa dilakukan</i>";
    }
}

// input GET dari URL, contoh: ?suhu=36
$input = isset($_GET['suhu']) ? $_GET['suhu'] : 36;

// buat objek dan tampilkan hasil
$konversi = new KonversiSuhu($input);
$konversi->tampilkan();
?>
