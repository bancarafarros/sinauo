<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
function query($query)
{
    global $conn; // impor $conn

    $result = mysqli_query($conn, $query); // menjalankan query sql dari parameter $query di mysqli_query() dan menyimpan hasilnya di $result
    $rows = []; // deklarasi array kosong untuk nantinya diisi dengan hasil query

    // mysqli_fetch_assoc() mengambil satu baris hasil query dalam bentuk array asosiatif dan menyimpan ke $row
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row; // setiap baris tadi disimpan ke dalam array $rows[]
    }

    return $rows; // mengembalikan array asosiatif yang berisi data dari database
}

function tambahMahasiswa($data)
{
    global $conn;
    // var_dump($_POST);

    // ambil data dari tiap elemen dalam form
    // htmlspecialchars anti script
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // kalo $gambar ada isinya, run upload()
    // kalo $gambar kosong, return false;
    $gambar = upload();
    if (!$gambar) {
        return false; // bikin tambahMahasisa() jadi kurang dari 0 dan masuk kondisi else Data gagal ditambahkan
    }

    // query insert data
    // $query = "INSERT INTO mahasiswa values ('', '$nim', '$nama', '$email', '$jurusan', '$gambar')";
    $query = "INSERT INTO mahasiswa (nim, nama, email, jurusan, gambar) VALUES ('$nim', '$nama', '$email', '$jurusan', '$gambar')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function upload()
{
    // ngambil data dari array $_FILES
    // data yang diambil dipake buat validasi sebelum file diupload
    $namaFile = $_FILES['gambar']['name'];
    $sizeFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang diupload
    // kode 4 muncul kalo gk ada file yang diupload
    if ($error == 4) {
        echo "<script>alert('Pilih gambar dahulu')</script>";
        return false;
    }

    // validasi ekstensi file
    $ekstensiFileValid = ['jpg', 'jpeg', 'png']; // array yang diisi ekstensi gambar yang valid
    $ekstensiFile = explode('.', $namaFile); // pecah ekstensi gambar yang diupload ketika ketemu . sebagai delimiter atau pemisah jadi 2 elemen array
    $ekstensiFile = strtolower(end($ekstensiFile)); // strtolower() -> rubah nama file jadi huruf biasa. end() -> ambil array terakhir hasil dari explode()

    // validasi ekstensi gambar sesuai atau tidak
    if (!in_array($ekstensiFile, $ekstensiFileValid)) {
        echo "<script>alert('Yang Anda upload bukan gambar')</script>";
    }

    // validasi jika ukuran gambar terlalu besar
    if ($sizeFile > 100000000) {
        echo "<script>alert('Ukuran gambar terlalu besar')</script>";
        return false;
    }

    // gambar lolos validasi
    $namaFileBaru = uniqid(); // nama gambar diubah dengan hasil dari uniqid() untuk generate unique id
    $namaFileBaru .=  '.'; // ditambah . setelah nama gambar untuk ekstensi gambar
    $namaFileBaru .= $ekstensiFile; // ditambah ekstensi file dari validasi ekstensi

    // pindah gambar dari direktori $tmpName ke direktori img/
    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);
    return $namaFileBaru; // dikirim ke tambahMahasiswa();
}

function hapusMahasiswa($id)
{
    global $conn;

    // TODO: add delete foto di db + direktori
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function updateMahasiswa($data)
{
    global $conn;

    // TODO: add delete foto di direktori

    // ambil data dari tiap elemen dalam form
    // htmlspecialchars anti script
    $id = htmlspecialchars($data["id"]);
    $nim = htmlspecialchars($data["nim"]);
    $nama = htmlspecialchars($data["nama"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar baru atau gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {  // kalau tidak memilih gambar baru maka akan muncul kode 4 yang artinya gambar tidak ditemukan
        $gambar = $gambarLama; // $gambar diisi dengan $ gambarLama yang valuenya sudah ada di dalam database
    } else {
        $gambar = upload(); // jika memilih gambar baru makan $gambar akan run upload()
    }

    // query update data
    $query = "UPDATE mahasiswa SET
    nim = '$nim',
    nama = '$nama',
    email = '$email',
    jurusan = '$jurusan',
    gambar = '$gambar'
    WHERE id = $id
    ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


// cari data berdasarkan keyword
// data akan dicari di semua kolom bahkan tabel tergantung kebutuhan
function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE nama LIKE '%$keyword%' OR
    nim LIKE '%$keyword%' OR
    email LIKE '%$keyword%' OR
    jurusan LIKE '%$keyword%'";
    return query($query);
}

// function registrasi() dengan parameter $data yang berasal dari $_POST di halaman registrasi.php
function registrasi($data)
{
    global $conn; // menghubungkan ke database

    // memasukkan data dari $_POST atau $data ke dalam variabel terpisah
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $confirmPassword = mysqli_real_escape_string($conn, $data["confirmPassword"]);

    // validasi username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>alert('Username sudah ada, mohon gunakan username lain')</script>";
        return false;
    }

    // validasi password sama atau tidak dengan konfirmasi password
    if ($password !== $confirmPassword) {
        echo "<script>alert('Password belum sama');</script>";
        return false;
    }

    // enkripsi password
    $encryptPassword = password_hash($password, PASSWORD_DEFAULT);

    // query insert data
    $query = "INSERT INTO users (username, password) VALUES ('$username', '$encryptPassword')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
