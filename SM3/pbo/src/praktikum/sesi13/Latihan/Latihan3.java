package praktikum.sesi13.Latihan;

import java.util.*;

class Mahasiswa implements Comparable<Mahasiswa> {
    private String nrp;
    private String nama;

    public Mahasiswa(String nrp, String nama) {
        this.nrp = nrp;
        this.nama = nama;
    }

    public String getNrp() {
        return nrp;
    }

    public String getNama() {
        return nama;
    }

    @Override
    public int compareTo(Mahasiswa other) {
        return this.nama.compareTo(other.nama);
    }

    @Override
    public String toString() {
        return "Mahasiswa{nrp='" + nrp + "', nama='" + nama + "'}";
    }
}

public class Latihan3 {
    public static void main(String[] args) {
        // Membuat list dari objek Mahasiswa
        List<Mahasiswa> mahasiswaList = new ArrayList<>();

        mahasiswaList.add(new Mahasiswa("123", "Budi"));
        mahasiswaList.add(new Mahasiswa("456", "Andi"));
        mahasiswaList.add(new Mahasiswa("789", "Citra"));
        mahasiswaList.add(new Mahasiswa("012", "Dewi"));

        System.out.println("Original List:");
        mahasiswaList.forEach(System.out::println);

        Collections.reverse(mahasiswaList);
        System.out.println("\nReversed List:");
        mahasiswaList.forEach(System.out::println);

        Collections.shuffle(mahasiswaList);
        System.out.println("\nShuffled List:");
        mahasiswaList.forEach(System.out::println);

        Collections.sort(mahasiswaList);
        System.out.println("\nSorted List:");
        mahasiswaList.forEach(System.out::println);
    }
}