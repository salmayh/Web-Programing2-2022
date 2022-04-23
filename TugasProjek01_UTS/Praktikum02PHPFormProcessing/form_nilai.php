<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container">

  <form method="GET" action="praktikum2.php">
    <div class="form-group row">
      <label for="nama_lengkap" class="col-4 col-form-label">Nama Lengkap</label> 
      <div class="col-8">
        <input id="nama_lengkap" name="nama_lengkap" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="matkul" class="col-4 col-form-label">Mata Kuliah</label> 
      <div class="col-8">
        <select id="matkul" name="matkul" class="custom-select">
          <option value="DDP">Dasar-Dasar Pemrograman</option>
          <option value="BDI">Basis Data I</option>
          <option value="WEB1">Pemrograman Web</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label> 
      <div class="col-8">
        <input id="nilai_uts" name="nilai_uts" placeholder="Nilai UTS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uas" class="col-4 col-form-label">NIlai UAS</label> 
      <div class="col-8">
        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">NIlai Tugas/Praktikum</label> 
      <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas" type="text" class="form-control">
      </div>
    </div> 
    <div class="form-group row">
      <div class="offset-4 col-8">
        <button name="submit" type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
  </form>
</div>
<?php
$Proses = isset ($_GET['proses']) ? $_GET['proses'] : '';
$nama_lengkap = isset ($_GET['nama_lengkap']) ? $_GET['nama_lengkap'] : '';
$matkul = isset ($_GET['matkul']) ? $_GET['matkul'] : '';
$nilai_uts = isset ($_GET['nilai_uts']) ? $_GET['nilai_uts'] : '';
$nilai_uas = isset ($_GET['nilai_uas']) ? $_GET['nilai_uas'] : '';
$nilai_tugas = isset ($_GET['nilai_tugas']) ? $_GET['nilai_tugas'] : '';

  echo 'Proses : ' . $Proses;
  echo 'Nama Lengkap : '.$nama_lengkap;
  echo '<br/>Mata Kuliah : '.$matkul;
  echo '<br/>Nilai UTS : '.$nilai_uts;
  echo '<br/>Nilai UAS : '.$nilai_uas;
  echo '<br/>Nilai Tugas/Praktikum : '.$nilai_tugas;
// contoh nilai kondisi bener/salah dari if else
  // if($nilai_uts > 50){
    //   echo "lulus";
    // }else{
      //   echo "tidak lulus";
  // }

  // contoh nilai kondisi bener/salah dari if elseif
  // if($nilai_uas > 100){
  //   $nilai_uas = 'A';
  // }elseif($nilai_uas > 80){
  //   $nilai_uas = 'B';
  // }elseif($nilai_uas > 60){
  //   $nilai_uas = 'C';
  // }elseif($nilai_uas > 20){
  //   $nilai_uas = 'E';
  // }

  // switch ($nilai_uts) {
  //   case 'A':
  //     $info = "Sangat Memuaskan";
  //     break;
  //   case 'B':
  //     $info = "Memuaskan";
  //     break;  
  //   case 'C':
  //     $info = "Cukup";
  //     break;  
  //   case 'D':
  //     $info = "Kurang";
  //     break;  
  //   case 'E':
  //     $info = "Sangat Kurang";
  //     break;  
  // }

  ?>
