package praktikum.sesi6;

public class MieAyam {
    private String nama;
    private String ukuran;
    private String tingkatPedas;
    private double harga;
    private int stok;

    public MieAyam(String nama, String ukuran, String tingkatPedas, double harga, int stok) {
        this.nama = nama;
        this.ukuran = ukuran;
        this.tingkatPedas = tingkatPedas;
        this.harga = harga;
        this.stok = stok;
    }

    public void tampilkanDetail() {
        System.out.println("Nama: " + nama);
        System.out.println("Ukuran: " + ukuran);
        System.out.println("Tingkat Pedas: " + tingkatPedas);
        System.out.println("Harga: " + harga);
        System.out.println("Stok: " + stok);
    }

    public double hitungNilaiStok() {
        return harga * stok;
    }

    public void kurangiStok(int jumlah) {
        if (jumlah <= stok) {
            stok -= jumlah;
            System.out.println("Stok setelah pengurangan: " + stok);
        } else {
            System.out.println("Stok tidak cukup untuk mengurangi " + jumlah);
        }
    }

    public void tambahStok(int jumlah) {
        stok += jumlah;
        System.out.println("Stok setelah penambahan: " + stok);
    }

    public static void main(String[] args) {
        MieAyam mieAyam1 = new MieAyam("Mie Ayam Ciptarasa", "Besar", "Sedang", 25000, 50);
        mieAyam1.tampilkanDetail();
        double totalNilaiStok = mieAyam1.hitungNilaiStok();
        System.out.println("Total Nilai Stok: " + totalNilaiStok);
        mieAyam1.kurangiStok(5);
        mieAyam1.kurangiStok(60);
        mieAyam1.tambahStok(10);
    }
}
