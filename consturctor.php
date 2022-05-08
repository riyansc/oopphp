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


// Membuat Object dan menimpa data yang ada di dalam property public
// Contoh
// $produk1 = new Produk();
// $produk1->judul = 'Naruto';
// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// var_dump($produk2);

$produk1 = new Produk("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckmann", "Sony Computer", 2500000);



 // echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";
 // echo "<br>";
// echo $produk3->getLabel();

 echo "Komik : " . $produk1->getLabel();
 echo "<br>";
 echo "Game : " . $produk2->getLabel();
 ?>
