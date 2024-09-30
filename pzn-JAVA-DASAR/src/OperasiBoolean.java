public class OperasiBoolean {
    public static void main(String[] args) {
        // &&, ||, !

        // && AND
        // 1 && 1 = 1
        // 1 && 0 = 0
        // 0 && 0 = 0

        // || OR
        // 1 || 1 = 1
        // 1 || 0 = 1
        // 0 || 0 = 0

        // ! NOT
        // !1 = 0
        // !0 = 1

        var absen = 80;
        var nilaiAKhir = 80;

        boolean lulusAbsen = absen >= 75;
        boolean lulusNilaiAKhir = absen >= 75;

        var lulus = lulusAbsen && lulusNilaiAKhir;
        System.out.println(lulus);
    }
}
