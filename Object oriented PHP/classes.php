<?php 
    // Basic implentation of a class in PHP.
    class Recipe {
        // Properties
        /* There are 3 types of access scopes on a class property 
            - Public <-- Can access property directly.
            - Private <-- Limit direct access (need to use method to change)
            - Protected
        */
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
        public $ingredients = [];
        public $instructions = [];
        public $yield;
        public $tag = [];
        public $source = "Aaron Gillies";

        // Methods
        public function displayRecipe() {
            return $this->title . " by " . $this->source;
        }
        // Format title data coming in (Setter)
        public function setTitle($title) {
            $this->title = ucwords($title);
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
    }
?>