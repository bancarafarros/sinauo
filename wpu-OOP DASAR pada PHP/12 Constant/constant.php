<?php

// define tidak bisa disimpan di dalam class, harus disimpan di luar sebagai konstanta global
define('NAMA', 'Oss');
echo NAMA;
echo "<br>";

// const bisa disimpan ke dalam class
const UMUR = 22;
echo UMUR;
echo "<br><br>";

class Coba
{
    const NAMA = 'Oss';
}

echo Coba::NAMA;
echo "<br><br>";

// magic constant
echo __LINE__;
echo "<br><br>";

echo __FILE__;
echo "<br><br>";

function cobain()
{
    return __FUNCTION__;
}
echo cobain();
echo "<br><br>";

class Cobain
{
    public $kelas = __CLASS__;
}

$obj = new Cobain;
echo $obj->kelas;
