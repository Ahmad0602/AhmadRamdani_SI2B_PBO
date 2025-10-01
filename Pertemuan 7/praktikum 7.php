<?php
// Class Induk
class Tabungan {
    protected $saldo;

    public function __construct($saldoAwal) {
        $this->saldo = $saldoAwal;
    }

    public function setor($jumlah) {
        $this->saldo += $jumlah;
    }

    public function tarik($jumlah) {
        if ($jumlah <= $this->saldo) {
            $this->saldo -= $jumlah;
        } else {
            echo "Saldo tidak mencukupi!\n";
        }
    }

    public function getSaldo() {
        return $this->saldo;
    }
}

// Class Anak
class Siswa extends Tabungan {
    private $nama;

    public function __construct($nama, $saldoAwal) {
        parent::__construct($saldoAwal);
        $this->nama = $nama;
    }

    public function getNama() {
        return $this->nama;
    }
}

// Buat array siswa
$siswaList = [
    new Siswa("Siswa 1", 100000),
    new Siswa("Siswa 2", 150000),
    new Siswa("Siswa 3", 200000),
];

// Menu interaktif di terminal
while (true) {
    echo "\n=== Program Tabungan Sekolah ===\n";
    echo "1. Lihat Saldo\n";
    echo "2. Setor Tunai\n";
    echo "3. Tarik Tunai\n";
    echo "4. Keluar\n";
    echo "Pilih menu (1-4): ";
    $menu = trim(fgets(STDIN));

    if ($menu == 4) {
        echo "Terima kasih!\n";
        break;
    }

    // Pilih siswa
    echo "Pilih siswa:\n";
    foreach ($siswaList as $index => $siswa) {
        echo ($index + 1) . ". " . $siswa->getNama() . "\n";
    }
    echo "Masukkan nomor siswa: ";
    $pilih = trim(fgets(STDIN)) - 1;

    if (!isset($siswaList[$pilih])) {
        echo "Siswa tidak ditemukan!\n";
        continue;
    }

    $siswaAktif = $siswaList[$pilih];

    switch ($menu) {
        case 1:
            echo "Saldo " . $siswaAktif->getNama() . " = Rp " . $siswaAktif->getSaldo() . "\n";
            break;
        case 2:
            echo "Masukkan jumlah setor: ";
            $jumlah = trim(fgets(STDIN));
            $siswaAktif->setor($jumlah);
            echo "Setor berhasil! Saldo sekarang = Rp " . $siswaAktif->getSaldo() . "\n";
            break;
        case 3:
            echo "Masukkan jumlah tarik: ";
            $jumlah = trim(fgets(STDIN));
            $siswaAktif->tarik($jumlah);
            echo "Saldo sekarang = Rp " . $siswaAktif->getSaldo() . "\n";
            break;
        default:
            echo "Menu tidak tersedia!\n";
    }
}
?>
