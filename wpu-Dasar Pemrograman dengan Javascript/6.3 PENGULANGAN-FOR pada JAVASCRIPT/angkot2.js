var jmlAngkot = 10
var angkotBeroperasi = 9;
var noAngkot = 1

while (noAngkot <= 6) {
    console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');

noAngkot++;
}

angkotBeroperasi++;

for (angkotBeroperasi; angkotBeroperasi <= jmlAngkot; angkotBeroperasi++) {
    console.log('Angkot No. ' + angkotBeroperasi + ' sedang tidak beroperasi.');
}

// // kj
// while (noAngkot <= angkotBeroperasi) {
//     console.log('Angkot No. ' + noAngkot + ' beroperasi dengan baik.');

// noAngkot++;
// }

// for (noAngkot = angkotBeroperasi + 1; noAngkot <= jmlAngkot; noAngkot++) {
//     console.log('Angkot No. ' + noAngkot + ' sedang tidak beroperasi.');
// }