<?php 

// jualan produk
// komik
// game

class Produk {

	public  $judul, 
            $penulis, 
            $penerbit, 
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe;

    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;

    }
    public function getLabel() {

        return "$this->penulis, $this->penerbit";

    }
    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        if ( $this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ( $this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
 }

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 0, 50, "Game");

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
 ?>
