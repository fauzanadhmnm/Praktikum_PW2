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
  <form class="mt-5 mx-3">
    <div class="form-group row">
      <label for="nama" class="col-4 col-form-label">Nama Lengkap</label>
      <div class="col-8">
        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-4 col-form-label" for="matkul">Mata Kuliah</label>
      <div class="col-8">
        <select id="matkul" name="matkul" class="form-control">
          <option value="DDP">Dasar-Dasar Pemograman</option>
          <option value="BDI">Basis Data I</option>
          <option value="WEB1">Pemograman Web</option>
        </select>
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uts" class="col-4 col-form-label">Nilai UTS</label>
      <div class="col-8">
        <input id="nilai_uts" name="nilai_uts" placeholder="Niali UTS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_uas" class="col-4 col-form-label">Nilai UAS</label>
      <div class="col-8">
        <input id="nilai_uas" name="nilai_uas" placeholder="Nilai UAS" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <label for="nilai_tugas" class="col-4 col-form-label">Nilai Tugas/Praktikum</label>
      <div class="col-8">
        <input id="nilai_tugas" name="nilai_tugas" placeholder="Nilai Tugas/Praktikum" type="text" class="form-control">
      </div>
    </div>
    <div class="form-group row">
      <div class="offset-4 col-8">
        <input type="submit" value="Simpan" name="proses" />
      </div>
    </div>
  </form>
  <div>
    <?php
    $proses = $_GET["proses"];
    $nama_siswa = $_GET["nama"];
    $matkul = $_GET["matkul"];
    $nilai_uts = $_GET["nilai_uts"];
    $nilai_uas = $_GET["nilai_uas"];
    $nilai_tugas = $_GET["nilai_tugas"];

    echo "Nama Lengkap : " . $nama_siswa;
    echo "<br/>";
    echo "Matkul : " . $matkul;
    echo "<br/>";
    echo "nilai_uts : " . $nilai_uts;
    echo "<br/>";
    echo "nilai_uas : " . $nilai_uas;
    echo "<br/>";
    echo "nilai_tugas : " . $nilai_tugas;
    ?>
  </div>
</body>

</html>