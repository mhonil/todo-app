<!-- Task Class Inheritance -->
<?php

// Define an abstract class for a generic shape
abstract class Shape {
    // Abstract method to calculate the area of a shape
    abstract public function calculateArea();
}

// Define a class for a circle
class Circle extends Shape {
    private $radius;

    // Constructor to initialize the circle with its radius
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // Implement the calculateArea method specifically for a circle
    public function calculateArea() {
        return pi() * $this->radius * $this->radius;
    }
}

// Define a class for a rectangle
class Rectangle extends Shape {
    private $width;
    private $height;

    // Constructor to initialize the rectangle with its width and height
    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    // Implement the calculateArea method specifically for a rectangle
    public function calculateArea() {
        return $this->width * $this->height;
    }
}

// Example usage
$circle = new Circle(5);
echo "Circle area: " . $circle->calculateArea() . "\n";

$rectangle = new Rectangle(4, 5);
echo "Rectangle area: " . $rectangle->calculateArea() . "\n";
?>


<!-- Task Polymorphism-->

<?php

abstract class Animal {
    // Abstract method only needs to be defined in the parent class
    abstract public function makeSound();
}

// Dog class inherits from Animal
class Dog extends Animal {
    public function makeSound() {
        return "Woof";
    }
}

// Cat class inherits from Animal
class Cat extends Animal {
    public function makeSound() {
        return "Meow";
    }
}

// Bird class inherits from Animal
class Bird extends Animal {
    public function makeSound() {
        return "Tweet";
    }
}

// Function to demonstrate polymorphism
function letTheAnimalSpeak(Animal $animal) {
    echo get_class($animal) . " says " . $animal->makeSound() . "\n";
}

// Create instances of each animal
$dog = new Dog();
$cat = new Cat();
$bird = new Bird();

// Demonstrate polymorphism
letTheAnimalSpeak($dog);
letTheAnimalSpeak($cat);
letTheAnimalSpeak($bird);
?>