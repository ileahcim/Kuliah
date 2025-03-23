package praktikum.sesi12Quiz;

// Kelas Dosen
class Dosen {
    // Atribut
    private String nik;
    private String nama;

    // Konstruktor
    public Dosen(String nik, String nama) {
        this.nik = nik;
        this.nama = nama;
    }

    // Getter untuk nama
    public String getNama() {
        return nama;
    }

    // Method view untuk menampilkan informasi Dosen
    public void view() {
        System.out.println("NIK       : " + nik);
        System.out.println("Nama      : " + nama);
    }
}

// Kelas Rektor (turunan dari Dosen)
class Rektor extends Dosen {
    // Atribut tambahan
    private int tahunMasuk;

    // Konstruktor
    public Rektor(String nik, String nama, int tahunMasuk) {
        super(nik, nama); // Memanggil konstruktor superclass (Dosen)
        this.tahunMasuk = tahunMasuk;
    }

    // Getter untuk tahun masuk
    public int getTahunMasuk() {
        return tahunMasuk;
    }

    // Override method view untuk menampilkan informasi Rektor
    @Override
    public void view() {
        super.view(); // Memanggil method view dari superclass
        System.out.println("Tahun Masuk : " + tahunMasuk);
    }
}

// Kelas Dekan (turunan dari Dosen)
class Dekan extends Dosen {
    // Atribut tambahan
    private String fakultas;

    // Konstruktor
    public Dekan(String nik, String nama, String fakultas) {
        super(nik, nama); // Memanggil konstruktor superclass (Dosen)
        this.fakultas = fakultas;
    }

    // Getter untuk fakultas
    public String getFakultas() {
        return fakultas;
    }

    // Override method view untuk menampilkan informasi Dekan
    @Override
    public void view() {
        super.view(); // Memanggil method view dari superclass
        System.out.println("Fakultas : " + fakultas);
    }
}

// Kelas Main untuk menjalankan program
public class MainDosen {
    public static void main(String[] args) {
        // Membuat objek Dosen
        Dosen dosen1 = new Dosen("0123456", "Doni");
        System.out.println("Data Dosen:");
        dosen1.view();
        System.out.println();

        // Membuat objek Rektor
        Rektor rektor1 = new Rektor("78910", "Michael", 2005);
        System.out.println("Data Rektor:");
        rektor1.view();
        System.out.println();

        // Membuat objek Dekan
        Dekan dekan1 = new Dekan("111213", "Fransiskus", "Farmasi");
        System.out.println("Data Dekan:");
        dekan1.view();
    }
}