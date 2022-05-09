<?php 

// jualan produk
// komik
// game

class Produk {

	private $judul, 
            $penulis, 
            $penerbit,
            $diskon = 0;

    private $harga;

    public function __construct($judul, $penulis,$penerbit, $harga) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }

    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis=$penulis;
    }
    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit=$penerbit;
    }
    public function getPenerbit() {
        return $this->penerbit;
    }

    public function getLabel() {

        return "$this->penulis, $this->penerbit";

    }
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        
        return $str;
    }
    public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }
    public function getDiskon() {
        return $this->diskon;
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

 class CetakInfoPrduk {
    public $daftarProduk = array();

    public function tambahProduk ( Produk $produk ) {
        $this->daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK : <br>";

        foreach($this->daftarProduk as $p) {
            $str .= "- {$p->getInfoProduk()} <br>";
        }
        return $str;
    }
 }


$produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 20000, 50);

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);

echo $cetakProduk->cetak();
 ?>
