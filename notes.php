<?php
// example 1 
class wolf; 
class cat;
class pig;

// example 2 
$wolf1 = wolf();
$bike1 = bike();
$cat1 = cat();

// example3
class bike{
	public $engine = "1000cc";
	public $wheels = "winter";
	public $handlebar = "short"; 
	public $muffler = "straight"; 

}

class dog{
	public $breed = "german";
	public $legs = "short";
	public $head = "small"; 
	public $nose = "big"; 

} 

class car{
	public $engine = "300hp";
	public $wheels = "winter";
	public $steering = "good"; 
	public $muffler = "straight"; 

} 

//example 4
$bike1 = new bike();
print $bike1->brand;

$food1 = new food();
print $food1->origin;

$water1 = new water();
print $water1->mountain;

//example 5

public function myMethod( $argument, $another) {
	stuff
}

public function myMethod( $argument, $another) {
	stuff
}

public function myMethod( $argument, $another) {
	stuff
}

//second email example 6

class houses {

	public $rooms;

	public $color;

	public $size;

	function __construct($rooms, $color, $size) {

	$this­>rooms = $rooms;

	$this­>color = $color;

	$this­>size = $size;

}

function getName() {

	return “{$this­>rooms}” .

	“{$this­>size}”;

}

}

class TV {

	public $brand;

	public $size;

	public $smart;

	function __construct($brand, $size, $smart) {

	$this­>brand = $brand;

	$this­>size = $size;

	$this­>smart = $smart;

}

function getName() {

	return “{$this­>brand}” .

	“{$this­>size}”;

}

}

class clothing {

	public $brand;

	public $size;

	public $material;

	function __construct($brand, $size, $material) {

	$this­>brand = $brand;

	$this­>size = $size;

	$this­>material = $material;

}

function getName() {

	return “{$this­>size}” .

	“{$this­>material}”;

}

}

//example 7

$car = new Car(“fast”, “car”, “p1”);

print “Car: {$car­>getName()}\n;


$motorcycles = new Motorcycles(“super”, “bike”, “BMWs1000rr”);

print “Motorcycles: {$motorcycles­>getName()}\n;


$food = new Food(“burger”, “ketchup”, “FastFood”);

print “Food: {$food­>getName()}\n;
?>