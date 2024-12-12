package praktikum.sesi9;

public class Satpam extends Pegawai {
    public void menampilkan()
    {
        System.out.println("Nama : "+nama);
        System.out.println("Id_Pegawai : "+id_pegawai);
        System.out.println("Gaji : "+gaji);
    }

    public void tugas(){
        System.out.println("Tugas : Menjaga keamanan didalam dan diluar frenchise");
        System.out.println("----------------------------------------------------------");
    }
}