package praktikum.sesi10;

 
interface Mobil { 
    void berjalan(); 
} 
 
interface Helikopter { 
    void terbang(); 
} 
 
class Mobikopter implements Mobil, Helikopter { 
    private String nama; 
 
    // Konstruktor 
    public Mobikopter(String nama) { 
        this.nama = nama; 
    } 
 
    // Implementasi metode dari interface Mobil 
    @Override 
    public void berjalan() { 
        System.out.println(nama + " sedang berjalan"); 
    } 
 
    // Implementasi metode dari interface Helikopter 
    @Override 
    public void terbang() { 
        System.out.println(nama + " sedang terbang"); 
    } 
} 
 
public class MobikopterTester { 
    public static void main(String[] args) { 
        // Membuat objek Mobikopter 
        Mobikopter m = new Mobikopter("Moko"); 
 
        // Memanggil metode berjalan dan terbang 
        m.berjalan(); 
        m.terbang(); 
    } 
} 