package praktikum.sesi10;

public class CetakGambar { 
// Method untuk menampilkan gambar dan hapus menggunakan polimorfisme 
private void tampil(Bentuk[] obj) { 
// Polimorfisme 
// Memanggil method gambar() dan hapus() pada setiap objek Bentuk 
        for (int i = 0; i < obj.length; i++) { 
            obj[i].gambar();  // Memanggil method gambar 
            obj[i].hapus();   // Memanggil method hapus 
            System.out.println();  // Menambahkan baris kosong setelah tiap output 
        } 
    } 
 
    public static void main(String[] args) { 
        // Membuat array objek Bentuk yang berisi objek Lingkaran, Elips, dan Segitiga 
        Bentuk[] obj = { new Lingkaran(), new Elips(), new Segitiga() }; 
 
        // Membuat objek CetakGambar 
        CetakGambar cetak = new CetakGambar(); 
 
        // Menampilkan method gambar() dan hapus() pada class Bentuk (superclass) 
        // Memanggil method gambar dan hapus pada objek Bentuk 
        Bentuk b = new Bentuk() {}; // Membuat objek Bentuk anonim sebagai contoh 
        b.gambar(); 
        b.hapus(); 
        System.out.println(); 
 
        // Menampilkan gambar() dan hapus() pada masing-masing subclass dengan polimorfisme 
        cetak.tampil(obj); 
    } 
} 
 
abstract class Bentuk { 
 
    // Method untuk menggambar 
    public void gambar() {  // Ubah menjadi public untuk aksesibilitas 
        System.out.println("superclass -> Menggambar"); 
    } 
 
    // Method untuk menghapus gambar 
    public void hapus() {  // Ubah menjadi public untuk aksesibilitas 
        System.out.println("superclass -> Menghapus Gambar"); 
    } 
} 
 
class Elips extends Bentuk { 
 
    // Overriding method gambar untuk Elips 
    @Override 
    public void gambar() { 
        System.out.println("subclass -> Menggambar Elips"); 
    } 
 
    // Overriding method hapus untuk Elips 
    @Override 
    public void hapus() { 
        System.out.println("subclass -> Menghapus Gambar Elips"); 
    } 
} 
 
class Lingkaran extends Bentuk { 
 
    // Overriding method gambar untuk Lingkaran 
    @Override 
    public void gambar() { 
        System.out.println("subclass -> Menggambar Lingkaran"); 
    } 
 
    // Overriding method hapus untuk Lingkaran 
    @Override 
    public void hapus() { 
        System.out.println("subclass -> Menghapus Gambar Lingkaran"); 
    } 
} 
 
class Segitiga extends Bentuk { 
 
    // Overriding method gambar untuk Segitiga 
    @Override 
    public void gambar() { 
        System.out.println("subclass -> Menggambar Segitiga"); 
    } 
 
    // Overriding method hapus untuk Segitiga 
    @Override 
    public void hapus() { 
        System.out.println("subclass -> Menghapus Gambar Segitiga"); 
    } 
}