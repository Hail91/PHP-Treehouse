<?php 
    // Basic implentation of a class in PHP.
    class Recipe {
        // Properties
        /* There are 3 types of access scopes on a class property 
            - Public
            - Private
            - Protected
        */
        public $title;
        public $ingredients = [];
        public $instructions = [];
        public $yield;
        public $tag = [];
        public $source = "Aaron Gillies";

        // Methods
        public function displayRecipe() {
            return $this->title . " by " . $this->source;
        }
    }
    $first_recipe = new Recipe();
    $first_recipe->title = "My first recipe";
    echo $first_recipe->displayRecipe();
    echo "\n";

    $second_recipe = new Recipe();
    $second_recipe->source = "New Person";
    $second_recipe->title = "My second recipe";
    echo $second_recipe->displayRecipe();
    echo "\n";
?>