<?php 
include "./classes.php";
include "./render_recipe.php";

$first_recipe = new Recipe();
$first_recipe->setTitle("my first recipe");
$first_recipe->addIngredient('egg', 1);
$first_recipe->addIngredient('flour', 2, 'cup');

// foreach($first_recipe->getIngredients() as $ingredient) {
//     echo "\n" . $ingredient['amount'] . " " . $ingredient['measure'] . " " . $ingredient['item'];
// }
// echo "\n";

$first_recipe->addInstructions("This is the first instruction");
$first_recipe->addInstructions("This is the second instruction");

// echo implode("\n", $first_recipe->getInstructions());
// echo "\n";

$first_recipe->addTag("Breakfast");
$first_recipe->addTag("Main Course");

// echo implode("\n", $first_recipe->getTags());
// echo "\n";
// Call static displayRecipe method to display the first recipe again.
echo Render::displayRecipe($first_recipe);
echo "\n";

// $second_recipe = new Recipe();
// $second_recipe->source = "New Person";
// $second_recipe->setTitle("my second recipe");
// echo $second_recipe->displayRecipe();
// echo "\n";