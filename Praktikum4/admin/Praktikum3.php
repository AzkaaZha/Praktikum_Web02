<?php
require_once 'layouts/header.php';

require_once 'layouts/menu.php';  

require_once '../../Praktikum3/proses_registrasi.php';
?>

<div class="container" >
        <h2 style="margin-top: 15px; text-align:center; margin-bottom:20px">Form Input IT Club GDSC</h2>
        <form method="POST">
        <div class="form-group row">
            <label for="nim" class="col-4 col-form-label">NIM</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-card"></i>
                </div>
                </div> 
                <input id="nim" name="nim" placeholder="Masukkan NIM" type="text" required="required" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-adn"></i>
                </div>
                </div> 
                <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" required="required" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="email" class="col-4 col-form-label">Email</label> 
            <div class="col-8">
            <div class="input-group">
                <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class="fa fa-address-book-o"></i>
                </div>
                </div> 
                <input id="email" name="email" placeholder="Masukkan Email" type="text" required="required" class="form-control">
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Jenis Kelamin</label> 
            <div class="col-8">
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_0" type="radio" required="required" class="custom-control-input" value="Pria"> 
                <label for="jenis_kelamin_0" class="custom-control-label">Pria</label>
            </div>
            <div class="custom-control custom-radio custom-control-inline">
                <input name="jenis_kelamin" id="jenis_kelamin_1" type="radio" required="required" class="custom-control-input" value="Wanita"> 
                <label for="jenis_kelamin_1" class="custom-control-label">Wanita</label>
            </div>
            </div>
        </div>
        <div class="form-group row">
            <label for="domisili" class="col-4 col-form-label">Domisili</label> 
            <div class="col-8">
            <select id="domisili" name="domisili" class="custom-select" required="required">
                <?php foreach ($domisili as $dom) { ?>
                    <option value="<?= $dom ?>"><?= $dom ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="program_studi" class="col-4 col-form-label">Program Studi</label> 
            <div class="col-8">
            <select id="program_studi" name="program_studi" class="custom-select" required="required">
                <?php foreach ($program_studi as $key => $value ) { ?>
                    <option value="<?= $key ?>"><?= $value ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="form-group row">
            <label class="col-4">Skill Progamming</label> 
            <div class="col-8">
                <?php foreach ($skills as $skill => $value) { ?>
                    <div class="custom-control custom-checkbox custom-control-inline">
                        <input name="skill[]" id="<?= $skill ?>" type="checkbox" class="custom-control-input" value="<?= $skill; ?>"> 
                        <label for="<?= $skill ?>" class="custom-control-label"><?= $skill ?></label>
                    </div>
                <?php } ?>
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
        </form>
        <hr>
            <table class="table table-bordered">
                <tr class="table-primary text-uppercase">
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Jenis Kelamin</th>
                    <th>Program Studi</th>
                    <th>Domisili</th>
                    <th>Skill</th>
                    <th>Skor</th>
                    <th>Kategori</th>
                </tr>
                <?php
                if (isset($_POST['submit'])) {
                    $nim = $_POST['nim'];
                    $nama = $_POST['nama'];
                    $email = $_POST['email'];
                    $jenis_kelamin = $_POST['jenis_kelamin'];
                    $program_studi = $_POST['program_studi'];
                    $domisili = $_POST['domisili'];
                ?>
                    <tr class="text-center">
                        <td><?= $nim ?></td>
                        <td><?= $nama ?></td>
                        <td><?= $email ?></td>
                        <td><?= $jenis_kelamin ?></td>
                        <td><?= $program_studi ?></td>
                        <td><?= $domisili ?></td>
                        <td>
                            <?php
                            $skor = 0;
                            if (isset($_POST['skill'])) {
                                foreach ($_POST['skill'] as $skill) {
                                    foreach ($skills as $key => $value) {
                                        if ($skill == $key) {
                                            $skor  += $value;
                                        }
                                    }
                                    echo $skill . "<br>";

                                }
                            }
                            ?>
                        </td>
                        <td><?= $skor ?></td>
                        <td>
                            <?php
                            if ($skor == 0) {
                                echo "Tidak Lulus";
                            } elseif ($skor > 0 && $skor <= 40) {
                                echo "Kurang";
                            } elseif ($skor > 40 && $skor <= 60) {
                                echo "Cukup";
                            } elseif ($skor > 60 && $skor <= 80) {
                                echo "Baik";
                            } elseif ($skor > 80 && $skor <= 100) {
                                echo "Sangat Baik";
                            } else {
                                echo "errror";
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </table>
    </div>

<?php
require_once 'layouts/footer.php';
?>