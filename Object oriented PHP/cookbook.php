<?php 
include "./classes.php";
include "./render_recipe.php";
include "./recipe_collection.php";

$first_recipe = new Recipe('my first recipe');
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

// echo Render::displayRecipe($first_recipe);
// echo "\n";

// Code below is example of toString() method in use.
echo $first_recipe;
echo "\n";

echo new Render();

// $second_recipe = new Recipe();
// $second_recipe->source = "New Person";
// $second_recipe->setTitle("my second recipe");
// echo $second_recipe->displayRecipe();
// echo "\n";

// Cookbook object
$cookbook = new RecipeCollection('Aarons Recipes');
$cookbook->addRecipe($first_recipe);
echo "\n";
// Show all recipe titles in Cookbook.
// echo Render::listShopping($cookbook->getCombinedIngredients());
// echo "\n";

// echo Render::listRecipes($cookbook->getRecipeTitles());
// echo "\n";

// echo Render::displayRecipe($cookbook->filterById(0));
// echo "\n";