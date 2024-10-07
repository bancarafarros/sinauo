public class WhileLoop {
    public static void main(String[] args) {
        // while loop, versi perulangan yang lebih sederhana dibanding for loop
        // while loop tidak memiliki init dan post statement, hanya ada kondisi
        // perulangan
        var counter = 1;

        while (counter <= 10) { // kondisi perulangan
            System.out.println("Perulangan " + counter); // perintah yang akan dieksekusi
            counter++; // post staement untuk menghentikan perulangan
        }

        // 8, cek kondisi
        // 9, perintah dieksekusi
        // 10, nilai counter ditambah
        // 8, cek kondisi
    }
}
