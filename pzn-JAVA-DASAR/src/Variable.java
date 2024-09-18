public class Variable {
    public static void main(String[] args) {
        // variable adalah tempat menyimpan nilai atau data
        // Java adalah static type language, sehingga sebuah variable hanya bisa
        // digunakan untuk menyimpan tipe data yang sama. berbeda dengan js dan php
        // cara membuat variable di Java yaitu, tipeData namaVariable
        // nama variabke tidak boleh mengandung whitspace

        String name; // deklatrasi variable
        name = "charr"; // inisiasi value
        System.out.println(name);

        int age = 30; // deklarasi + inisiasi
        String adress = "Jkt";
        System.out.println(age);
        System.out.println(adress);

        name = "gonn"; // rewrite value variabel name
        System.out.println(name);

        System.out.println(
                "===============================================================================================================================");
        // jika menggunakan var tidak perlu menggunakan tipe data
        // jika menggunakan var harus langsung inisiasi value, tidak bisa jika hanya
        // deklarasi

        // var name; // error
        name = "charr";

        var firstName = "charr";
        var lastName = "jkt";
        System.out.println(firstName);
        System.out.println(lastName);

        System.out.println(
                "===============================================================================================================================");

        // bisa menggunakan final untuk membuat variable yang nilainya tidak bisa diubah
        final String application = "Belajar Java";
        // application = "Belajar PHP"; // error
    }
}
