<?php
class RecipeCollection {
    private $title;
    private $recipes = [];

    // Construct magic method
    public function __construct($title = null) {
        $this->setTitle($title);
    }
    // Title setter method
    public function setTitle($title) {
        if(empty($title)) {
            $this->title = null;
        }
        else $this->title = ucwords($title);
    }
    // Title getter method
    public function getTitle() {
        return $this->title;
    }
    // Add recipe to collection (setter)
    public function addRecipe($recipe) {
        $this->recipes[] = $recipe;
    }
    // Retrieve recipes from collection (getter)
    public function getRecipes() {
        return $this->recipes;
    }
    // Retrieve all the recipe titles
    public function getRecipeTitles() {
        $titles = [];
        foreach($this->recipes as $recipe) {
            $titles[] = $recipe->getTitle();
        }
        return $titles;
    }
    // Filter recipes by tag
    public function filterByTag($tag) {
        $taggedRecipes = [];
        foreach($this->recipes as $recipe) {
            if(in_array(strtolower($tag), $recipe->getTags())) {
                $taggedRecipes[] = $recipe;
            }
        }
        return $taggedRecipes;
    }
    // Get all ingredients from all recipes in collection.
    public function getCombinedIngredients() {
        $ingredients = [];
        foreach($this->recipes as $recipe) {
            foreach($recipe->getIngredients() as $ingredient) {
                $item = $ingredient['item'];
                if(strpos($item, ',')) {
                    $item = strstr($item, ',', true);
                }
                if(substr($item, -1) === "s" && array_key_exists(rtrim($item, "s"), $ingredients)) {
                    $item = rtrim($item, "s");
                } else if(array_key_exists($item . "s", $ingredients)) {
                    $item . "s";
                }
                $ingredients[$item] = [
                    $ingredient['amount'],
                    $ingredient['measure']
                ];
            }
        }
        return $ingredients;
    }
    // Filter recipes by the ID
    public function filterById($id) {
        return $this->recipes[$id];
    }
}