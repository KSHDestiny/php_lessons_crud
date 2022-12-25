<?php
// Class & Object
class Animal {
  // Properties
  public $name;
  public $color;

  // Methods
  public function set_name($setName) {
    $this->name = $setName;
  }
  public function get_name() {
    return "This dog's name is " . $this->name . ".";
  }

  public function color($itsColor){
    $this->color = $itsColor;
    echo "Its color is " . $this->color;
  }

  public function height($myHeight){
    echo "I am " . $myHeight . " feet tall.";
  }
}

$object = new Animal();  // create object

$object->set_name("Aung Net");
echo $object->name;
echo $object->get_name();

$object->color("red");
echo $object->color;

$object->height(5.8);


// Access Modifiers (public, protected, private)
class Fruit {
    public $name;   // accessed from everywhere
    protected $color;     // accessed within the class and by classes derived from that class (Inheritance)
    private $price;     // accessed within the class

    public function fruitName($fruitName){
        $this->name = $fruitName;
    }

    public function fruitColor($fruitColor){
        $this->color = $fruitColor;
    }

    public function fruitPrice($fruitPrice){
        $this->price = $fruitPrice;
    }

    public function get_color(){
        return $this->color;
    }
    public function get_price(){
        return $this->price;
    }
}

$aboutFruit = new Fruit();
$aboutFruit->fruitName("Apple");
$aboutFruit->fruitColor("red");
$aboutFruit->fruitPrice(300);

echo $aboutFruit->name . "<br>";

// echo $aboutFruit->color; // error
echo $aboutFruit->get_color() . "<br>";

// echo $aboutFruit->price . "<br>";    // error
echo $aboutFruit->get_price() . "<br>";


// Constructor
class User{
    public $name;
    public $job;

    public function __construct($myName = "Kaung Sat", $myJob = "Developer"){
        $this->name = $myName;
        $this->job = $myJob;
    }
}

$myProfile = new User("Mg Mg","Designer");
echo $myProfile->name;
echo $myProfile->job;


// Inheritance (Extend)
class Movie{
    public $name;
    public $runningTime;    // protected - OK  // private - error

    public function latestMovie($myMovie,$itsTime){
        $this->name = $myMovie;
        $this->runningTime = $itsTime;
    }
}

class MyFavorite extends Movie {
    public function recentWatch(){
        echo "Movie name is " . $this->name . " and its running time is " . 
        $this->runningTime . " hours.";
    }
}

$myCinema = new MyFavorite();
$myCinema->latestMovie("End Game",120);
$myCinema->recentWatch();
?>