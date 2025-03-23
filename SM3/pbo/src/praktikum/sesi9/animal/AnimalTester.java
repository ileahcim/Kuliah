package praktikum.sesi9.animal;

// Superclass
class Animal {
    // Properti
    String name;

    // Constructor
    public Animal(String name) {
        this.name = name;
    }

    // Metode
    public void speak() {
        System.out.println("Animal speaks");
    }
}

// Subclass
class Dog extends Animal {
    // Constructor
    public Dog(String name) {
        super(name); // Memanggil constructor dari superclass
    }

    // Override metode speak
    @Override
    public void speak() {
        System.out.println(name + " says: guk guk!");
    }
}

// Tester class
public class AnimalTester {
    public static void main(String[] args) {
        Dog dog = new Dog("Inu");
        dog.speak();
    }
}