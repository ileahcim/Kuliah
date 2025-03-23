package praktikum.sesi13;
 
import java.util.HashSet;

public class HashSetExample {
    public static void main(String[] args) {
        HashSet<String> cities = new HashSet<>();

        // Menambahkan elemen ke dalam HashSet
        cities.add("Jakarta");
        cities.add("Bandung");
        cities.add("Surabaya");
        cities.add("Jakarta"); // Duplikasi tidak akan ditambahkan

        // Menampilkan elemen
        System.out.println("Cities: " + cities);

        // Mengecek keberadaan elemen
        if (cities.contains("Bandung")) {
            System.out.println("Bandung is in the set.");
        }

        // Menghapus elemen
        cities.remove("Surabaya");
        System.out.println("After removing Surabaya: " + cities);
    }
}