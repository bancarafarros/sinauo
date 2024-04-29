// var angka = 5;

// if (angka == 1) {
//     console.log('anda memasukkan angka 1');

// } else if (angka == 2) {
//     console.log('anda memasukkan angka 2');

// } else {
//     console.log('angka yang anda masukkan salah');
// }

// var angka = 5;

// switch (angka) {
//     case 1:
//         console.log('anda memasukkan angka 1');
//         break;

//     case 2:
//         console.log('anda memasukkan angka 2');
//         break;

//     case 3:
//         console.log('anda memasukkan angka 3');
//         break;

//     default:
//         console.log('angka yang anda masukkan salah');
//         break;
// }

// var item = prompt( 'masukkan nama makanan / minuman : \n (cth: nasi, daging, susu, hamburger, softdrink)');

var item = 'susu';

switch (item) {
    case 'nasi':
        console.log('makanan / minuman sehat');
        break;

    case 'daging':
        console.log('makanan / minuman sehat');
        break;

    case 'susu':
        console.log('makanan / minuman sehat');
        break;

    case 'hamburger':
        console.log('makanan / minuman tidak sehat');
        break;

    case 'softdrink':
        console.log('makanan / minuman sehat');
        break;

    default:
        console.log('makanan / minuman belum terdaftar');
        break;
}