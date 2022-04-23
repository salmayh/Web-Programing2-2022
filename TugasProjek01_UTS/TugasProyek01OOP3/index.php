<?php
require_once 'classBMIPasien.php';
$pasien1 = new bmiPasien(1,"P001","Ahmad","Depok","2002-09-21","ahmad@gmail.com","L",69.8,1.69,"2022-01-10");
$pasien2 = new bmiPasien(2,"P002","Rina","Depok","2002-09-21","rina@gmail.com","P",55.3,1.65,"2022-01-10");
$pasien3 = new bmiPasien(3,"P003","Lutfi","Depok","2002-09-21","lutfi@gmail.com","L",45.2,1.71,"2022-01-11");


$array = [$pasien1, $pasien2, $pasien3];

if(isset($_POST['submit'])){

$id = 4;
$kode = $_POST['kode'];
$nama = $_POST['nama'];
$tmp_lahir = "Depok";
$tgl_lahir = "2002-09-21";
$email = $_POST['nama'] . "@gmail.com";
$gender = $_POST['gender'];
$berat = (int)$_POST['berat'];
$tinggi = $_POST['tinggi']/100;
$tanggal = $_POST['tanggal'];

$pasien4 = new bmiPasien($id,$kode,$nama,$tmp_lahir,$tgl_lahir,$email,$gender,$berat,$tinggi,$tanggal);
$array[] = $pasien4;


}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>BMI Pasien</title>
</head>
<body>
    <div class="container">
    <form method="POST">
    <h2>Tambah data pasien</h2>
  <div class="mb-3">
    <label class="form-label">Nama Pasien</label>
    <input type="text" class="form-control" name="nama">
  </div>
  <div class="mb-3">
    <label class="form-label">Kode Pasien</label>
    <input type="text" class="form-control" name="kode">
  </div>
  <div class="mb-3">
    <label class="form-label">Gender</label>
    <select class="form-select" aria-label="Default select example" name="gender">
  <option selected disabled>Open this select menu</option>
  <option value="L">Laki-laki</option>
  <option value="P">Perempuan</option>
</select>
  </div>
  <div class="mb-3">
    <label class="form-label">Berat</label>
    <input type="text" class="form-control" name="berat">
  </div>
  <div class="mb-3">
    <label class="form-label">Tinggi</label>
    <input type="text" class="form-control" name="tinggi">
  </div>
  <div class="mb-3">
    <label class="form-label">Tanggal Periksa</label>
    <input type="date" class="form-control" name="tanggal">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
        <div class="mt-5">
          <h2>Table Data</h2>
          <table class="table">
              <tr>
                  <th scope="col">No</th>
                  <th scope="col">Tanggal Periksa</th>
                  <th scope="col">Kode Pasien</th>
                  <th scope="col">Nama Pasien</th>
                  <th scope="col">Gender</th>
                  <th scope="col">Berat (KG)</th>
                  <th scope="col">Tinggi (CM)</th>
                  <th scope="col">Nilai BMI</th>
                  <th scope="col">Status BMI</th>
              </tr>
              <?php foreach($array as $a) : ?> 
              <tr>
                  <td><?php echo $a->pasien->id; ?></td>
                  <td><?php echo $a->tanggal; ?></td>
                  <td><?php echo $a->pasien->kode; ?></td>
                  <td><?php echo $a->pasien->nama; ?></td>
                  <td><?php echo $a->pasien->gender; ?></td>
                  <td><?php echo $a->berat; ?></td>
                  <td><?php echo ($a->tinggi * 100);?></td>
                  <td><?php echo number_format($a->nilaiBmi(),2); ?></td>
                  <td><?php echo $a->statusBmi(); ?></td>
              </tr>
              <?php endforeach; ?>
          </table>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>