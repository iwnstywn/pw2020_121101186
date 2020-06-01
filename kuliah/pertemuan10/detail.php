<?php

require 'functions.php';

$id = $_GET['id'];
$m = query("SELECT * FROM siswa WHERE id = $id");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Detail Mahasiswa</title>
</head>

<body>
  <h3>Detail Mahasiswa</h3>

  <ul>
    <li>
      <img src="img/<?= $m["gambar"]; ?>" width="200">
    </li>
    <li>NRP : <?= $m["nrp"]; ?></li>
    <li>Nama : <?= $m["nama"]; ?></li>
    <li>Email : <?= $m["email"]; ?></li>
    <li>Jurusan : <?= $m["jurusan"]; ?></li>
    <li><a href="">ubah</a> | <a href="">hapus</a></li>
    <li><a href="latihan2.php">kembali ke daftar mahasiswa</a></li>
  </ul>

</body>

</html>