public class Block {
    public static void main(String[] args) {
        // expression adalah konstruksi dari variabel, operator, dan pemanggilan method
        // yang mengevaluasi menjadi sebuah single value
        // semua kode yang menghasilkan single value adalah expression
        // expression value adalah core component dari statement

        int value;
        value = 100;
        System.out.println(
                "==========================================================================================================");

        // statement, kalimat lengkap dalam bahasa
        // sebuah statement berisikan eksekusi komplit, biasanya diakhiri dengan ;
        // beberapa jenis statement, asignment expression, penggunaan ++ dan --, method
        // invocation, object creation express
        // bisa disebut kumpulan expression

        // assignment statement
        double aValue = 8933.234;

        // increment statement
        aValue++;

        // method invocation
        System.out.println("Hello World!");

        // object creation express
        // Date date = new Date();
        System.out.println(
                "==========================================================================================================");

        // block adalah kumpulan statement dan diawali dan diakhiri dengan {}
        // contohnya psvm
        System.out.println("Hello World 1");
        System.out.println("Hello World 2");
        System.out.println("Hello World 3");
        {
            System.out.println("Hello World 4");
            System.out.println("Hello World 5");
            System.out.println("Hello World 6");
            {
                System.out.println("Hello World 7");
                System.out.println("Hello World 8");
                System.out.println("Hello World 9");
            }
        }
    }
}
