package praktikum.sesi5;
import java.util.Scanner;

public class CekAngka {
    public static void main(String[] args) {
        // Membuat scanner untuk input pengguna
        Scanner input = new Scanner(System.in);

        // Meminta pengguna untuk memasukkan angka
        System.out.print("Masukkan sebuah angka: ");
        double angka = input.nextDouble();

        // Memeriksa apakah angka positif, negatif, atau nol
        if (angka > 0) {
            System.out.println("Angka tersebut adalah positif.");
        } else if (angka < 0) {
            System.out.println("Angka tersebut adalah negatif.");
        } else {
            System.out.println("Angka tersebut adalah nol.");
        }

        // Menutup scanner
        input.close();
    }
}
