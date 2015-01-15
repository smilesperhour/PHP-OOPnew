<?php
class Animal{
	public $firstName;
	public $lastName;
	public $scientificName;
	public $gender;
	public $weight;

	function __construct($scientificName, $firstName, $lastName, $gender, $weight) {
		$this->scientificName = $scientificName;
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->gender = $gender;
		$this->weight = $weight;

	}

	function getName() {
		return "This is my" . $this->firstName . "and last" . $this->lastName . "and this is my scientific-Name" . $this->scientificName;
	}
}

class Cat extends Animal {
	function __construct($scientificName, $firstName, $lastName, $gender, $weight){
		parent::__construct($scientificName, $firstName, $lastName, $gender, $weight);
		$this->meow = $meow;
	}
}

function greet() {
	return $this->meow;
}

$Cat = new Cat("Cat", "mellow", "yellow", "male", 15, true);
print "Animal 1 is a" . $cat->getName();

?>