<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Native</title>
    <style>
        body {
            margin: 5%;
            font-family: sans-serif;
            border: 0;
        }
    </style>
</head>

<body>
    <h3>Latihan 1</h3>

    <li>Nama: <strong id="result"></strong></li>

    <script>
        function load_ajax() {
            const ajax = new XMLHttpRequest(); // buat object ajax dari class XMLHttpRequest()

            ajax.open('GET', 'src/data.json', true); // inisialisasi permintaan dengan metode GET ke src/data.json dengan true untuk asynchronous

            // cek kesiapan ajax
            ajax.onreadystatechange = function() { // define fungsi yang akan dipanggil setiap property readyState berubah
                if (this.readyState === 4 && this.status === 200) { // 4 jika state siap dan 200 jika status ok
                    console.log('ajax berhasil dilakukan');
                    console.log(this.responseText);
                    // buat variabel data
                    let data = JSON.parse(this.responseText); // JSON.parse mengubah this.responseText dari JSON menjadi object JS

                    document.getElementById('result').textContent = data.name; // mengambil elemen HTML dengan id result . mengatur teksnya (textContent) menjadi nilai property name dari data yang diterima dari server
                }
            }
            ajax.send(); // mengirim HTTP request
        }

        load_ajax(); // menjalankan/memanggil function load_ajax()
    </script>
</body>

</html>