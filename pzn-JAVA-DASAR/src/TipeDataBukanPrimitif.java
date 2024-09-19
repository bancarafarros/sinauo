public class TipeDataBukanPrimitif {
    public static void main(String[] args) {
        // Tipe Data Bukan Primitif
        // tipe data primitif adalah tipe data bawaan di dalam bahasa pemrograman. tipe
        // -- data ini tidak bisa diubah lagi dan memiliki default value (number, char,
        // dan boolean)
        // tipe data bukan primitif tidak memiliki default value dan bisa memiliki
        // method (String)
        // di java, semua tipe data primitif memiliki representasi tipe data bukan
        // primitifnya
        // di java, tipe data bukan primitif ditulis dengan awalan huruf kapital

        Integer iniInteger = 100;
        Long iniLong = 10000L;
        Byte iniByte;
        // System.out.println(iniByte); // error karena default valunya null
        Byte iniByteDua = null; //

        System.out.println(iniInteger);
        System.out.println(iniLong);
        System.out.println(iniByteDua); // tidak error karena sudah diberi value null

        System.out.println(
                "====================================================================================================================");

        int age = 11;
        Integer ageObject = age; // konversi dari tipe data bukan primitif ke tipe data bukan primitif

        int agePrimitive = ageObject; // konversi dari tipe data bukan primitif ke tipe data primitif

        int iniInt = 100;
        Integer iniObject = iniInt;

        short iniShort = iniObject.shortValue();
        float iniFloat = iniObject.floatValue();
    }
}
