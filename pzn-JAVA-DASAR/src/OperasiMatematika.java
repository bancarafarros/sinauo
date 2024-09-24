public class OperasiMatematika {
    public static void main(String[] args) {
        // operator matematika
        int a = 100;
        int b = 10;

        System.out.println(a + b);
        System.out.println(a - b);
        System.out.println(a * b);
        System.out.println(a / b);
        System.out.println(a % b);
        System.out.println(
                "==========================================================================================================");

        // augmented assignment
        // +=, -=, *=, /=, %=
        // a = a + 10 || a += 10
        int c = 100;
        System.out.println(c += 10);
        System.out.println(
                "==========================================================================================================");

        // unary operator, ditempatkan di depan variabel dan hanya butuh satu data saja
        // ++, --, +, -, !, !
        // ++, a = a + 1
        int d = 100;
        d++;
        System.out.println(d);
        d--;
        System.out.println(d);
    }
}
