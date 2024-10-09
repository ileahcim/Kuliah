package praktikum.sesi3;

public class Aritmatika {
    public static void main(String[] args) {
        //Sedikit angka
        int i = 37;
        int j = 42;
        double x = 27.475;
        double y = 7.22;
        
        System.out.println("Variable values...");
        System.out.println(" i = " + i);
        System.out.println(" j = " + j);
        System.out.println(" x = " + x);
        System.out.println(" y = " + y);

        //Penjumlahan angka
        System.out.println("Adding...");
        System.out.println(" i + j = " + (i + j));
        System.out.println(" x + y = " + (x + y));

        //Pengurangan angka
        System.out.println("Subtracting...");
        System.out.println(" i - j = " + (i - j));
        System.out.println(" x - y = " + (x - y));

        //Perkalian angka
        System.out.println("Multiplying...");
        System.out.println(" i * j = " + (i * j));
        System.out.println(" x * y = " + (x * y));

        //Pembagian angka
        System.out.println("Dividing...");
        System.out.println(" i / j = " + (i / j));
        System.out.println(" x / y = " + (x / y));

        //Menghitung hasil modulus dari pembagian
        System.out.println("Computing the remainder...");
        System.out.println(" i % j = " + (i % j));
        System.out.println(" x % y = " + (x % y));

        //Tipe penggabungan
        System.out.println("Mixing tipes...");
        System.out.println(" i + j = " + (j + y));
        System.out.println(" i * x = " + (i * x));
    }
}
