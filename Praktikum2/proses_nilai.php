<?php
// Variabel
if (isset($_GET['submit'])) {
    $nama = $_GET['name'];
    $matkul = $_GET['matkul'];
    $UTS = $_GET['UTS'];
    $UAS = $_GET['UAS'];
    $TUGAS = $_GET['TUGAS'];
    $total_nilai = ($UTS + $UAS + $TUGAS) / 3;
}

// Keterangan Lulus
if ($total_nilai > 75) {
    $keterangan = "LULUS";
}
else {
    $keterangan = "TIDAK LULUS";
}