<?php

/********************************** PHP - More on Static Methods */
/*A class can have both static and non-static methods. A static method can be accessed from a method in the same class using the self keyword and double colon (::): */

// class greeting {
//     public static function welcome() {
//       echo "Hello World!";
//     }
  
//     public function __construct() {
//       self::welcome();
//     }
//   }
  
//   new greeting();

/***** Another Example */
/*Static methods can also be called from methods in other classes. To do this, the static method should be public: */
// class A {
//     public static function welcome() {
//       echo "Hello World from other class!";
//     }
//   }
  
//   class B {
//     public function message() {
//       A::welcome();
//     }
//   }
  
//   $obj = new B();
//   echo $obj -> message();

/***** Another Example */
/*To call a static method from a child class, use the parent keyword inside the child class. Here, the static method can be public or protected. */

class Domain {
    protected static function getWebsiteName() {
      return "www.aceplussolutions.com";
    }
  }
  
  class DomainAPS extends Domain {
    public $websiteName;
    public function __construct() {
      $this->websiteName = parent::getWebsiteName();
    }
  }
  
  $domain = new DomainAPS;
  echo $domain -> websiteName;
?>