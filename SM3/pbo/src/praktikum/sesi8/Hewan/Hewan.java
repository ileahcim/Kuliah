package praktikum.sesi8.Hewan;

public class Hewan {
    protected String suara;

    public Hewan() {
        this.suara = "suara";
    }

    public void cetak(){
        System.out.println("Suara hewan ini adalah " + suara);
    }
}

class Mamalia extends Hewan {
    protected String berkembangbiak;

    public Mamalia() {
        this.berkembangbiak = "beranak";
    }

    public void cetak(){
        System.out.println("Mamalia berkembang biak dengan cara " + berkembangbiak);
    }
}

class Sapi extends Mamalia {
    private String nama;
    private String umur;

    public Sapi(){
        suara="Moo";
        berkembangbiak="beranak";
        this.nama = "sapi";
        this.umur = "10 tahun";
    }

        public void cetak(){
            System.out.println("\n===== Data Hewan Mamalia Sapi =====");
            System.out.println("Suara : " + suara);
            System.out.println("Berkembang biak : " + berkembangbiak);
            System.out.println("Nama : " + nama);
            System.out.println("Umur : " + umur);
        }
}

class Kambing extends Mamalia{
    private String nama;
    private String umur;

    public Kambing(){
        suara="Mbee";
        berkembangbiak="beranak";
        this.nama = "kambing";
        this.umur = "5 tahun";
    }

        public void cetak(){
            System.out.println("\n===== Data Hewan Mamalia Kambing =====");
            System.out.println("Suara : " + suara);
            System.out.println("Berkembang biak : " + berkembangbiak);
            System.out.println("Nama : " + nama);
            System.out.println("Umur : " + umur);
        }
}

class Unggas extends Hewan{
    protected String berkembangbiak;

    public Unggas() {
        this.berkembangbiak = "bertelur";
    }

    public void cetak(){
        System.out.println("Unggas berkembang biak dengan cara " + berkembangbiak);
    }
}

class Burung extends Unggas{
    private String jenis;
    private String ciri;

    public Burung(){
        suara="wakwakkurrr...";
        berkembangbiak="bertelur";
        this.jenis = "Merpati";
        this.ciri = "Bulu Putih";
    }

    public void cetak(){
        System.out.println("\n===== Data Hewan Unggas Burung =====");
        System.out.println("Suara : " + suara);
        System.out.println("Berkembang biak : " + berkembangbiak);
        System.out.println("Jenis : " + jenis);
        System.out.println("Ciri : " + ciri);
    }
}

class Ayam extends Unggas{
    private String jenis;
    private String ciri;

    public Ayam(){
        suara="Kukuruyuk...";
        berkembangbiak="bertelur";
        this.jenis = "Ayam Kampung";
        this.ciri = "Bulu Hitam";
    }

    public void cetak(){
        System.out.println("\n===== Data Hewan Unggas Ayam =====");
        System.out.println("Suara : " + suara);
        System.out.println("Berkembang biak : " + berkembangbiak);
        System.out.println("Jenis : " + jenis);
        System.out.println("Ciri : " + ciri);
    }
}

class Ikan extends Hewan {
    protected String napas;

    public Ikan() {
        this.napas = "insang";
    }

    public void cetak(){
        System.out.println("Ikan bernapas dengan " + napas);
    }
}

class Gurame extends Ikan{
    private String ciri;
    private String berat;

    public Gurame(){
        suara="Blublub...";
        napas="insang";
        this.ciri = "Bewarna Hitam";
        this.berat = "5 kg";
    }

    public void cetak(){
        System.out.println("\n===== Data Hewan Ikan Gurame =====");
        System.out.println("Suara : " + suara);
        System.out.println("Napas : " + napas);
        System.out.println("Ciri : " + ciri);
        System.out.println("Berat : " + berat);
    }
}

class Lele extends Ikan{
    private String ciri;
    private String berat;

    public Lele(){
        suara="Blublub...";
        napas="insang";
        this.ciri = "Bewarna Hitam Keputihan";
        this.berat = "2 kg";
    }

    public void cetak(){
        System.out.println("\n===== Data Hewan Ikan Lele =====");
        System.out.println("Suara : " + suara);
        System.out.println("Napas : " + napas);
        System.out.println("Ciri : " + ciri);
        System.out.println("Berat : " + berat);
    }
}

class Main {
    public static void main(String[] args) {
        Sapi sapi = new Sapi();
        sapi.cetak();

        Kambing kambing = new Kambing();
        kambing.cetak();

        Burung burung = new Burung();
        burung.cetak();

        Ayam ayam = new Ayam();
        ayam.cetak();

        Gurame gurame = new Gurame();
        gurame.cetak();

        Lele lele = new Lele();
        lele.cetak();
    }
}