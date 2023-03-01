<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">  
    <title>Form Belanja Online</title>
</head>
<body >
    <div class="bg-warning">
    <h2 style="text-align: center; padding-top:15px">BELANJA ONLINE</h2><br>
    </div>
    <div style="display: flex; margin-left: 120px; margin-top:25px">
        <div class="container">
        <form method="POST">
            <div class="form-group row">
                <label for="name" class="col-4 col-form-label">Nama Customer</label> 
                <div class="col-4">
                <input id="name" name="name" placeholder="Masukkan Nama" type="text" class="form-control" required="required">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-4">Pilih Produk</label> 
                <div class="col-8">
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV" required="required"> 
                    <label for="produk_0" class="custom-control-label">TV</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="Kulkas" required="required"> 
                    <label for="produk_1" class="custom-control-label">Kulkas</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                    <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="Mesin Cuci" required="required"> 
                    <label for="produk_2" class="custom-control-label">Mesin Cuci</label>
                </div>
                </div>
            </div>
            <div class="form-group row">
                <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
                <div class="col-4">
                <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control" required="required">
                </div>
            </div> 
            <div class="form-group row">
                <div class="offset-4 col-8">
                <button name="kirim" type="submit" class="btn btn-success">Kirim</button>
                </div>
            </div>
        </form>
        </div>
    
        <aside style="margin-right: 50px; padding-right:80px">
            <div>
                <table class="table">
                    <tr class="table-warning">
                        <th>Daftar Harga</th>
                    </tr>
                    <tr>
                        <td>TV : 4.200.000</td>
                    </tr>
                    <tr>
                        <td>Kulkas : 3.100.000</td>
                    </tr>
                    <tr>
                        <td>Mesin Cuci : 3.800.000</td>
                    </tr>
                    <tr class="table-warning">
                        <th>Harga Dapat Berubah Setiap Saat </th>
                    </tr>
                </table>
            </div>
        </aside>
    </div>
    <hr>
    <?php 
  
        if (isset($_POST['kirim'])) {
            $nama = $_POST['name'];
            $produk = $_POST['produk'];
            $jumlah = $_POST['jumlah'];
            if ($produk == "TV"){
                $total = $jumlah * 4200000;
            } elseif ($produk == "Kulkas") {
                $total = $jumlah * 3100000;
            } elseif ($produk == "Mesin Cuci") {
                $total = $jumlah * 3800000;
            }
    ?>
    <div class="container">
    <table class="table table-bordered" style="text-align: center;">
            <tr class="table-warning">
                <th>Nama Customer</th>
                <th>Produk</th>
                <th>Jumlah</th>
                <th>Harga</th>
            </tr>
            <tr class="table-primary">
                <td><?= $nama; ?></td>
                <td><?= $produk; ?></td>
                <td><?= $jumlah; ?></td>
                <td><?= 'Rp.' .number_format ($total, 0, '.', '.');?></td>
            </tr>
    </table>
    </div>
    <?php } ?>
    
    <footer class="bg-warning" style="height:50px; margin-top:118px">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <p class="text-center" style="text-align:center; padding-top:10px">© Azka Zharari</p>
                </div>
            </div>
        </div>
    </footer>   
</body>
</html>