<?php 

// jualan produk
// komik
// game

class Produk {

	public  $judul, 
            $penulis, 
            $penerbit;
    protected $diskon = 0;

    // Kelas protected hanya bisa di akses oleh kelas parent produk dan turunanya saja yang sudah di hubungkan dengan extends ketika ada kondisi yang memungkinkan mengubah data dari kelas protected dari luar kelas parent maupun turunanya maka akan eror dan tidak bisa dijalankan.
    // protected $harga;

    // Kelas private adalah kelas yang hanya bisa digunakan oleh kelas parent / produk saja yang membungkusnya.
    private $harga;

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
        public function getHarga() {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }
 }

 class Komik extends Produk {
    public $jmlHalaman;
    public function __construct($judul, $penulis,$penerbit, $harga, $jmlHalaman){
        
        parent::__construct($judul, $penulis,$penerbit, $harga, $jmlHalaman);
        $this->jmlHalaman = $jmlHalaman;

    }
    public function setDiskon($diskon) {
        $this->diskon = $diskon;
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
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 20000, 50);

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";

$produk1->setDiskon(50);
echo $produk1->getHarga();
 ?>
