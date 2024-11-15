package praktikum.sesi4;

import java.util.Scanner;

public class DiskonPembelian {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);

        // Deklarasi variabel dengan tipe data yang digunakan
        double totalPembelian; // Tipe data: double
        double diskon = 0;     // Tipe data: double
        char kategori;         // Tipe data: char
        boolean valid = true;  // Tipe data: boolean

        // Input total pembelian
        System.out.print("Masukkan total pembelian: ");
        totalPembelian = input.nextDouble(); // Menggunakan tipe data double

        // Input kategori pelanggan
        System.out.print("Masukkan kategori pelanggan (A, B, C): ");
        kategori = input.next().charAt(0);   // Menggunakan tipe data char

        // Menggunakan switch-case
        switch (kategori) {
            case 'A':
            case 'a':
                diskon = 0.10;
                break;
            case 'B':
            case 'b':
                diskon = 0.05;
                break;
            case 'C':
            case 'c':
                diskon = 0.02; 
                break;
            default:
                valid = false;
                System.out.println("Kategori tidak valid!");
                break;
        }

        // if-else
        if (valid) {
            double totalDiskon = totalPembelian * diskon;  
            double hargaSetelahDiskon = totalPembelian - totalDiskon; 

            // Output dengan for loop
            for (int i = 0; i < 30; i++) {
                System.out.print("-");
            }
            System.out.println();

            System.out.println("Total Pembelian: Rp " + totalPembelian);
            System.out.println("Diskon: " + (diskon * 100) + "%");
            System.out.println("Total setelah diskon: Rp " + hargaSetelahDiskon);

            // While loop
            char ulang;
            do {
                System.out.print("Apakah ingin menghitung lagi? (y/n): ");
                ulang = input.next().charAt(0);
                if (ulang == 'y' || ulang == 'Y') {
                    main(args);
                }
            } while (ulang != 'n' && ulang != 'N');

        } else {
            System.out.println("Program berakhir.");
        }

        input.close();
    }
}

