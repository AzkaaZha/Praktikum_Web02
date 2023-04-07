<?php

class Balok {
    // Membuat Property
    public $panjang;
    public $lebar;
    public $tinggi;

    // Membuat Method
    public function __construct($p, $l, $t)
    {
        $this->panjang = $p;
        $this->lebar = $l;
        $this->tinggi = $t;
    }
    
    public function getLuas() {
        return 2 * ($this->panjang * $this->lebar + $this->panjang * $this->tinggi + $this->lebar * $this->tinggi);
    }

    public function getKeliling() {
        return 4 * ($this->panjang + $this->lebar + $this->tinggi);
    }

    public function getVolume() {
        return $this->panjang * $this->lebar * $this->tinggi;
    }
}

// Instance / Membuat object
$balok1 = new Balok(20, 30, 50);

// Menampilkan hasil
echo "Luas Balok 1 ialah " . $balok1 -> getLuas() . " cm2";
echo "<br>";
echo "Keliling Balok 1 ialah " . $balok1 -> getKeliling() . " cm";
echo "<br>";
echo "Volume Balok 1 ialah " . $balok1 -> getVolume() . " cm3";

echo "<hr>";
// Instance / Membuat object
$balok2 = new Balok(10, 20, 30);

// Menampilkan hasil
echo "Luas Balok 2 ialah " . $balok2 -> getLuas() . " cm2";
echo "<br>";
echo "Keliling Balok 2 ialah " . $balok2 -> getKeliling() . " cm";
echo "<br>";
echo "Volume Balok 2 ialah " . $balok2 -> getVolume() . " cm3";
