<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tes-Kesehatan</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>
<body>
    <h2>TES KESEHATAN</h2>
    <form action="" method="POST">
        <div>
            <label>Nama :</label> 
            <input id="nama" name="nama" type="text">
        </div><br>
        <div>
            <label>Tanggal Pemeriksaan :</label> 
            <input id="date" name="date" type="date">
        </div><br>
        <div>
            <label>Usia :</label> 
            <input id="usia" name="usia" type="text">
        </div><br>
        <div>
            <label>Jenis Kelamin :</label>
            <input class="form-check-input" type="radio" name="jenis_kelamin" id="pria" value="Pria" checked>
                <label class="form-check-label" for="pria">
                    Pria
                </label>
                <input class="form-check-input" type="radio" name="jenis_kelamin" id="wanita" value="Wanita">
                <label>Wanita</label>
        </div>
    <br><hr>
    <table  width="50%" border="1" cellspacing="2" cellpadding="2" style="margin-left: 300px;">
        <thead>
            <tr>
                <th>Jenis Tes</th>
                <th>Hasil Pemeriksaan</th>
                <th>Normal</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Tekanan darah</td>
                <td></td>
                <td>120/80 mmHg</td>
            </tr>
            <tr>
                <td>Asam urat</td>
                <td></td>
                <td>Pria: < 7 mg/dl | Wanita: < 6 mg/dl</td>
            </tr>
            <tr>
                <td>Kolesterol total</td>
                <td></td>
                <td>< 200 mg/dl</td>
            </tr>
            <tr>
                <td>Gula darah</td>
                <td></td>
                <td>Puasa: 70-110 mg/dl<br>
                    2 jam setelah makan: 100-150 mg/dl<br>
                    Sewaktu/acak: 70-125 mg/dl</td>
            </tr>
        </tbody>
    </table>
</body>
</html>