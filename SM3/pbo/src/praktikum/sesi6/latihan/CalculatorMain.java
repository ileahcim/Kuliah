package praktikum.sesi6.latihan;

class Calculator {
    //Attribute (operan1 dan operan2)
    public double operan1;
    public double operan2;

    //method to set operan1
    public void isiOperan1(double x) {
        this.operan1 = x;
    }

    //method to set operan2
    public void isiOperan2(double x) {
        this.operan2 = x;
    }

    //method to add operan1 and operan2
    public double tambah() {
        return operan1 + operan2;
    }

    //method to subtract operan1 and operan2
    public double kurang() {
        return operan1 - operan2;
    }

    //method to multiply operan1 and operan2
    public double kali() {
        return operan1 * operan2;
    }

    //method to divide operan1 and operan2
    public double bagi() {
        if (operan2 != 0) {
            return operan1 / operan2;
        } else {
            System.out.println("Pembagi tidak boleh nol");
            return Double.NaN; //NaN = Not a Number
        }
    }

    //method to calculate operan1 to the power of operan2
    public double pangkat() {
        return Math.pow(operan1, operan2);
    }
}

public class CalculatorMain {
    public static void main(String[] args) {
        Calculator calc = new Calculator();
        //setting values
        calc.isiOperan1(10.0);
        calc.isiOperan2(4.0);
        //displaying the result
        System.out.println("Operan1 + Operan2 = " + calc.tambah());
        System.out.println("Operan1 - Operan2 = " + calc.kurang());
        System.out.println("Operan1 * Operan2 = " + calc.kali());
        System.out.println("Operan1 / Operan2 = " + calc.bagi());
        System.out.println("Operan1 ^ Operan2 = " + calc.pangkat());
    }
}