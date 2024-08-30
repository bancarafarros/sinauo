public class KonversiNumber {
    public static void main(String[] args) {
        // konversi tipe data number
        // widening casting (otomatis): byte -> short -> int -> long -> float -> double
        // narrowing casting (manual): double->float->long->int->char->short->byte

        // widening casting
        byte iniByte = 10;
        short iniShort = iniByte;
        int iniInt = iniShort;
        int iniIntDua = iniByte; // bisa langsung skip dari byte ke int

        // nwrrowing casting
        // byte iniByteDua = iniInt; // gk bisa, harus konversi manual
        int iniIntNarrow = 1000;
        byte iniByteNarrow = (byte) iniIntNarrow; // hati-hati ketika narrow casting atau konversi naik, bisa terkena
                                                  // number overflow
    }
}