<?php

// class Lingkaran {
//     // Membuat Property
//     public $jari_jari;
//     public const PHI = 3.14;

//     // Membuat Method
//     public function getLuas($r) {
//         $this->jari_jari = $r;
//         return self::PHI * $this->jari_jari * $this->jari_jari;
//     }

//     public function getKeliling($r) {
//         $this->jari_jari = $r;
//         return 2 * self::PHI * $this->jari_jari;
//     }

// }

class Lingkaran {
    // Membuat Property
    public $jari_jari;
    public const PHI = 3.14;
 
    // Membuat Method
    public function __construct($r)
    {
        $this->jari_jari = $r;
    }

    public function getLuas() {
        return self::PHI * $this->jari_jari * $this->jari_jari;
    }

    public function getKeliling() {
        return 2 * self::PHI * $this->jari_jari;
    }

}

// Instance / Membuat object
$lingkaran1 = new Lingkaran(20);

// Menampilkan hasil
echo "Luas Lingkaran 1 ialah " . $lingkaran1 -> getLuas() . " cm2";
echo "<br>";
echo "Keliling Lingkaran 1 ialah " . $lingkaran1 -> getKeliling() . " cm";
echo "<br> <hr>";

// Instance / Membuat object
$lingkaran2 = new Lingkaran(30);

// Menampilkan hasil
echo "Luas Lingkaran 2 ialah " . $lingkaran2 -> getLuas() . " cm2";
echo "<br>";
echo "Keliling Lingkaran 2 ialah " . $lingkaran2 -> getKeliling() . " cm";
echo "<br> <hr>";




