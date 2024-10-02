public class IfStatement {
    public static void main(String[] args) {
        // DI Java, if adalah salah satu kata kunci yang digunakan untuk percabangan
        // percabangan artinya kita bisa ekseksui kode program tertentu ketika suatu
        // kondisi terpenuhi
        // blok if akan dieksesuki ketika kondisi terpenuhi

        var nilai = 70;
        var absen = 90;

        var lulusAbsen = absen >= 75;
        var lulusNilai = absen >= 75;

        var lulus = lulusAbsen && lulusNilai;

        if (nilai >= 75 && absen >= 75) { // kondisi diatur untuk menjalankan perintah ketika nilai true
            System.out.println("Selamat, anda lulus"); // jika nilai true makan bari ini akan dieksekusi
        }
        System.out.println("======================================================================================");

        // else statement
        // kadang kita ingin melakukan ekseskui program lain jika kondisi if bernilai
        // false
        // hal ini bisa dilakukan dengan else expression
        if (nilai >= 75 && absen >= 75) { // kondisi diatur untuk menjalankan perintah ketika nilai true
            System.out.println("Selamat, anda lulus"); // jika nilai true makan baris ini akan dieksekusi
        } else {
            System.out.println("Maaf, anda belum lulus, silakan coba lagi tahun depan"); // baris akan dieksekusi ketika
                                                                                         // kondisi if tidak terpenuhi
        }
        System.out.println("======================================================================================");

        // else if statement
        // digunakan ketika banyak kondisi
        if (nilai >= 80 && absen >= 80) { // kondisi diatur untuk menjalankan perintah ketika nilai true
            System.out.println("Nilai Anda A"); // jika nilai true makan baris ini akan dieksekusi
        } else if (nilai >= 70 && absen >= 70) {
            System.out.println("Nilai Anda B");
        } else if (nilai >= 60 && absen >= 60) {
            System.out.println("Nilai Anda C");
        } else if (nilai >= 50 && absen >= 50) {
            System.out.println("Nilai Anda D");
        } else {
            System.out.println("Nilai Anda E"); // dijalankan ketika semua kondisi di atasnya tidak ada yang terpenuhi
                                                // sama sekali
        }

    }
}
