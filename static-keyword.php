<?php 

// class Contohstatic {
//     public static $angka = 1;

//     public static function halo() {
//         return "Hallo " . self::$angka++ . " kali.";
//     }
// }

// echo Contohstatic::$angka;
// echo "<br>";
// echo Contohstatic::halo();
// echo "<hr>";
// echo Contohstatic::halo();


class Contoh {
    public static $angka = 1;

    public function halo() {
        return "hallo " . self::$angka++ . " kali. <br>";
    }
}

// Nilai static akan selalu tetap meskipun variabel nnya berbeda dan akan berlanjut
$obj = new Contoh;
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();

echo "<hr>";
$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
 ?>