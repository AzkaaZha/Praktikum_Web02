<?php

class Fruit {
    // Membuat Property
    public $name;
    public $color;
    public $shape;

    // Membuat Method
    public function getName() {
        return $this->name;
    }
    public function getColor() {
        return $this->color;
    }
    public function getInfo() {
        return "Nama Buah = " . $this->name . "<br>Warna Buah = " . $this->color . "<br>Bentuk Buah = " . $this->shape;
    }
}

// Instance / Membuat object
$fruit1 = new Fruit();
$fruit1 -> name = "Apel";
$fruit1 -> color = "Merah";
$fruit1 -> shape = "Bulat";

// Instance / Membuat object 2
$fruit2 = new Fruit();
$fruit2 -> name = "Pisang";
$fruit2 -> color = "Kuning";    
$fruit2 -> shape = "Lonjong";

// Menampilkan hasil
echo "Namaku adalah " . $fruit1 -> getName();
echo "<br>";
echo "Warnaku " . $fruit1 -> getColor();
echo "<br> <br>";
echo $fruit1 -> getInfo();
echo "<hr>";
echo $fruit2 -> getInfo();


