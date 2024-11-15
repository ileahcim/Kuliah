package praktikum.sesi6.latihan;

class Mobil {
    String aktifitas;
    String warna;
    int kecepatan;
    public Mobil (String aktifitas, String warna, int kecepatan) {
        this.aktifitas = aktifitas;
        this.warna = warna;
        this.kecepatan = kecepatan;
    }

    void cekKecepatan() {
        if (kecepatan == 0)
            aktifitas = "parkir";
        else if (kecepatan > 0)
            aktifitas = "berjalan";
        else
            aktifitas = "mundur";
    }

    void cetakAtribut() {
        System.out.println("Aktifitas: " + aktifitas);
        System.out.println("Warna: " + warna);
        System.out.println("Kecepatan: " + kecepatan);
    }
}

public class ClassMobil {
    public static void main(String[] args) {
        Mobil mobilku = new Mobil("parkir", "merah", 0);
        mobilku.cekKecepatan();
        mobilku.cetakAtribut();
    }
}