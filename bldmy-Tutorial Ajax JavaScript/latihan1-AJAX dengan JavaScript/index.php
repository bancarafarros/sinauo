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
            const ajax = new XMLHttpRequest();

            ajax.open('GET', 'src/data.json', true);
            ajax.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    // console.log('ajax berhasil dilakukan');
                    // console.log(this.responseText);
                    let data = JSON.parse(this.responseText);

                    document.getElementById('result').textContent = data.name;
                }
            }
            ajax.send();
        }

        // menjalankan function secara otomatis
        load_ajax();
    </script>
</body>

</html>