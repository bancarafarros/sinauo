//------------- alert cuma klik2 aja -------------

// alert('Hello World');

// alert('halo');
// alert('nama');
// alert('saya');
// alert('Charr');

//------------- prompt bisa ngetik alias ngasih input -------------

// prompt('masukkan nama:');

// var nama = prompt('masukkan nama:');
// alert(nama);

//------------- confirm buat konfirmasi ------------- //

// var tes = confirm('kamu yakin?');
// alert(tes);

// var tes = confirm('kamu yakin?');
// if (tes == true) {
//     alert('user menekan tombol ok');
// } else {
//     alert('user menekan tombol cancel');
// }

alert('selamat datang');
var lagi = true;

while (lagi == true) {
    var nama = prompt('masukkan nama:');
    alert('halo ' + nama);

    lagi = confirm('coba lagi?')
}

alert('terima kasih');