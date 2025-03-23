package praktikum.sesi12Quiz;

// Abstract class Pegawai
abstract class Pegawai {
    protected String nama;
    protected double gaji;

    public Pegawai(String nama, double gaji) {
        this.nama = nama;
        this.gaji = gaji;
    }

    public void infoPegawai() {
        System.out.println("Nama: " + nama);
        System.out.println("Gaji: " + gaji);
    }

    public abstract double hitungBonus();
}

// Interface Tunjangan
interface Tunjangan {
    double tunjanganMakan();
    double tunjanganTransport();
}

// Subclass Manager
class Manager extends Pegawai implements Tunjangan {
    private String departemen;

    public Manager(String nama, double gaji, String departemen) {
        super(nama, gaji);
        this.departemen = departemen;
    }

    @Override
    public double hitungBonus() {
        return gaji * 0.1;
    }

    @Override
    public double tunjanganMakan() {
        return 500000;
    }

    @Override
    public double tunjanganTransport() {
        return 300000;
    }

    public void infoManager() {
        infoPegawai();
        System.out.println("Departemen: " + departemen);
        System.out.println("Bonus: " + hitungBonus());
        System.out.println("Tunjangan Makan: " + tunjanganMakan());
        System.out.println("Tunjangan Transport: " + tunjanganTransport());
    }
}

// Main Class
public class MainPegawai {
    public static void main(String[] args) {
        Manager manager = new Manager("Budi", 10000000, "IT");
        manager.infoManager();
    }
}
