<?php

// session_start();

// if (!isset($_SESSION['login'])) {
//   header("Location: login.php");
//   exit;
// }


require 'functions.php';

$id = $_GET['id'];

$b = query("SELECT * FROM buku WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <title>Detail Buku</title>
</head>

<body>
  <h3 style="width:100%; text-align:center; padding-top: 100px;">Detail Buku</h3>
  <ul>
    <img src="img/<?= $b['gambar']; ?>" width="150px">
    <li><?= $b['judul']; ?></li>
    <li><?= $b['deskripsi']; ?></li>
    <li><?= $b['detail']; ?></li>

    <button style="background-color:aqua ; border:0.5px solid black;">
      <a style="color:black ;" href="ubah.php?id=<?= $b['id']; ?>">Ubah</a>
    </button>
    <button style="background-color:red; border:0.5px solid black;">
      <a style="color:white;" href="hapus.php?id=<?= $b['id']; ?>" onclick="return confirm ('apakah anda yakin hapus data?');">Hapus</a>
    </button>
    <button style="background-color:grey ;">
      <a style="color:white;" href=" index.php">Kembali Ke Daftar Buku</a>
      </li>
    </button>
  </ul>
</body>

</html>