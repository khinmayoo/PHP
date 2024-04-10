<?php
// class Fruit {
//   // Properties
//   public $name;
//   public $color;

//   // Methods
//   function setName($name) {
//     $this->name = $name;
//   }
//   function getName() {
//     return $this->name;
//   }
//   function setColor($color) {
//     $this->color = $color;
//   }
//   function getColor() {
//     return $this->color;
//   }
// }

// $apple = new Fruit();
// $apple->setName('Apple');
// $apple->setColor('Red');
// echo "Name: " . $apple->getName();
// echo "<br>";
// echo "Color: " . $apple->getColor();

// echo "<hr>";
// $mango = new Fruit();
// $mango->setName('Mango');
// $mango->setColor('Green');
// echo "Name: " . $mango->getName();
// echo "<br>";
// echo "Color: " . $mango->getColor();

// echo "<hr>";
// $banana = new Fruit();
// $banana->name = 'Banana';
// $banana->color = 'Yellow';
// echo "Name: " . $banana->name;
// echo "<br>";
// echo "Color: " . $banana->color;


// // echo "<hr>";
// var_dump($apple instanceof Fruit);


/***************************** Fruit Class with constructor function */

// class Fruit
// {
//     public $name;
//     public $color;

//     function __construct($name, $color)
//     {
//         $this->name = $name;
//         $this->color = $color;
//     }
//     function getName()
//     {
//         return $this->name;
//     }

//     function getColor()
//     {
//         return $this->color;
//     }
// }

// $apple = new Fruit("Apple", "Red");
// echo "Name is " . $apple->getName();
// echo "<br>";
// echo "Color is " . $apple->color;

/***************************** Fruit Class with destructor function */
// class Fruit {
//     public $name;
//     public $color;

//     function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     function __destruct() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }

//   $apple = new Fruit("Apple", "red");

/***************************** Fruit Class with access modifiers */

// class Fruit {
//     public $name;
//     protected $color;
//     private $weight;
//   }

//   $mango = new Fruit();
//   $mango->name = 'Mango'; // OK
//   $mango->color = 'Yellow'; // ERROR
//   $mango->weight = '300'; // ERROR

//   echo $mango->name;

/***** Another Example */
// class Fruit {
//     public $name;
//     public $color;
//     public $weight;

//     function setName($n) {  // a public function (default)
//       $this->name = $n;
//     }
//     protected function setColor($n) { // a protected function
//       $this->color = $n;
//     }
//     private function setWeight($n) { // a private function
//       $this->weight = $n;
//     }
//   }

//   $mango = new Fruit();
//   $mango->setName('Mango'); // OK
//   $mango->setColor('Yellow'); // ERROR
//   $mango->setWeight('300'); // ERROR


/***************************** Fruit Class with inheritance */

// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   public function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// // Strawberry is inherited from Fruit
// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//   }
// }
// $strawberry = new Strawberry("Strawberry", "red");
// $strawberry->message();
// $strawberry->intro();

/***************************** Fruit Class with inheritance and the Protected Access Modifier */
//  class Fruit {
//      public $name;
//      public $color;
//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     protected function intro() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }

//   class Strawberry extends Fruit {
//     public function message() {
//       echo "Am I a fruit or a berry? ";
//     }
//   }

//   // Try to call all three methods from outside class
//   $strawberry = new Strawberry("Strawberry", "red");  // OK. __construct() is public
//   $strawberry->message(); // OK. message() is public
//   $strawberry->intro(); // ERROR. intro() is protected

/***** Another Example */
// class Fruit {
//   public $name;
//   public $color;
//   public function __construct($name, $color) {
//     $this->name = $name;
//     $this->color = $color;
//   }
//   protected function intro() {
//     echo "The fruit is {$this->name} and the color is {$this->color}.";
//   }
// }

// class Strawberry extends Fruit {
//   public function message() {
//     echo "Am I a fruit or a berry? ";
//     // Call protected method from within derived class - OK
//     $this -> intro();
//   }
// }

// $strawberry = new Strawberry("Strawberry", "red"); // OK. __construct() is public
// $strawberry->message(); // OK. message() is public and it calls intro() (which is protected) from within the derived class

/***************************** Fruit Class with Overriding Inherited Methods */
// class Fruit {
//     public $name;
//     public $color;
//     public function __construct($name, $color) {
//       $this->name = $name;
//       $this->color = $color;
//     }
//     public function intro() {
//       echo "The fruit is {$this->name} and the color is {$this->color}.";
//     }
//   }

//   class Strawberry extends Fruit {
//     public $weight;
//     public function __construct($name, $color, $weight) {
//       $this->name = $name;
//       $this->color = $color;
//       $this->weight = $weight;
//     }
//     public function intro() {
//       echo "The fruit is {$this->name}, the color is {$this->color}, and the weight is {$this->weight} gram.";
//     }
//   }

//   $strawberry = new Strawberry("Strawberry", "red", 50);
//   $strawberry->intro();

/***************************** Fruit Class with final keyword */

  // final class Fruit {
  //   // some code
  // }

  // // will result in error
  // class Strawberry extends Fruit {
  //   // some code
  // }

/***** Another Example */
// class Fruit {
//   final public function intro() {
//     // some code
//   }
// }

// class Strawberry extends Fruit {
//   // will result in error
//   public function intro() {
//     // some code
//   }
// }

/***************************** Fruit Class with using constant */
// class Fruit {
//     const MESSAGE = "Thank you for buying fruits!";
// }
// echo Fruit::MESSAGE;

// class Order {
//   const PAID = 6;
//   const PANDING = 7;
// }

// echo Order::PAID;

/***** Another Example */
class Fruit
{
  const MESSAGE = "Thank you for buying fruits!";
  public function thankYou()
  {
    echo self::MESSAGE;
  }
}

$goodbye = new Fruit();
$goodbye->thankYou();
echo $goodbye::MESSAGE;

?>