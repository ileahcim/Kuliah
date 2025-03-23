package praktikum.sesi10;
 
public class PegawaiTester { 
 
    public static void main(String[] args) { 
        // Membuat objek PegawaiTetap 
        Pegawai p = new PegawaiTetap("Januar", "1234"); 
 
        // Mengirim email 
        p.kirimEmail("a@test.com", "judul", "isi email"); 
    } 
} 
 
abstract class Pegawai { 
 
    private String NIP; 
    private String nama; 
 
    // Konstruktor untuk inisialisasi nama dan NIP 
    public Pegawai(String nama, String NIP) { 
        this.nama = nama; 
        this.NIP = NIP; 
    } 
 
    // Getter untuk nama 
    public String getNama() { 
        return nama; 
    } 
 
    // Getter untuk NIP 
    public String getNIP() { 
        return NIP; 
    } 
 
    // Method untuk mengirim email 
    public void kirimEmail(String to, String subjek, String isi) { 
        System.out.println(getNama() + " Kirim email ke: " + to + "\n" + 
                           "Dengan Subjek: " + subjek + "\n" +  
                           "Dengan Isi: " + isi); 
    } 
} 
 
class PegawaiTetap extends Pegawai { 
 
    public PegawaiTetap(String nama, String NIP) { 
        super(nama, NIP); 
    } 
 
    // Mengimplementasikan method kirimEmail 
    @Override 
    public void kirimEmail(String to, String subjek, String isi) { 
        System.out.println(getNama() + " Kirim email ke : " + to + "\n" 
            + "Dengan Subjek : " + subjek + "\n" + "Dengan Isi : " + isi); 
    } 
}