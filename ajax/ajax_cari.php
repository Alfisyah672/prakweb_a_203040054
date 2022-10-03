<?php

require '../functions.php';
$mahasiswa = cari($_GET['keyword']);
?>
<table border="1" cellpadding="10" cellspacing="0">

  <tr>
    <th>#</th>
    <th>Gambar</th>
    <th>Nama</th>
    <th>Selengkapnya</th>
  </tr>

  <?php if (empty($buku)) : ?>
    <tr>
      <td colspan="4">
        <p>Data buku tidak ditemukan!!</p>
      </td>
    </tr>
  <?php endif; ?>
  <?php $i = 1;
  foreach ($buku as $b) : ?>

    <tr>
      <td><?= $i++; ?></td>
      <td><img src="img/<?= $b['gambar']; ?>" width="60"></td>
      <td><?= $b['judul']; ?></td>
      <td>
        <button class="btn-detail">
          <a href="detail.php?id=<?= $b['id']; ?>" style="color: black;">Lihat Detail</a>
        </button>
      </td>
    </tr>
  <?php endforeach; ?>
</table>