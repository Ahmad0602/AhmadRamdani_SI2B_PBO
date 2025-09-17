<?php
// Contoh Program Inheritance

class manusia { // class induk
    
    // property class manusia
    public $nama_saya;
    
    // method pada class manusia
    function bernama($saya) {
        $this->nama_saya = $saya;
    }
}

// class turunan atau sub class dari class manusia
// kita menghubungkan class dengan syntax extends
class teman extends manusia {
    
    // property class teman
    public $nama_temam;
    
    // method pada class teman
    function bernamateman($teman) {
        $this->nama_temam = $teman;
    }
}

// instansiasi class teman
$objectteman = new teman;

// method beri nama adalah method pada class manusia,
// tapi kita bisa mengaksesnya karena telah menghubungkan
// class teman dengan class manusia
$objectteman->bernama("Dika");
$objectteman->bernamateman("Andra");

// menampilkan isi property
echo "Nama Saya : " . $objectteman->nama_saya . "<br/>";
echo "Nama Teman Saya : " . $objectteman->nama_temam;
?>