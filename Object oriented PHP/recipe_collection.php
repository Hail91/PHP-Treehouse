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
}