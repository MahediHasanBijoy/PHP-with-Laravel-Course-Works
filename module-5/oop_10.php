<?php
// A practical example of interface

class DistrictCollection implements IteratorAggregate, Countable{
    private $districts = [];

    public function add($district){
        array_push($this->districts, $district);
    }

    public function getDistricts(){
        return $this->districts;
    }

    // IteratorAggregate interface method
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }

    // this is a Countable interface method
    public function count(): int{
        return count($this->districts);
    }
}

$districts = new DistrictCollection();

$districts->add("Dhaka");
$districts->add("Cumilla");
$districts->add("Rajshahi");
$districts->add("Sylhet");

// $_districts = $districts->getDistricts();


// foreach($_districts as $_district){
//     echo $_district."\n";
// }

// The IteratorAggregate interface in PHP is used to define a way to create an external iterator for an object. 
foreach($districts as $district){
    echo $district. "\n";
}

// using count on object using Countable interface to count the object elements
echo count($districts);