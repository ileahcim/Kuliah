package praktikum.sesi12Quiz;

// Superclass Kendaraan
class Kendaraan {
    protected String merk;
    protected int tahun;

    public Kendaraan(String merk, int tahun) {
        this.merk = merk;
        this.tahun = tahun;
    }

    public void infoKendaraan() {
        System.out.println("Merk: " + merk);
        System.out.println("Tahun: " + tahun);
    }
}

// Subclass Mobil
class Mobil extends Kendaraan {
    private String jenisBahanBakar;

    public Mobil(String merk, int tahun, String jenisBahanBakar) {
        super(merk, tahun);
        this.jenisBahanBakar = jenisBahanBakar;
    }

    public void infoMobil() {
        infoKendaraan();
        System.out.println("Jenis Bahan Bakar: " + jenisBahanBakar);
    }
}

// Main Class
public class MainKendaraan {
    public static void main(String[] args) {
        Mobil mobil = new Mobil("Toyota", 2020, "Bensin");
        mobil.infoMobil();
    }
}
