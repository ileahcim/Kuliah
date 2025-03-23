package praktikum.sesi13;

import java.util.LinkedList;

public class LinkedListExample {
    public static void main(String[] args) {
        LinkedList<String> animals = new LinkedList<>();

        // Menambahkan elemen ke LinkedList
        animals.add("Cat");
        animals.add("Dog");
        animals.add("Elephant");

        // Menambahkan elemen di posisi tertentu
        animals.addFirst("Lion");
        animals.addLast("Tiger");

        // Menampilkan semua elemen
        System.out.println("Animals: " + animals);

        // Menghapus elemen pertama dan terakhir
        animals.removeFirst();
        animals.removeLast();
        System.out.println("After removing first and last elements: " + animals);
    }
}