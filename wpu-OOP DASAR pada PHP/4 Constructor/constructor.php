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

// membuat object productTiga dari class Product dan mengisi parameter untuk __construct
$productSatu = new Product("Naruto", "Masashi Kishimoto", "Shonen Jump", 3000);
$productDua = new Product("Uncharted", "Neil Druckmann", "Sony Computer", 250000);
$productTiga = new Product("Dragon Ball"); // hanya mengisi satu parameter __construct karena sisanya sudah ada nilai default

echo "Komik: " . $productSatu->getLabel();
print_r("<br><br>");
echo "Game: " . $productDua->getLabel();
print_r("<br><br>");
echo "Game: " . $productTiga->getLabel();
