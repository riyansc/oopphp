<?php 

require_once 'app/init.php';
// $produk1 = new Komik("Naruto", "Masashi Kisimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 20000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

use app\service\User as ServiceUser;
use app\produk\User as ProdukUser;
new ServiceUser();
echo "<br>";
new ProdukUser();

