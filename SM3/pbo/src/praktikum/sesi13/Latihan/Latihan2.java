package praktikum.sesi13.Latihan;

import java.util.*;

public class Latihan2 {
    public static void main(String[] args) {
        // Membuat List dengan data bertipe String
        List<String> list = new ArrayList<>();
        list.add("Apple");
        list.add("Banana");
        list.add("Cherry");
        list.add("Date");
        list.add("Elderberry");

        // 1. Menampilkan data yang terdapat pada list
        System.out.println("Data dalam List: " + list);

        // 2. Membalikkan data dalam list
        Collections.reverse(list);
        System.out.println("Data setelah dibalik: " + list);

        // 3. Mengacak data dalam list
        Collections.shuffle(list);
        System.out.println("Data setelah diacak: " + list);

        // 4. Mengurutkan data dalam list
        Collections.sort(list);
        System.out.println("Data setelah diurutkan: " + list);
    }
}