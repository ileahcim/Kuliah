package praktikum.sesi8.BangunDatar;

import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        // Persegi
        Persegi persegi = new Persegi();
        System.out.print("Masukkan sisi persegi: ");
        persegi.sisi = scanner.nextFloat();
        System.out.println("Luas Persegi: " + persegi.luas());
        System.out.println("Keliling Persegi: " + persegi.keliling());

        // Lingkaran
        Lingkaran lingkaran = new Lingkaran();
        System.out.print("\nMasukkan jari-jari lingkaran: ");
        lingkaran.r = scanner.nextFloat();
        System.out.println("Luas Lingkaran: " + lingkaran.luas());
        System.out.println("Keliling Lingkaran: " + lingkaran.keliling());

        // Persegi Panjang
        PersegiPanjang persegiPanjang = new PersegiPanjang();
        System.out.print("\nMasukkan panjang persegi panjang: ");
        persegiPanjang.panjang = scanner.nextFloat();
        System.out.print("Masukkan lebar persegi panjang: ");
        persegiPanjang.lebar = scanner.nextFloat();
        System.out.println("Luas Persegi Panjang: " + persegiPanjang.luas());
        System.out.println("Keliling Persegi Panjang: " + persegiPanjang.keliling());

        // Segitiga
        Segitiga segitiga = new Segitiga();
        System.out.print("\nMasukkan alas segitiga: ");
        segitiga.alas = scanner.nextFloat();
        System.out.print("Masukkan tinggi segitiga: ");
        segitiga.tinggi = scanner.nextFloat();
        System.out.println("Luas Segitiga: " + segitiga.luas());
        System.out.println("Keliling Segitiga (sama sisi): " + segitiga.keliling());

        scanner.close();
    }
}
