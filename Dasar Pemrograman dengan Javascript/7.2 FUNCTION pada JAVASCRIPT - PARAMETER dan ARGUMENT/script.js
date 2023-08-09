// =====================CONTOH PARAMETER DAN ARGUMEN===================== //
// =====================CONTOH PARAMETER DAN ARGUMEN===================== //
// function tambah(a, b) {
//     return a + b;
// }

// function kali(a, b) {
//     return a * b;
// }

// var hasil = tambah(1, 3);
// console.log(hasil);

// var a = 10;
// var b = 20;
// var hasil = tambah(a, b);
// console.log(hasil);

// var a = parseInt(prompt('Masukkan nilai a: '));
// var b = parseInt(prompt('Masukkan nilai b: '));
// var hasil = tambah(a*2, b*2);
// console.log(hasil);

// var hasil = kali(tambah(1, 2), tambah(3, 4));
// console.log(hasil);

// =====================CONTOH ARGUMENTS===================== //
// =====================CONTOH ARGUMENTS===================== //
function tambah() {
    var hasil = 0;
    for (var i = 0; i < arguments.length; i++) {
        hasil += arguments[i];
    }
    return hasil;
}

var coba = tambah(1, 2, 3, 4, 5);
console.log(coba);