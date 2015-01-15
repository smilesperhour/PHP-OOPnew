<?php
class Animal {
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;
	public $bark;
	public $meow;

	function__construct($scientificName, $firstName, $lastName, $gender, $weight, $bark, $meow) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;
		$this->bark = $bark;
		$this->meow = $meow;
	}

	function getName() {
		return "this is my" . $this->firstName . "and last" . $this->lastName;	
	}

}

class cat extends Animal {
	function greet(){
		return $this->meow;
	}
}

class Dog extends Animal {
	function hello(){
		return $this->bark;
	}
}

$cat = new Cat("cat", "mellow", "yellow", "male", 15);
print "Animal 1 is a $cat" . $cat­>getName();



?>	