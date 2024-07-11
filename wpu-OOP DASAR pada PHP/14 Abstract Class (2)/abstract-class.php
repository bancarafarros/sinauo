<?php
abstract class Product // membuat class abstract Product
{
    // property
    private
        $judul,
        $penulis,
        $penerbit,
        $harga, // hanya bisa diakses oleh parent class saja
        $diskon = 0;

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

    // setter dan getter untuk memungkinkan mengakses private dan protected property milik class lain (umumnya milik parent class)
    public function setJudul($judul) // untuk inisiasi/mendefinisikan nilai poperty $judul
    {
        // validasi judul harus string
        // if (!is_string($judul)) {
        //     throw new Exception("Judul harus dalam string");
        // }

        $this->judul = $judul; // mengisi property $judul dari parent class Product dengan $judul dari pengguna
    }

    public function getJudul() // untuk melihat/mendapatkan value property $judul
    {
        return $this->judul; // mengembalikan value property $judul milik parent class Product
    }

    public function setPenulis($penulis)
    {
        $this->penulis = $penulis;
    }

    public function getPenulis()
    {
        return $this->penulis;
    }

    public function setPenerbit($penerbit)
    {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit()
    {
        return $this->penerbit;
    }

    public function setHarga($harga)
    {
        $this->harga = $harga;
    }

    // untuk mendapatkan dan menampilkan harga dari private property parent class Product
    public function getHarga()
    {
        return $this->harga - ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon)
    {
        $this->diskon = $diskon;
    }

    public function getDiskon()
    {
        return $this->diskon;
    }

    public function getLabel()
    {
        // pake this biar bisa make property di luar function
        return "$this->penulis, $this->penerbit";
    }

    abstract public function getInfoProduct(); // membuat abstract method

    public function getInfo()
    {
        // {} untuk sebagai delimiter karena ditulis dalam bentuk string ""
        $str = "{$this->judul} | {$this->getLabel()} (Rp {$this->harga})";

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
        $str = "Komik: " . $this->getInfo() . " - {$this->jumlahHalaman} halaman"; // mengambil value dari property class yang berasal dari contructor

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

    public function getInfoProduct()
    {
        $str = "Game: " . $this->getInfo() . " - {$this->waktuMain} jam"; // mengambil value dari property class yang berasal dari constructor

        return $str; // mengembalikan $str supaya bisa ditampilkan di layar
    }
}

class CetakInfoProduct
{
    public $daftarProduct = [];

    public function addProduct(Product $product)
    {
        $this->daftarProduct[] = $product;
    }

    public function cetak()
    {
        $str = "DAFTAR PRODUK: <br>";

        foreach ($this->daftarProduct as $product) {
            $str .= "- {$product->getInfoProduct()} <br>";
        }

        return $str; // mengembalikan isi $str supaya bisa ditampilkan ke layar
    }
}

// membuat object product dari class Product dan mengisi parameter untuk __construct
$productSatu = new Comic("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$productDua = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 50);

$cetakProduct = new CetakInfoProduct;
$cetakProduct->addProduct($productSatu);
$cetakProduct->addProduct($productDua);
echo $cetakProduct->cetak();
