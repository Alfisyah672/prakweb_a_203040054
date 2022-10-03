<?php

class Produk
{
  public $judul = 'judul',
    $penulis = 'penulis',
    $penerbit = 'penerbit',
    $harga = 'harga';
}


$produk1 = new Produk();
$produk1->judul = "Boruto";
var_dump($produk1);
$produk2 = new Produk();
