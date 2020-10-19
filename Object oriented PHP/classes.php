<?php 
    // Basic implentation of a class in PHP.
    class Recipe {
        // Properties
        /* There are 3 types of access scopes on a class property 
            - Public <-- Can access property directly.
            - Private <-- Limit direct access (need to use method to change)
            - Protected
        */
        // Getter and Setter methods must be used when accessing private properties outside of a class.
        private $title;
        private $measurements = [
            "tsp",
            "tbsp",
            "cup",
            "oz",
            "lb",
            "fl oz",
            "pint",
            "quart",
            "gallon"
        ];
        private $ingredients = [];
        private $instructions = [];
        private $yield;
        private $tag = [];
        private $source = "Aaron Gillies";

        // Methods
        // Format title data coming in (Setter)
        public function setTitle($title) {
            if(empty($title)) {
                $this->title = null;
            }
            else $this->title = ucwords($title);
        }
        // Getting method to retrieve recipe title. (Getter)
        public function getTitle() {
            return $this->title;
        }
        // Method to add ingredients to recipe (Setter)
        public function addIngredient($item, $amount = null, $measure = null) {
            if($amount !== null && !is_float($amount) && !is_int($amount)) {
                exit("The amount must be a float: " . gettype($amount) . " $amount given \n");
            }
            if($measure !== null && !in_array(strtolower($measure), $this->measurements)) {
                exit("Please enter a valid measurement: " . implode(", ", $this->measurements));
            }
            $this->ingredients[] = [
                "item" => ucwords($item),
                "amount" => $amount,
                "measure" => strtolower($measure)
            ];
        }
        // Return the recipe's ingredients
        public function getIngredients() {
            return $this->ingredients;
        }
        // Instructions methods...(Setter)
        public function addInstructions($string) {
            $this->instructions[] = $string;
        }
        // Get instructions (Getter)
        public function getInstructions() {
            return $this->instructions;
        }
        // Add Tags (Setter)
        public function addTag($tag) {
            $this->tags[] = strtolower($tag);
        }
        // Get tags (Getter)
        public function getTags() {
            return $this->tags;
        }
        // Set yield (Setter)
        public function setYield($yield) {
            $this->yield = $yield;
        }
        // Get yield (Getter)
        public function getYield() {
            return $this->yield;
        }
        // Set source (Setter)
        public function setSource($source) {
            $this->source = ucwords($source);
        }
        // Get source (Getter)
        public function getSource() {
            return $this->source;
        }
        // ** Magic Methods ** <-- Called with the double underscore prefix (__)
        // This method will allow you to add a title to the recipe at the time
        // Of instantiation (hence the 'construct' name).
        public function __construct($title = null) {
            $this->setTitle($title);
        }
        // Specify what output user will see if we try to simply echo the class object directly.
        public function __toString() {
            return $this->getTitle();
        }
    }
?>