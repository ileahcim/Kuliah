package praktikum.sesi5;
public class JumlahBilanganGenap {
    public static void main(String[] args) {
        int jumlahGenap = 0; // Variabel untuk menyimpan jumlah bilangan genap

        // Menggunakan perulangan for untuk mencari bilangan genap dari 1 hingga 100
        for (int i = 1; i <= 100; i++) {
            if (i % 2 == 0) { // Mengecek apakah bilangan genap
                jumlahGenap += i; // Menambahkan bilangan genap ke variabel jumlahGenap
            }
        }

        // Menampilkan hasil jumlah bilangan genap
        System.out.println("Jumlah bilangan genap antara 1 hingga 100 adalah: " + jumlahGenap);
    }
}
