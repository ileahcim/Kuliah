package praktikum.sesi10;

package praktikum.sesi10.Interface; 
 
interface Bidang2D { 
    double getKeliling(); 
    double getLuas(); 
} 
 
class Lingkaran implements Bidang2D { 
    public double radius; 
 
    @Override 
    public double getKeliling() { 
        return 2 * Math.PI * radius; 
    } 
 
    @Override 
    public double getLuas() { 
        return Math.PI * radius * radius; 
    } 
} 
 
class BujurSangkar implements Bidang2D { 
    public double sisi; 
 
    @Override 
    public double getKeliling() { 
        return 4 * sisi; 
    } 
 
    @Override 
    public double getLuas() { 
        return sisi * sisi; 
    } 
} 
 
class PersegiPanjang implements Bidang2D { 
    public double panjang; 
    public double lebar; 
 
    @Override 
    public double getKeliling() { 
        return 2 * (panjang + lebar); 
    } 
 
    @Override 
    public double getLuas() { 
        return panjang * lebar; 
    } 
} 
 
public class Bidang2DTester { 
    public static void main(String[] args) { 
        Lingkaran l = new Lingkaran(); 
        BujurSangkar b = new BujurSangkar(); 
        PersegiPanjang p = new PersegiPanjang(); 
 
        // Set nilai untuk Lingkaran 
        l.radius = 10; 
        System.out.println("Lingkaran dengan radius " + l.radius); 
        System.out.println("Luas: " + l.getLuas() + " Keliling: " + l.getKeliling()); 
 
        // Set nilai untuk Bujur Sangkar 
        b.sisi = 15; 
        System.out.println("\nBujur Sangkar dengan sisi " + b.sisi); 
        System.out.println("Luas: " + b.getLuas() + " Keliling: " + b.getKeliling()); 
 
        // Set nilai untuk Persegi Panjang 
        p.panjang = 5; 
        p.lebar = 6; 
        System.out.println("\nPersegi Panjang dengan panjang: " + p.panjang + " dan lebar: " + p.lebar); 
        System.out.println("Luas: " + p.getLuas() + " Keliling: " + p.getKeliling()); 
    } 
}