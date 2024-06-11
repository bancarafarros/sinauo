<?php
// class bisa dianggap blueprint rumah
// object bisa dianggap rumah yang berasal dari blueprint

// CLass
// blueprint atau template untuk membuat instance dari object
// class mendifiniskan object
// menyimpan property (data) dan method (perilaku)

class testClass
{
    public $cobaProperty; // property

    public function cobaFunction() // method
    {
        echo "coba method";
    }
}

// Object
// instance yang didefinisikan oleh CLass
// banyak object yang bisa dibuat dari satu class
// object dibuat dengan menggunakan keyword new

// membuat object baru dari class testClass()
$objectA =  new testClass();
$objectB = new testClass();

var_dump($objectA);
