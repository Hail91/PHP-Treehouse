<?php 
include "./classes.php";

$first_recipe = new Recipe();
$first_recipe->setTitle("my first recipe");
$first_recipe->addIngredient('egg', 1);
$first_recipe->addIngredient('flour', 2, 'cup');
echo $first_recipe->displayRecipe();

foreach($first_recipe->getIngredients() as $ingredient) {
    echo "\n" . $ingredient['amount'] . " " . $ingredient['measure'] . " " . $ingredient['item'];
}
echo "\n";
// $second_recipe = new Recipe();
// $second_recipe->source = "New Person";
// $second_recipe->setTitle("my second recipe");
// echo $second_recipe->displayRecipe();
// echo "\n";