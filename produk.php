<?php 

// jualan produk
// komik
// game

class Produk {

	public $judul = "judul", $penulis ="penulis", $penerbit = "penerbit", $harga= 0;
 	// Method adalah function yang ada di dalam kelas

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

 $produk3 = new Produk();
 $produk3->judul="Naruto";
 $produk3->penulis="masashi kisimoto";
 $produk3->penerbit="Shonen Jump";
 $produk3->harga="30000";

$produk4 = new Produk();
 $produk4->judul="Uncharted";
 $produk4->penulis="Neil Duchman";
 $produk4->penerbit="Sony Computer";
 $produk4->harga="2500000";


 // echo "Komik : $produk3->judul, $produk3->penulis, $produk3->penerbit, $produk3->harga";
 // echo "<br>";
// echo $produk3->getLabel();

 echo "Komik : " . $produk3->getLabel();
 echo "<br>";
 echo "Game : " . $produk4->getLabel();
 ?>
