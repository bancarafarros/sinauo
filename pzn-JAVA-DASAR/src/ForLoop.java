public class ForLoop {
    public static void main(String[] args) {
        // for, salah satu kata kunci yang bisa digunakan untuk perulangan
        // blok kode di dalam for akan selalu dieksekusi selama kondisi for terpenuhi

        // sintaks for
        // for (int i = 0; i < args.length; i++) {
        // blok perulangan
        // }
        // init statement (int i = 0) akan dieksekusi hanyak sekali di awal sebelum
        // perulangan
        // kondisi (i<args.length) akan dilakukan pengecekan dalam setaip perulangan, --
        // -- jika true makan perulangan akan dijalankan, dan sebaliknya
        // post statement (i++) akan dieksekusi setiap akhir perulangan
        // init statement (int i = 0), kondisi (i<args.length), dan poststatement(i++)--
        // -- tidak wajib diisi, jika dikosongkan maka perulangan akan selalu true dan
        // terus berjalan

        // perulangan tanpa henti
        // for (;;) {
        // System.out.println("infinitiy loop");
        // }

        // perulangan dengan kondisi
        var counter = 1;
        for (; counter <= 10;) {
            System.out.println("perulangan ke-" + counter);
            counter++;
        }
        // 26, counter dicek, memenuhi kondisi atau tidak
        // 27, jika memenuhi makan perintah dieksekusi
        // 28, nilai counter ditambah
        System.out.println(
                "============================================================================================");

        // perulangan dengan init statement
        for (counter = 1; counter <= 10;) {
            System.out.println("perulangan ke-" + counter);
            counter++;
        }
        // 38, counter dicek, memnuhi atau tidak
        // 39, jika memenuhi maka perintah akan dieksekusi
        // 40, nilai counter ditambah
        System.out.println(
                "============================================================================================");

        // perulangan dengan post statement
        for (counter = 1; counter <= 10; counter++) {
            System.out.println("perulangan ke-" + counter);
        }
        // 48, counter dicek, memnuhi atau tidak
        // 49, jika memenuhi makan perintah akan dieksekusi
        // 48, nilai counter ditambah oleh counter++
        System.out.println(
                "============================================================================================");

        // counter = 1 artinya counter <= 10
        // maka ditampilkan perulangan 1, sesuai nilai counter
        // nilai counter ditambah oleh counter++ di akhir perulangan
        // dicek lagi, counter = 2 artinya counter <= 10
        // maka ditampilkan perulangan 2
        // sampai akhirnya counter = 11 artinya counter >= 10
        // maka tidak baris tidak dieksekusi karena kondisi counter <= 10 tidak
        // terpenuhi
    }
}
