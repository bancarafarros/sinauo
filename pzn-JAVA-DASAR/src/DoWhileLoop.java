public class DoWhileLoop {
    public static void main(String[] args) {
        // do while loop adalah perulangan yang mirip dengan while loop
        // bedanya di pengecekan kondisi
        // do while loop mengecek kondisi di akhir setelah perulangan dilakukan sekali,
        // --while loop mengecek kkondisi di awal
        // do while loop melakukan perulangan sekali walaupun kondisi tidak terpenuhi
        var counter = 100;

        // blok do dilakukan perulangan sebanyak satu kali untuk mengecek kondisi
        do {
            System.out.println("Perulangan " + counter); // output perulangan yang akan dijalankan
            counter++; // post statement
        } while (counter <= 10); // kondisi perulangan

        // contoh implementasi do while, menampilkan menu program sebanyak satu kali
        // jika user pilih next makan akan ditampilkan yg lain
        // jika tidak maka langsung ditutup
    }
}
