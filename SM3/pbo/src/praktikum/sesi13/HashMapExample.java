package praktikum.sesi13;

import java.util.HashMap;

public class HashMapExample {
    public static void main(String[] args) {    
        HashMap<Integer, String> students = new HashMap<>();

        // Menambahkan pasangan key-value
        students.put(1, "Alice");
        students.put(2, "Bob");
        students.put(3, "Charlie");

        // Menampilkan semua pasangan key-value
        System.out.println("Students: " + students);

        // Mengakses nilai berdasarkan key
        String student = students.get(2);
        System.out.println("Student with ID 2: " + student);

        // Menghapus pasangan key-value
        students.remove(3);
        System.out.println("After removing student with ID 3: " + students);
    }
}