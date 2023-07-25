var jmlAngkot = 10;
var angkotBeroperasi = 6;

for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
    if (noAngkot == 8 || noAngkot == 10 || noAngkot == 5) {
        console.log("Angkot No. " + noAngkot + " sedang lembur.");

    } else if (noAngkot == 8 || noAngkot == 10) {
        console.log("Angkot No. " + noAngkot + " sedang lembur.");
    
    } else {
        console.log("Angkot No. " + noAngkot + " sedang tidak beroperasi.");
    }
}

// // kj
// for (var noAngkot = 1; noAngkot <= jmlAngkot; noAngkot++) {
//     if (noAngkot <= 6 && noAngkot != 5) {
//         console.log("Angkot No. " + noAngkot + " beroperasi dengan baik.");

//     } else if (noAngkot == 8 || noAngkot == 10 || noAngkot == 5) {
//         console.log("Angkot No. " + noAngkot + " sedang lembur.");
    
//     } else {
//         console.log("Angkot No. " + noAngkot + " sedang tidak beroperasi.");
//     }
// }