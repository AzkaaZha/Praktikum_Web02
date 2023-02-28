<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Hasil Nilai Mahasiswa</title>
</head>
<body>
    <div class="container">
        <h2 style="text-align: center;">Hasil Nilai Mahasiswa</h2><br>
        <table class="table text-uppercase table-bordered" style="text-align: center;">
            <tr class="table-success">
                <th>Nama</th>
                <th>Mata Kuliah</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
                <th>Total Nilai</th>
                <th>Keterangan</th>
            </tr>
            <?php require_once 'proses_nilai.php'; ?>
            <tr>
                <td><?= $nama; ?></td>
                <td><?= $matkul; ?></td>
                <td><?= $UTS; ?></td>
                <td><?= $UAS; ?></td>
                <td><?= $TUGAS; ?></td>
                <td><?= number_format($total_nilai, 1, '.', ',');?></td>
                <td><?= $keterangan; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>