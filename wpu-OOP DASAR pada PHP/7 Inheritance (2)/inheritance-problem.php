<?php
// membuat class Product
class Product
{
    // property
    public
        $judul,
        $penulis,
        $penerbit,
        $harga,
        $jumlahHalaman,
        $waktuMain;

    // contructor adalah function/method yang otomatis dijalankan ketika sebuah class memiliki object baru
    // constructor biasa digunakan sebagai nilai default

    // parameter di __construct berbeda dengan property class dan sudah diberi nilai default
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0, $waktuMain = 0)
    {
        // mengisi property class dengan value dari parameter __construct
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jumlahHalaman = $jumlahHalaman;
        $this->waktuMain = $waktuMain;
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

    // getInfoLengkap untuk menmapilkan informasi detail dari produk dengan menerapkan inheritance
    public function getInfoProduct()
    {
        // expected result
        // Komik: Naruto | Masashi Kishimoto, Shonen Jump (Rp 30000) - 100 halaman
        // Komik: Uncharted | Neil Druckmann, Sony Computer (Rp 25000) - 50 jam

        // {} untuk sebagai delimiter karena ditulis dalam bentuk string ""
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})"; // mengambil value dari property class yang berasal dari contructor

        return $str; // mengambalikan $str supaya bisa ditampilkan di layar
    }
}

// bikin child class Comic dari parent class Product
class Comic extends Product
{
    public function getInfoProduct()
    {
        // {} sebagai dilimiter karena ditulis dalam bentuk string
        $str = "Komik: {$this->judul} | {$this->getLabel()} (Rp {$this->harga} - {$this->jumlahHalaman} halaman"; // mengambil value dari property class yang berasal dari contructor

        return $str; // mengembalikan $str supaya bisa ditampilkan di layar
    }
}

// bikin child class Game dari parent class Product
class Game extends Product
{

    public function getInfoProduct()
    {
        // {} sebagai delimiter karena ditulis dalam bentuk string
        $str = "Game: {$this->judul} | {$this->getLabel()} (Rp {$this->harga} - {$this->waktuMain} jam"; // mengambil value dari property class yang berasal dari constructor

        return $str; // mengembalikan $str supaya bisa ditampilkan di layar
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
$productSatu = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$productDua = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 0, 50);
$productTiga = new Product("Dragon Ball"); // hanya mengisi satu parameter __construct karena sisanya sudah ada nilai default

// echo "Komik: " . $productSatu->getLabel();
// print_r("<br><br>");
// echo "Game: " . $productDua->getLabel();
// print_r("<br><br>");
// echo "Game: " . $productTiga->getLabel();
// print_r("<br><br>");

// $infoProductSatu = new CetakInfoProduct(); // instansiasi object $infoProductSatu dari class CetakInfoProduct
// echo $infoProductSatu->cetak($productSatu); // menampilkan detail dari $productSatu via object $infoProductSatu dan class CetakInfoProduct

// menjalankan getInfoLengkap() yang menerapkan inheritance
echo $productSatu->getInfoProduct();
print_r("<br><br>");
echo $productDua->getInfoProduct();
print_r("<br><br>");
