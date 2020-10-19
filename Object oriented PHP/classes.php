<?php 
    // Basic implentation of a class in PHP.
    class Recipe {
        // Properties
        public $title;
        public $ingredients = [];
        public $instructions = [];
        public $yield;
        public $tag = [];
        public $source = "Aaron Gillies";
    }
    $first_recipe = new Recipe();
    // var_dump($first_recipe);
?>