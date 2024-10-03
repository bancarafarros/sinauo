public class TernaryOperator {
    public static void main(String[] args) {
        // ternary operator adalah bersi sederhana dari if statement
        // terdidi dari kondisi yang dievaluasi, jika menghasilkan true maka nilai
        // pertama yang akan diambil, jika flase maka nilai kedua yang diambil

        // if else
        var nilai = 75;
        String ucapan;

        if (nilai >= 75) {
            ucapan = "Selamat ea";
        } else {
            ucapan = "Maaf ea";
        }
        System.out.println(ucapan);
        System.out.println(
                "=============================================================================================");

        // ternary operator
        var nilaiAkhir = 80;
        String keterangan = nilaiAkhir >= 75 ? "Selamat ea" : "Maaf ea";
        // "selamat ea" jika kondisi terpenuhi
        // "maaf ea jika kondisi tidak terpenuhi"
        System.out.println(keterangan);
    }
}
