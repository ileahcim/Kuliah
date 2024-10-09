package praktikum.sesi1;

import java.util.Scanner;

public class Kalkulator {

    public static void main(String[] args) {
        
        Scanner input = new Scanner(System.in);

        System.out.println("    Nama: Ananda Michael Dani Saputra");
        System.out.println("    NIM: 20230801148");
        
        float bilanganPertama, bilanganKedua, hasil;
        int pilihan;
        
        do {
            System.out.println("=============================");
            System.out.println("  Menu:");
            System.out.println("     1. Penjumlahan (+)");
            System.out.println("     2. Pengurangan (-)");
            System.out.println("     3. Perkalian (*)");
            System.out.println("     4. Pembagian (/)");
            System.out.println("     5. Keluar dari program");
            System.out.println("=============================");
            System.out.print(" Pilih no yang anda inginkan: ");
            pilihan = input.nextInt();

            if (pilihan == 5) {
                System.out.println(" --------------------------------------------------");
                System.out.println("Terima kasih sudah menggunakan kalkulator sederhana!");
                System.out.println(" --------------------------------------------------");
                break;
            }

            System.out.print("Masukkan bilangan pertama: ");
            bilanganPertama = input.nextFloat();
            System.out.print("Masukkan bilangan kedua  : ");
            bilanganKedua = input.nextFloat();

            switch (pilihan) {
                case 1:
                    hasil = bilanganPertama + bilanganKedua;
                    System.out.printf("Hasil penjumlahan: %.2f\n", hasil);
                    break;
                case 2:
                    hasil = bilanganPertama - bilanganKedua;
                    System.out.printf("Hasil pengurangan: %.2f\n", hasil);
                    break;
                case 3:
                    hasil = bilanganPertama * bilanganKedua;
                    System.out.printf("Hasil perkalian: %.2f\n", hasil);
                    break;
                case 4:
                    if (bilanganKedua != 0) {
                        hasil = bilanganPertama / bilanganKedua;
                        System.out.printf("Hasil pembagian: %.2f\n", hasil);
                    } else {
                        System.out.println("Pembagian oleh nol tidak diperbolehkan.");
                    }
                    break;
                default:
                    System.out.println("Operasi tidak valid. Silakan pilih opsi yang valid.");
                    break;
            }

            System.out.println();
        } while (true);

        input.close();
    }
    
}
