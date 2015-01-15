 <?php
        // The code below creates the class
        class motorcycle {
            // Creating some properties (variables tied to an object)
            public $brand = "honda";
            public $model = "cbr";
            public $engine = "1000cc";
            public $type = "superSport";
            public $condition = "new";
            
            // Assigning the values
            public function __construct($model, $engine, $type, $condition) {
              $this->model = $model;
              $this->engine = $engine;
              $this->type = $type;
              $this->condition = $condition;
            }
            
            // Creating a method (function tied to an object)
            public function motto() {
              return "Hello, my bike is a " . $this->model . " " . $this->engine . ". is the engine type";
            }
          

              public function car() {
               return "the bike is in " . $this->condition . " " . " it is a " . $this->type . ".";
            }
          }

              // Creating a new person called "boring 12345", who is 12345 years old ;-)
        $me = new motorcycle('model', 'engine', 'type', 'condition');
        
        // Printing out, what the greet method returns
        echo $me->motto(); 
        echo $me->car(); 
        ?>