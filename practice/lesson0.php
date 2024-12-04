<?php

// $a = 10;
// $b = 20.9;

// $c = $a + $b;
// echo $c;

// $string = "kgjhkgl";
// $fff = "jjfiojg";

// echo $string . " AND " . $fff; 

$bool = true;
$bool1 = false;

$array = [1, 2, 3, 4, 5, 6];
$arr = [$bool, 12, "asdas"];

class Animal {
  public $name;
  public $isHunter;
  public $age;

  public function __construct($name, $isHunter, $age) {
    $this->name = $name;
    $this->isHunter = $isHunter;
    $this->age = $age;
  }
}

$animal1 = new Animal("sobaka", true, 9);
$animal2 = new Animal("koshka", true, 16);
echo $animal1->name;