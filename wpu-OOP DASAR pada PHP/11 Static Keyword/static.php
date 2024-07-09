<!-- member yang terikat dengan class, bukan dengan object -->
<!-- nilai static akan selalu tetap meskipun object diinstansiasi berkali-kali -->
<!-- membuat kode menjadi procedural -->
<!-- biasanya digunkana untuk membuat helper -->
<!-- biasanya digunakan di class utility pada framework -->

<?php

class ContohStatic
{
    public static $angka = 1; // property static

    public static function halo() // method static
    {
        return "Halo " . self::$angka++ . " kali";
    }
}

echo ContohStatic::$angka; // :: untuk mengakses property dan function static
echo "<br><br>";
echo ContohStatic::halo();
echo "<br><br>";
echo ContohStatic::halo();

// ================================================================================================================================

class Contoh
{
    // public $angka = 1; // non static
    public static $angka = 1; // static

    public function halo()
    {
        // return "Halo " . $this->angka++ . " kali <br>"; // non static
        return "Halo " . self::$angka++ . " kali <br>"; // static
    }
}

// nilai static akan selalu tetap meskipun object diinstansiasi berkali-kali
$obj = new Contoh();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<br>";

$obj2 = new Contoh();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
