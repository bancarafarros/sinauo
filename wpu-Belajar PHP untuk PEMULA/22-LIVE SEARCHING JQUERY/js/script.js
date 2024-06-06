// mengambil elemen uang digunakan dengan id
var keyword = document.getElementById("keyword");
var tombolCari = document.getElementById("tombol-cari");
var container = document.getElementById("container");

keyword.addEventListener("keyup", function () { // ketika selesai mengetik (keyup) di input "keyword"
  var xhr = new XMLHttpRequest(); //   buat object ajax

  xhr.onreadystatechange = function () { // cek kesiapan ajax
    if (xhr.readyState == 4 && xhr.status == 200) { // 4 jika state siap 200 jika status ok
      container.innerHTML = xhr.responseText; //  isi dari elemen container akan dimanipulasi dengan hasil dari xhr.responseText yang mengambil isi mahasiswa.php
    }
  };

  // eksekusi ajax
  // menyiapkan permintaan dengan metode GET untuk mengambil data di url tersebut secara asynchronous (true)
  xhr.open("GET", "ajax/mahasiswa.php?keyword=" + keyword.value, "true");
  xhr.send(); // mengirim permintaan di atas ke server
});
