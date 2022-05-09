<?php 

// jualan produk
// komik
// game

class Produk {

	public  $judul, 
            $penulis, 
            $penerbit, 
            $harga;

    public function __construct($judul, $penulis,$penerbit, $harga) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    public function getLabel() {

        return "$this->penulis, $this->penerbit";

    }
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
 }

 class Komik extends Produk {
    public $jmlHalaman;
    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman){
        
        parent::__construct($judul, $penulis,$penerbit, $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;

    }
    public function getInfoProduk(){
        $str = "Komik : " .parent::getInfoProduk()." - {$this->jmlHalaman} Halaman";
        return $str;
    }
 }
class Game extends Produk {
    public $waktuMain;
    public function __construct ($judul, $penulis,$penerbit, $harga, $waktuMain){

        parent::__construct($judul, $penulis,$penerbit, $harga, $waktuMain);
        $this->waktuMain = $waktuMain;

    }
    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam";
        return $str;
    }
 }


$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 2500000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
 ?>
