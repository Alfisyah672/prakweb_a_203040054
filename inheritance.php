<?php

class Produk
{
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlhalaman,
    $waktumain;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlhalaman = $jmlhalaman;
    $this->waktumain = $waktumain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoProduk()
  {
    // Komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000) -100 Halaman
    $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    return $str;
  }
}


class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlhalaman} Halaman.";
    return $str;
  }
}


class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktumain} Jam.";
    return $str;
  }
}

class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
    return $str;
  }
}



$produk1 = new Komik("Naruto", "Masahi kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 300000, 0, 50, "Game");


// Komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000) -100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 300000) - 50 Jam

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk->getInfoProduk();
