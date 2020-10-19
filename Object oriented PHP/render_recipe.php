<?php
    class Render {
        // Making a method static makes it accessible from OUTSIDE the class.
        static public function displayRecipe($recipe) {
            $output = ""; 
            $output .= $recipe->getTitle() . " by " . $recipe->getSource();
            $output .= "\n";
            $output .= implode(", ", $recipe->getTags());
            $output .= "\n\n";
            foreach($recipe->getIngredients() as $ingredient) {
                $output .= $ingredient['amount'] . " " . $ingredient['measure']. " " . $ingredient['item'];
                $output .= "\n";
            }
            $output .= "\n";
            $output .= implode("\n", $recipe->getInstructions());
            $output .= "\n";
            $output .= $recipe->getYield();
            echo $output;
        }
    }