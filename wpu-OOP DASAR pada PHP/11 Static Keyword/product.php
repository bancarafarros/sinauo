!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Property</h1>
    <p>
        > variabel yang ada di dalam class dan object
        > merepresentasikan data/keadaan dari sebuah object
        > penulisannya harus ditambah visibility di depannya
    </p>

    <h1>Method</h1>
    <p>
        > function yang ada di dalam class dan object
        > merepesentasikan perilaku dari class dan object
        > penulisannya harus ditambah visibility di depannya
    </p>

    <h1>Mobil sebagai class/object</h1>
    <p>
        Property:
        > nama > merk
        > warna > kecepatanMaksimal
        > jumlahPenumpang
    </p>
    <br><br>
    <p>Method:
        > tambahKecepatan > kurangiKecepatan
        > gantiTransmisi > belokKiri
        > belokKanan
    </p>

    <?php
    class Mobil
    {
        // property
        public $nama;
        public $merk;
        public $warna;
        public $kecepatanMaksimal;
        public $jumlahPenumpang;

        // method
        public function tambahKecepatan()
        {
        }

        public function kurangiKecepatan()
        {
        }

        public function gantiTransmisi()
        {
        }

        public function belokKanan()
        {
        }

        public function belokKiri()
        {
        }
    }
    ?>
</body>

</html>

<?php
// jualan komik dan game

// membuat class Product
class Product
{
    // property
    public
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

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

// $productSatu = new Product(); // membuat object productSatu dari class Product
// $productSatu->judul = "Naruto"; // mengganti value default property judul dengan string "Naruto"
// // print_r($productSatu->judul); // menampilkan property judul milik productSatu
// print_r($productSatu); // menampilkan object productSatu

// print_r("<br><br>");

// $productDua = new Product(); // membuat object productDua dari class Product
// $productDua->judul = "Uncharted"; // mengganti value property judul dengan string "Uncharted"
// $productDua->propertyBaru = "hahay"; // membuat propertyBaru untuk object productDua
// // print_r($productDua->judul);
// print_r($productDua); // menampilkan object productDua

// ================================================================================================================================================

$productTiga = new Product(); // membuat object productTiga dari class Product
$productTiga->judul = "Naruto"; // mengganti value default property judul
$productTiga->penulis = "Masashi Kishimoto"; // mengganti value default property penulis
$productTiga->penerbit = "Shonen Jump"; // mengganti value default property penerbit
$productTiga->harga = 30000; // mengganti value default harga

print_r($productTiga); // menampilkan object productTiga
print_r("<br><br>");

echo "Komik : $productTiga->penulis, $productTiga->penerbit"; // menampilkan property object productTiga
print_r("<br><br>");

// echo untuk menampilkan value property, tanpa echo value property tidak akan tampil
echo $productTiga->getLabel(); // menjalankan method/function getLabel()
print_r("<br><br>");
print_r("<br><br>");

// ========================================================================================================================================================================================

$productEmpat = new Product();
$productEmpat->judul = "Uncharted";
$productEmpat->penulis = "Neil Druckmann";
$productEmpat->penerbit = "Sony Computer";
$productEmpat->harga = 250000;

echo "Komik: " . $productTiga->getLabel();
print_r("<br><br>");
echo "Game: " . $productEmpat->getLabel();
