<?php

//Membuat Property
class BMI
{
    public $nama;
    public $umur;
    public $jenisKelamin;
    public $berat;
    public $tinggi;

    //Membuat Method
   public function __construct($nama, $umur, $jenisKelamin, $berat, $tinggi)
   {
       $this->nama = $nama;
       $this->umur = $umur;
       $this->jenisKelamin = $jenisKelamin;
       $this->berat = $berat;
       $this->tinggi = $tinggi;
   }

    public function hasilBmi()
    {
        $bmi = $this->berat / ($this->tinggi * $this->tinggi);     
        return $bmi;
    }

    public function statusBmi()
    {
        $bmi = $this->hasilBmi();
        if ($bmi < 18.5 ){
            return "Kekurangan Berat Badan";
        } elseif ($bmi >= 18.5 && $bmi <= 24.9){
            return "Normal (Ideal)";
        } else if ($bmi >= 25 && $bmi <= 29.9) {
            return "Kelebihan Berat Badan";
        } else {
            return "Kegemukan (Obesitas)";
        }
    }
}