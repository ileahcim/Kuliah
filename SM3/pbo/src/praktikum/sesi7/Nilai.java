package praktikum.sesi7;

public class Nilai {
    private int Quiz;
    private int Uts;
    private int Uas;

    // Getter dan Setter untuk atribut Quiz
    public int getQuiz() {
        return Quiz;
    }

    public void setQuiz(int quiz) {
        if (quiz < 0 || quiz > 100) {
            throw new IllegalArgumentException("Nilai Quiz harus antara 0 dan 100");
        }
        this.Quiz = quiz;
    }

    // Getter dan Setter untuk atribut UTS
    public int getUts() {
        return Uts;
    }

    public void setUts(int uts) {
        if (uts < 0 || uts > 100) {
            throw new IllegalArgumentException("Nilai UTS harus antara 0 dan 100");
        }
        this.Uts = uts;
    }

    // Getter dan Setter untuk atribut UAS
    public int getUas() {
        return Uas;
    }

    public void setUas(int uas) {
        if (uas < 0 || uas > 100) {
            throw new IllegalArgumentException("Nilai UAS harus antara 0 dan 100");
        }
        this.Uas = uas;
    }

    // Metode untuk menghitung Nilai Akhir (NA)
    public double getNA() {
        return (0.2 * Quiz) + (0.3 * Uts) + (0.5 * Uas);
    }

    // Metode untuk menentukan indeks berdasarkan NA
    public String getIndex(double na) {
        if (na >= 80) {
            return "A";
        } else if (na >= 70) {
            return "B";
        } else if (na >= 60) {
            return "C";
        } else if (na >= 50) {
            return "D";
        } else {
            return "E";
        }
    }
}

class NilaiTester {
    public static void main(String[] args) {
        Nilai n = new Nilai();

        try {
            // Set nilai Quiz, UTS, dan UAS
            n.setQuiz(60);
            n.setUts(80);
            n.setUas(75);

            // Hitung Nilai Akhir (NA)
            double na = n.getNA();

            // Tampilkan hasil
            System.out.println("Quiz : " + n.getQuiz());
            System.out.println("UTS  : " + n.getUts());
            System.out.println("UAS  : " + n.getUas());
            System.out.printf("NA   : %.0f%n", na);
            System.out.println("Index: " + n.getIndex(na));
        } catch (IllegalArgumentException e) {
            System.out.println(e.getMessage());
        }
    }
}
