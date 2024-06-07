// memastiakn seluruh halaman html sudah siap
$(document).ready(function () {
  $("#tombol-cari").hide(); // menyembunyikan tombol cari

  // event ketika user melakukan pemcarian
  $("#keyword").on("keyup", function () {
    $(".loader").show(); // menampilkan icon loader

    // membuat permintaan HTTP GET ke url tertera dengan load() untuk ditampilkan di id container
    // load() mengambil data dari URL yang diberikan dan langsung memasukkan ke elemen yang dipilih
    // $("#container").load("ajax/mahasiswa.php?keyword=" + $("#keyword").val());

    // membuat permintaan HTTP GET ke url tertera
    // get() mengambil data dari URL dan memnaggil fungsi callback dengan data yang diterima sebagai argumen (untuk diolah)
    $.get("ajax/mahasiswa.php?keyword=" + $("#keyword").val(), function (data) {
      $("#container").html(data); // menampilkan data yang diterima di id container
      $(".loader").hide(); // menyembunyikan loader.gif
    });
  });
});
