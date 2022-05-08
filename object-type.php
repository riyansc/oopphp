<?php 

// jualan produk
// komik
// game

class Produk {

	public  $judul, 
            $penulis, 
            $penerbit, 
            $harga;
 	// Method adalah function yang ada di dalam kelas

    // Membuat method construct
    // Method construct akan di jalankan secara otomatis setiap membuat instance object dari sebuah kelas
    public function __construct($judul, $penulis,$penerbit, $harga) {

        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;

    }
    public function getLabel() {
        // Ketika akan mengambil data yang ada di dalam property lain maka gunakan $this untuk memanggilnya
        return "$this->penulis, $this->penerbit";

    }
 }

// Membuat Kelas baru 
 // Object type digunakan untuk menentukan objek mana saja yang dapat masuk dan di tambahkan kedalam kelas baru, contohnya class cetakinfoproduk dengan metod function cetak, kemudian menentukan objek dari kelas mana yang bisa di tambahkan dengan menambahkan parameter nama kelasnya, yaitu kelas produk, maka hanya bisa menambahkan lewat kelas produk
 class CetakInfoProduk {
    public function cetak( Produk $produk){
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp.  {$produk->harga})";
        return $str;
    }
 }
$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);


 echo "Komik : " . $produk1->getLabel();
 echo "<br>";
 echo "Game : " . $produk2->getLabel();
 echo "<br>";
 $infoProduk1 = new CetakInfoProduk();
 echo $infoProduk1->cetak($produk1);
 ?>
