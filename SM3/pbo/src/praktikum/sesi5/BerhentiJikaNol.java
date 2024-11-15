package praktikum.sesi5;
import java.util.Scanner;

public class BerhentiJikaNol {
    public static void main(String[] args) {
        // Membuat scanner untuk input pengguna
        Scanner input = new Scanner(System.in);
        int angka;

        // Loop akan terus berjalan sampai pengguna memasukkan angka 0
        do {
            // Meminta pengguna memasukkan angka
            System.out.print("Masukkan sebuah angka (0 untuk berhenti): ");
            angka = input.nextInt();

            // Menampilkan angka yang dimasukkan kecuali 0
            if (angka != 0) {
                System.out.println("Anda memasukkan: " + angka);
            }

        } while (angka != 0); // Jika angka = 0, loop akan berhenti

        System.out.println("Program berhenti karena Anda memasukkan angka 0.");
        // Menutup scanner
        input.close();
    }
}
