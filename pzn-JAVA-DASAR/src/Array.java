public class Array {
        public static void main(String[] args) {
                String[] arrayString; // deklarasi array
                arrayString = new String[3]; // inisiasi array, panjang arraynya 3
                arrayString[0] = "Charr";
                arrayString[1] = "Gonn";
                arrayString[2] = "Oss";

                String[] arrayString2 = new String[3]; // alternatif deklarasi array

                // menampilkan isi array
                System.out.println(arrayString[0]);
                System.out.println(arrayString[1]);
                System.out.println(arrayString[2]);

                // mengubah isi array
                arrayString[2] = "Xanny";
                System.out.println(arrayString[2]);
                System.out.println(
                                "================================================================================================");

                // alternatif membuat array
                String[] nama = {
                                "Charr", "Gonn", "Oss"
                };

                int[] arrayInt = new int[] {
                                1, 2, 3, 4, 5, 6, 7, 8, 9, 0
                };

                long[] arrayLong = {
                                18L, 20L, 13L
                };

                System.out.println(arrayLong.length); // mengetahui panjang array

                // array di dalam array aka array asosiatof
                String[][] members = {
                                { "Alpha", "Panigoro" },
                                { "Bravo", "Supardi" },
                                { "Charlie", "Syahputra" }
                };
                System.out.println(members[0][1]); // Panigoro
                System.out.println(members[2][0]); // Panigoro
        }
}