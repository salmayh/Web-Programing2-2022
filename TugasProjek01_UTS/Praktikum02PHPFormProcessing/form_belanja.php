<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  
  <title>Document</title>
</head>
<body>
  <div class="container">

  <h1>Belanja Online</h1>
  <hr>
  <form method="POST" action="form_belanja.php">
  <div class="form-group row">
    <label for="costumer" class="col-4 col-form-label">Costumer</label> 
    <div class="col-8">
      <input id="costumer" name="costumer" placeholder="Nama Costumer" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4">Pilih Produk</label> 
    <div class="col-8">
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_0" type="radio" class="custom-control-input" value="TV"> 
        <label for="produk_0" class="custom-control-label">TV</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_1" type="radio" class="custom-control-input" value="KULKAS"> 
        <label for="produk_1" class="custom-control-label">KULKAS</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input name="produk" id="produk_2" type="radio" class="custom-control-input" value="MESIN CUCI"> 
        <label for="produk_2" class="custom-control-label">MESIN CUCI</label>
      </div>
    </div>
  </div>
  <div class="form-group row">
    <label for="jumlah" class="col-4 col-form-label">Jumlah</label> 
    <div class="col-8">
      <input id="jumlah" name="jumlah" placeholder="Jumlah" type="text" class="form-control">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="proses" type="proses" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>

<div>
<ul class="list-group" style="width: 300px; margin-bottom: 30px">
  <li class="list-group-item active" aria-current="true">Daftar Harga</li>
  <li class="list-group-item">TV : 4.200.000</li>
  <li class="list-group-item">Kulkas : 3.100.000</li>
  <li class="list-group-item">MESIN CUCI : 3.800.000</li>
  <li class="list-group-item active" aria-current="true">Harga Dapat Berubah Setiap Saat </li>
</ul>
</div>
<hr>
<?php
  $costumer = isset ($_POST['costumer']) ? $_POST['costumer'] : '';
  $produk = isset ($_POST['produk']) ? $_POST['produk'] : '';
  $jumlah = isset ($_POST['jumlah']) ? $_POST['jumlah'] : '';
  $proses = isset ($_POST['proses']) ? $_POST['proses'] : '';
  
  if ($produk == "TV") {
    $proses = $jumlah * 4200000;
  } else if ($produk == "KULKAS") {
    $proses = $jumlah * 3100000;
  } else {
    $proses = intval($jumlah) * 3800000;
  }
  echo 'Nama Costumer : '.$costumer;
  echo '<br/>Produk Pilihan : '.$produk;
  echo '<br/>Jumlah Beli : '.$jumlah;
  echo '<br/>Total Belanja : '.$proses;
  
  ?>

  </div>
</body>
</html>