<?php
    // ini Komentar Satu Baris
    /* Untuk Komentar Panjang */

    // echo "Hello World! <br>";
    // print_r("Nama saya Azka <br>");
    // var_dump("Saya kuliah di STT Terpadu Nurul Fikri");

    //Membuar Variabel User
    // $nama = "Azka Zharari";
    // $umur = 19;
    // $berat = 55.5;
    // $mahasiswa = true;

    // echo "Nama saya adalah $nama <br>";
    // echo "Umur saya adalah $umur tahun<br>";
    // echo "Berat badan saya adalah $berat kg <br>";
    // echo "Apakah saya mahasiswa? $mahasiswa <br>";


    // //Membuat variabel sistem
    // echo "Dokumen root " . $_SERVER['DOCUMENT_ROOT'] . "<br>";
    // echo "Nama File " . $_SERVER['PHP_SELF'] . "<br>";
    
    //Membuat variabel konstanta
    // define("PHI", 3.14);
    // $jari = 8;
    // $luas = PHI * $jari * $jari;
    // $keliling = 2 * PHI * $jari;

    // echo "Luas lingkaran dengan jari jari = $jari = $luas <br>";
    // echo "Keliling lingkaran adalah $keliling <br>";

    //Membuat array
    $programs = ["php", "Jdavascript", "HTML", "CSS"];
    echo $programs[0];
    echo count($programs);
    $programs[] = "MySQL";
    echo count($programs);

    unset($programs[0]);
    echo "<br>" . $programs[0];

    echo "<ol>";
    foreach($programs as $program){
        echo "<li>$program</li>";
    }
    echo "</ol>";

?>