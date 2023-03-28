<?php
// 7.Problem: Merge two arrays of objects, and remove any duplicate objects based on a common property:

class Person {
  public $name;
  public $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age = $age;
  }
}

$people1 = array(
  new Person("Alice", 25),
  new Person("Bob", 30),
  new Person("Charlie", 35)
);

$people2 = array(
  new Person("Charlie", 35),
  new Person("David", 40),
  new Person("Eve", 45)
);

$peoples = array_merge($people1, $people2);

print_r(array_unique($peoples, SORT_REGULAR));