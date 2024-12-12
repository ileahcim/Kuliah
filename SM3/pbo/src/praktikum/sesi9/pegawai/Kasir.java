package praktikum.sesi9;

public class Kasir extends Pegawai {
    @Override
    public void menampilkan()
    {
        System.out.println("Nama : "+nama);
        System.out.println("Id Pegawai : "+id_pegawai);
        System.out.println("Gaji : "+gaji);
    }

    public void tugas(){
        System.out.println("Tugas : Melakukan transaksi denga pembeli");
        System.out.println("---------------------------------------------");
    }
    
}