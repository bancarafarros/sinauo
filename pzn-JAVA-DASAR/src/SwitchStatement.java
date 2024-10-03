public class SwitchStatement {
    public static void main(String[] args) {
        // switch adalah percabangan yang sama dengan if namun lebih sederhana karena
        // hanya untuk ==
        var nilai = 'F';

        switch (nilai) {
            case 'A': // kondisi yang harus terpenuhi
                System.out.println("Akreditasi A"); // perintah yang dieksekusi
                break; // buat berenti

            case 'B':
                System.out.println("Akreditasi B");
                break;

            case 'C':
                System.out.println("Akreditasi C");
                break;

            case 'D': // kondisinya bisa digabung
            case 'E':
                System.out.println("Tidak lulus akreditasi");
                break;
            default: // pengganti else
                System.out.println("Maaf, data tidak ditemukan");
                break;
        }
        System.out.println("==============================================================================");

        // switch lambda
        // muncul di java v14
        // lebih mempermudah karena tidak menggunakan "break"
        switch (nilai) {
            case 'A' -> System.out.println("Akreditasi A");
            case 'B' -> System.out.println("Akreditasi B");
            case 'C' -> System.out.println("Akreditasi C");
            case 'D', 'E' -> System.out.println("Tidak lulus akreditasi");
            default -> {System.out.println("Maaf, data tidak ditemukan")};
        }
        System.out.println("==============================================================================");

        // "yield"
        // digunakan untuk mengembalikan nilai pada switch statement
        // memudahkan ketika kita membuat data berdasarkan kondisi switch statement

        // yield + lambda
        var ucapan = switch (nilai) {
            case 'A': yield "Akreditasi A";
            case 'B': yield "Akreditasi B";
            case 'C': yield "Akreditasi C";
            case 'D', 'E': yield "Tidak lulus akreditasi";
            default: yield "Maaf, data tidak ditemukan";
        };
        System.out.println(ucapan);
    }
}
