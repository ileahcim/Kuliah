package praktikum.sesi12Quiz;

// Interface Transportasi
interface Transportasi {
    void tambah();
    void setData();
    int getId();
}

// Superclass Gojek
class Gojek implements Transportasi {
    private int harga;
    private int id;

    // Constructor
    public Gojek(int id, int harga) {
        this.id = id;
        this.harga = harga;
    }

    // Implementasi metode dari interface Transportasi
    @Override
    public void tambah() {
        System.out.println("Menambahkan data Gojek.");
    }

    @Override
    public void setData() {
        System.out.println("Mengatur data Gojek.");
    }

    @Override
    public int getId() {
        return id;
    }

    // Setter dan Getter untuk atribut harga
    public void setHarga(int harga) {
        this.harga = harga;
    }

    public int getHarga() {
        return harga;
    }
}

// Subclass Bayar
class Bayar extends Gojek {
    private int jarak;
    private int total;
    private String nama;

    // Constructor
    public Bayar(int id, int harga, int jarak, String nama) {
        super(id, harga); // Memanggil constructor superclass
        this.jarak = jarak;
        this.nama = nama;
    }

    // Implementasi metode tambahan
    public void bayar(int total) {
        this.total = total;
        System.out.println("Pembayaran sebesar: " + total);
    }

    @Override
    public void tambah() {
        super.tambah(); // Memanggil method tambah dari superclass
        System.out.println("Menambahkan data pembayaran.");
    }

    @Override
    public void setData() {
        super.setData(); // Memanggil method setData dari superclass
        System.out.println("Mengatur data pembayaran.");
    }

    // Method untuk mendapatkan informasi pembayaran
    public void infoPembayaran() {
        System.out.println("Nama: " + nama);
        System.out.println("Jarak: " + jarak + " km");
        System.out.println("Total Bayar: " + total);
        System.out.println("Harga per km: " + getHarga());
        System.out.println("ID Transaksi: " + getId());
    }
}

// Main Class untuk Testing
public class GojekMain {
    public static void main(String[] args) {
        Bayar transaksi = new Bayar(1, 5000, 10, "Budi");

        // Menggunakan metode
        transaksi.setData();
        transaksi.tambah();
        transaksi.bayar(50000);

        // Menampilkan informasi pembayaran
        transaksi.infoPembayaran();
    }
}
