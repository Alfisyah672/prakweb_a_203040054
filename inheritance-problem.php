<?php

class Produk
{
  public
    $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlhalaman,
    $waktumain,
    $tipe;

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlhalaman = 0, $waktumain = 0, $tipe)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlhalaman = $jmlhalaman;
    $this->waktumain = $waktumain;
    $this->tipe = $tipe;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
  }

  public function getInfoLengkap() {
    // Komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000) -100 Halaman
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
    if( $this->tipe == "Komik") {
      $str . = "- {$this->jmlhalaman} Halaman.";
    }else if($this->tipe == "Game") {
      $str .= "` {$this->waktumain} Jam.";
    }
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



$produk1 = new Produk("Naruto", "Masahi kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 300000, 0, 50, "Game");


// Komik : Naruto | Mashasi Kishimoto, Shonen Jump (Rp. 30000) -100 Halaman
// Game : Uncharted | Neil Druckman, Sony Computer (Rp. 300000) - 50 Jam

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk->getInfoLengkap();