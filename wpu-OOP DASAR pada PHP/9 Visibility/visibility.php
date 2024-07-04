<?php
// membuat class Product
class Product
{
    // property
    public
        $judul,
        $penulis,
        $penerbit;

    protected $diskon = 0; // hanya bisa diakses oleh parent class dan child class

    private $harga; // hanya bisa diakses oleh parent class saja

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

    // untuk mendapatkan dan menampilkan harga dari private property parent class Product
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function getLabel()
    {
        // pake this biar bisa make property di luar function
        return "$this->penulis, $this->penerbit";
    }

    // getInfoLengkap untuk menmapilkan informasi detail dari produk dengan menerapkan inheritance
    public function getInfoProduct()
    {
        // {} untuk sebagai delimiter karena ditulis dalam bentuk string ""
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})"; // mengambil value dari property class yang berasal dari contructor

        return $str; // mengambalikan $str supaya bisa ditampilkan di layar
    }
}

class Comic extends Product // bikin child class Comic dari parent class Product
{
    public $jumlahHalaman; // property khusus milik child class Comic

    // bikin construct samain kayak parent class Product ditambahin $jumlahHalaman; // property khusus milik child class Comic
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jumlahHalaman = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga); // panggil construct punya parent class Product tanpa parameter default
        $this->jumlahHalaman = $jumlahHalaman; // mengisi property class dengan value dari parameter __construct
    }

    public function getInfoProduct()
    {
        // {} sebagai dilimiter karena ditulis dalam bentuk string
        // parent::getInfoProduct() dari parent class Product untuk overriding getInfoProduct() child class Comic
        $str = "Komik: " . parent::getInfoProduct() . " - {$this->jumlahHalaman} halaman"; // mengambil value dari property class yang berasal dari contructor

        return $str; // mengembalikan $str supaya bisa ditampilkan di layar
    }
}

class Game extends Product // bikin child class Game dari parent class Product
{
    public $waktuMain; // property khusus milik child class Comic

    // bikin construct samain kayak parent class Product ditambahin $jumlahHalaman; // property khusus milik child class Game
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0)
    {
        parent::__construct($judul, $penulis, $penerbit, $harga); // panggil construct punya parent class Product tanpa parameter default
        $this->waktuMain = $waktuMain; // mengisi property class dengan value dari parameter __construct
    }

    // mengisi property class
    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getInfoProduct()
    {
        // {} sebagai delimiter karena ditulis dalam bentuk string
        // parent::getInfoProduct() dari parent class Product untuk overriding getInfoProduct() child class Game
        $str = "Game: " . parent::getInfoProduct() . " - {$this->waktuMain} jam"; // mengambil value dari property class yang berasal dari constructor

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
$productSatu = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$productDua = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);
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
print_r("<hr>");
print_r("<br>");

// set diskon
$productDua->setDiskon(50);
echo $productDua->getHarga();
