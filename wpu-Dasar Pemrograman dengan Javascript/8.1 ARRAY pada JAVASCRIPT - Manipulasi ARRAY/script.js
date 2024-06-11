// manipulasi array

// 1 menambah isi array
// var arr = ["a", 1, true];
// console.log(arr); // menampilkan seluruh isi array

// var arr = ["a", 1, true];
// console.log(arr[1]); // menampilkan salah satu value dari elemen array

// var arr = [];
// arr[0] = "satu";
// arr[1] = "dua";
// arr[2] = "tiga";
// arr[6] = "asdfg";

// console.log(arr);

// 2 menghapus isi array
// var arr = ["satu", "dua", "tiga", "empat", "lima"];
// arr[1] = undefined; mengganti value salah satu elemen pada array

// console.log(arr);

// 3 menampilkan isi array dengan perulangan for
// var arr = ["sandhika", "galih", "nofa"];

// for (var i = 0; i < 3; i++) {
//     console.log(arr[i]);
// }

// menampilkan array dengan perulangan for dan arr.length
// var arr = ["sandhika", "galih", "nofa", "fufu"];

// for (var i = 0; i < arr.length; i++) {
//     console.log(arr[i]);
// }

// method pada array
var arr = ["sandhika", "galih", "nofa", "fufu"];

// 1 join menggabungkan semua isi array menjadi string
// console.log(arr.join(' - ')); '-' sebagai separator antar elemen, defaultnya ,

// 2 push menambah elemen di belakang array
// arr.push("xioa") // tambah satu elemen
// arr.push("xioa", "uhuyy") // tambah dua elemen
// console.log(arr);

// 3 pop menghapus elemen terakhir pada array
// arr.pop(); menghapus satu elemen terakhir pada array
// console.log(arr);

// 4 unshift menambah elemen di depan array
// arr.unshift("xioa")
// console.log(arr);

// 5 shift mengahapus elemen pertama pada array
arr.shift();
console.log(arr);
