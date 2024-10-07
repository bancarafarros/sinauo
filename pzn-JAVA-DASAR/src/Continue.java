public class Continue {
    public static void main(String[] args) {
        // continue digunakan untuk menghentikan perulangan yang sedang berjalan dan
        // --line di bawahnya/step berikutnya
        // setelah continue dijalankan maka program akan berjalan ke perulangan awal
        // --atau program kembali ke awal
        var counter = 1;
        for (counter = 1; counter <= 10; counter++) {
            if (counter % 2 == 0) {
                continue; // ketika continue dijalankan, maka line 9 dan seterusnya tidak dijalankan
                // perulangan masuk ke line 4 (counter++)
            }
            System.out.println("Perulangan ganjil ke-" + counter);
        }

        // 8, nilai counter = 1 artinya memenuhi kondisi
        // 9, nilai counter setelah dicek tidak memenuhi
        // 10, continue dijalankan sehingga line 13 dst diskip, dan kembali ke line 8

        // 8, nilai counter = 2, artinya memenuhi kondisi
        // 9, nilai counter setelah dicek tdk memenuhi dan line 10 tdk dijalankan
        // 13, line 13 dijalankan karena continue di line 10 tidak dijalankan
    }
}