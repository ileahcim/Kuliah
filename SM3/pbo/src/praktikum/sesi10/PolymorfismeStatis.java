package praktikum.sesi10;
 
public class PolymorfismeStatis { 
 
    public static void main(String[] args) { 
        // Menggunakan kelas Pewarisann 
        Pewarisann p = new Pewarisann(); 
        // Menguji method tambah dengan parameter integer 
        System.out.println("2 + 3 = " + p.tambah(2, 3)); 
        // Menguji method tambah dengan parameter string 
        System.out.println("\"2\" + \"3\" = " + p.tambah("2", "3")); 
 
        // Menggunakan kelas Overloading 
        Overloading objek = new Overloading(); 
        // Memanggil berbagai method 
        objek.Tampil(); 
        objek.Tampil(8); 
        objek.Tampil(6, 7); 
        objek.Tampil("Hello world"); 
 
        // Menggunakan kelas Lingkaran 
        Lingkaran lingkaran = new Lingkaran(); 
        System.out.println("Luas dengan jari-jari 5: " + lingkaran.luas(5)); 
        System.out.println("Luas dengan diameter 10: " + lingkaran.luas(10)); 
    } 
} 
 
// Kelas Lingkaran untuk method overloading 
class Lingkaran { 
 
    // Method menghitung luas dengan jari-jari 
    float luas(float r) { 
        return (float) (Math.PI * r * r); 
    } 
 
    // Method menghitung luas dengan diameter 
    double luas(double d) { 
        return (Math.PI * d * d) / 4; 
    } 
} 
 
// Kelas Overloading untuk metode yang berbeda-beda 
class Overloading { 
 
    // Method tanpa parameter 
    public void Tampil() { 
        System.out.println("I love Java"); 
    } 
 
    // Method dengan 1 parameter 
    public void Tampil(int i) { 
        System.out.println("Method dengan 1 parameter = " + i); 
    } 
 
    // Method dengan 2 parameter 
    public void Tampil(int i, int j) { 
        System.out.println("Method dengan 2 parameter = " + i + " " + j); 
    } 
 
    // Method dengan parameter String 
    public void Tampil(String str) { 
        System.out.println(str); 
    } 
} 
 
// Kelas Pewarisan untuk method tambah 
class Pewarisan { 
 
    // Method untuk menjumlahkan dua bilangan integer 
    public int tambah(int x, int y) { 
        return x + y; 
    } 
 
    // Method untuk menggabungkan dua string 
    public String tambah(String x, String y) { 
        return x + " " + y; 
    } 
} 
 
// Kelas Pewarisann untuk method tambah 
class Pewarisann { 
 
    // Method tambah untuk parameter int 
    public int tambah(int x, int y) { 
        return x + y; 
    } 
 
    // Method tambah untuk parameter String 
    public String tambah(String x, String y) { 
        return x + " " + y; 
    } 
}