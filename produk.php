<?php
class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;
}

$produk1 = new Produk();
$produk1->judul = "Boruto";
var_dump($produk1);
$produk2 = new Produk();
