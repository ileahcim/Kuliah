package praktikum.sesi6.latihan;

//membuat class dengan nama bintang film
class BintangFilm {
    //atributnya
    private String nama;
    private boolean pria;

    //konstruktor : fungsi yang di jalankan ketika object dibuat
    BintangFilm(String nama, boolean pria) {
        this.nama = nama;
        this.pria = pria;
    }


    //method dengan return tanpa parameter
    String perolehNama() {
        return (nama);
    }

    //memperoleh jenis kelamin tanpa parameter
    String perolehJenisKelamin() {
        if (this.pria)
            return ("Pria");
        else
            return ("Wanita");
    }
}

public class ClassBintangFilm {
    public static void main(String[] args) {
        //buat dua objek bintangFilm si A dan si B
        BintangFilm siA = new BintangFilm("Tom Cruise", true);
        BintangFilm siB = new BintangFilm("Angelina Jolie", false);

        //menampilkan nama dan jenis kelamin
        System.out.println("Nama\t\t: " + siA.perolehNama() + "\nJenis Kelamin\t: " + siA.perolehJenisKelamin());
        System.out.println("\nNama\t\t: " + siB.perolehNama() + "\nJenis Kelamin\t: " + siB.perolehJenisKelamin());
    }
}