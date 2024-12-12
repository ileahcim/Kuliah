package praktikum.sesi9;

public class Main {
    public static void main(String[] args) {
        // Membuat objek untuk setiap subclass
        Pegawai Pegawai = new Pegawai();
        Manager Manager = new Manager();
        Kasir Kasir = new Kasir();
        Koki Koki = new Koki();
        Pelayan Pelayan = new Pelayan();
        Satpam Satpam = new Satpam();

        // Mengisi data untuk setiap objek
        Manager.nama = "Sifa";
        Manager.id_pegawai = 1;
        Manager.gaji = "Rp. 10.000.000";

        Kasir.nama = "Aldi";
        Kasir.id_pegawai = 2;
        Kasir.gaji = "Rp. 5.000.000";

        Koki.nama = "Rizky";
        Koki.id_pegawai = 3;
        Koki.gaji = "Rp. 7.000.000";

        Pelayan.nama = "Rizal";
        Pelayan.id_pegawai = 4;
        Pelayan.gaji = "Rp. 6.000.000";

        Satpam.nama = "Iqbal";
        Satpam.id_pegawai = 5;
        Satpam.gaji = "Rp. 4.000.000";

        // Memanggil metode untuk setiap objek
        Pegawai.menampilkan();

        Manager.menampilkan();
        Manager.tugas();

        Kasir.menampilkan();
        Kasir.tugas();

        Koki.menampilkan();
        Koki.tugas();

        Pelayan.menampilkan();
        Pelayan.tugas();

        Satpam.menampilkan();
        Satpam.tugas();
    }
}