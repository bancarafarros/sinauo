<?php
// membuat class Product
class Product
{
    // property
    public
        $judul,
        $penulis,
        $penerbit,
        $harga;

    // contructor adalah function/method yang otomatis dijalankan ketika sebuah class memiliki object baru
    // constructor biasa digunakan sebagai nilai default


    // parameter di __construct berbeda dengan property class dan sudah diberi nilai default
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        // mengisi property class dengan value dari parameter __construct
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method
    public function sayHello()
    {
        return "Hello World!";
    }

    public function getLabel()
    {
        // pake this biar bisa make property di luar function
        return "$this->penulis, $this->penerbit";
    }
}

class CetakInfoProduct // class yang akan menerima inputan object
{
    // function dengan parameter class Product dan object $product
    public function cetak(Product $product) // parameternya hanya bisa diisi oleh object yang berasal dari class tersebut
    {
        // $str = "Naruto | Masashi Kishimoto | Shonen Jump (Rp 30000)"; // menampilkan secara manual

        // ditampilkan dengan menggunakan object yang berasal dari parameter (class)
        $str = "{$product->judul} | {$product->getLabel()}  (Rp {$product->harga})";

        return $str; // mengembalikan isi $str supaya bisa ditampilkan ke layar
    }
}

// membuat object product dari class Product dan mengisi parameter untuk __construct
$productSatu = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$productDua = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$productTiga = new Product("Dragon Ball"); // hanya mengisi satu parameter __construct karena sisanya sudah ada nilai default

echo "Komik: " . $productSatu->getLabel();
print_r("<br><br>");
echo "Game: " . $productDua->getLabel();
print_r("<br><br>");
echo "Game: " . $productTiga->getLabel();
print_r("<br><br>");

$infoProductSatu = new CetakInfoProduct(); // instansiasi object $infoProductSatu dari class CetakInfoProduct
echo $infoProductSatu->cetak($productSatu); // menampilkan detail dari $productSatu via object $infoProductSatu dan class CetakInfoProduct
