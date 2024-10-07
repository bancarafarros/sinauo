public class Break {
    public static void main(String[] args) {
        // break digunakan untuk mengehntikan seluruh perulangan yang sedang berjalan
        var counter = 1;

        while (true) { // kondisi perulangan
            System.out.println("Perulangan " + counter); // perintah yang akan dieksekusi
            counter++; // post statement untuk menghentikan perulangan

            if (counter > 10) { // menampung break
                break; // menghentikan seluruh perulangan
                // setelah perulangan ke-9 akan dihentikan total
                // karena counter sudah bernilai 10 dan memenuhi kondisi if
            }
        }

        System.out.println("Perulangan dihentikan total oleh break di line 12");
        // 8, nilai counter = 1
        // 9, perintah dijalankan karena kondisi terpenuhi
        // 10, nilai counter ditambah, jadi 2
        // 12, nilai counter dicek di if
        // 13, jika kondisi terpenuhi maka break dijalankan

        // 8, nilai counter = 10
        // 9, perintah dijalankan karena kondisi terpenuhi
        // 10, nilai counter ditambah, jadi 11
        // 12, nilai counter dicek di if
        // nilai counter = 11, kondisi if counter > 10 terpenuhi
        // 13 kondisi terpenuhi dan break dijalankan
    }
}
