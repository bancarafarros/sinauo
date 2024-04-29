tanya = true;

while (tanya) {
    // menangkap pilihan(input) player
    var player = prompt('pilih salah satu: gajah, semut, dan orang')

    // memilih bilangan random
    var comp = Math.random();

    // menangkap pilihan(input) komputer
    if (comp < 0.34) {  
        comp = 'gajah';

    } else if (comp >= 0.34 && comp < 0.67) {   
        comp = 'orang';

    } else {
        comp = 'semut';
    }

    // rules
    var hasil = '';

    if (player == comp) {
        hasil = 'SERI!'

    } else if (player == 'gajah') {
        // if (comp == 'orang') {
        //     hasil = 'MENANG!';
    
        // } else {
        //     hasil = 'KALAH!';
        // }
        hasil = (comp == 'orang') ? 'MENANG!' : 'KALAH!';

    } else if (player == 'orang') {
        // if (comp == 'gajah') {
        //     hasil = 'KALAH!';
    
        // } else {
        //     hasil = 'MENANG!';
        // }
        hasil = (comp == 'gajah') ? 'KALAH!' : 'MENANG!';

    } else if (player == 'semut') {
        // if (comp == 'orang') {
        //     hasil = 'KALAH!';
    
        // } else {
        //     hasil = 'MENANG!';
        // }
        hasil = (comp == 'orang') ? 'KALAH!' : 'MENANG!';

    } else {
        alert('LU SALAH ANJENG!');
    }

    // tampilkan hasil
    alert('Kamu memilih ' + player + ' dan Komputer memilih ' + comp + '\n  maka hasilnya Kamu ' + hasil);

    tanya = confirm('Main lagi?');
}

alert('Terima kasih sudah bermain');