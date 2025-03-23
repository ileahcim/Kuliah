package praktikum.sesi13.Latihan;

import java.util.HashSet;
import java.util.Set;

public class Latihan1 {
    public static void main(String[] args) {
        // Deklarasi himpunan A dan B
        Set<Integer> A = new HashSet<>();
        Set<Integer> B = new HashSet<>();

        // Menambahkan elemen ke dalam himpunan A
        A.add(1);
        A.add(2);
        A.add(3);
        A.add(4);
        A.add(5);

        // Menambahkan elemen ke dalam himpunan B
        B.add(5);
        B.add(6);
        B.add(7);
        B.add(8);
        B.add(9);
        B.add(10);

        // Operasi himpunan
        // A - B (selisih A dengan B)
        Set<Integer> difference = new HashSet<>(A);
        difference.removeAll(B);
        System.out.println("A - B: " + difference);

        // A ∩ B (irisan A dan B)
        Set<Integer> intersection = new HashSet<>(A);
        intersection.retainAll(B);
        System.out.println("A ∩ B: " + intersection);

        // A U B (gabungan A dan B)
        Set<Integer> union = new HashSet<>(A);
        union.addAll(B);
        System.out.println("A U B: " + union);

        // A ⊂ B (A himpunan bagian dari B)
        boolean isSubset = B.containsAll(A);
        System.out.println("A ⊂ B: " + isSubset);
    }
}