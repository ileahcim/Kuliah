package praktikum.sesi13;

import java.util.ArrayList;

public class ArrayListExample {
    public static void main(String[] args) {
        ArrayList<String> fruits = new ArrayList<>();

        // Menambahkan elemen ke dalam ArrayList
        fruits.add("Apple");
        fruits.add("Banana");
        fruits.add("Orange");

        // Menampilkan semua elemen
        System.out.println("Fruits: " + fruits);

        // Menghapus elemen
        fruits.remove("Banana");
        System.out.println("After removing Banana: " + fruits);

        // Menampilkan elemen menggunakan loop
        for (String fruit : fruits) {
            System.out.println("Fruit: " + fruit);
        }
    }
}