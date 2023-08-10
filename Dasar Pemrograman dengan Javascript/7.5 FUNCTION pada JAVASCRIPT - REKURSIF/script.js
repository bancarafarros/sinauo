// rekursif fungsi yang bisa memanggil dirinya sendiri

// for (let i = 10; i >= 1; i--) {
//     console.log(i);
    
// }

// function tampilAngka(n) {
//     console.log(n);
//     return tampilAngka(n - 1);
// }

// tampilAngka(10);

// base case kondisi akhir dari rekursif yang menghasilkan nilai
// function tampilAngka(n) {
//     if (n == 0) { // base case
//         return;
//     }              // base case
//     console.log(n);
//     return tampilAngka(n - 1);
// }

// tampilAngka(10);

function faktorial(n) {
    if (n == 0) return 1;
        return n * faktorial(n - 1);
}

console.log(faktorial(5));