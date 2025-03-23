package praktikum.sesi8.BangunDatar;

public class Persegi extends BangunDatar {
    float sisi;

    @Override
    public float luas() {
        return sisi * sisi;
    }

    @Override
    public float keliling() {
        return 4 * sisi;
    }
}