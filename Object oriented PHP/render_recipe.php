<?php
    class Render {
        // Making a method static makes it accessible from OUTSIDE the class.
        static public function displayRecipe($recipe) {
            $output = ""; 
            $output .= $recipe->getTitle() . " by " . $recipe->getSource();
            $output .= "\n";
            $output .= implode(", ", $recipe->getTags());
            $output .= "\n\n";
            // self:: allows us to call a static method inside the class.
            $output .= self::listIngredients($recipe->getIngredients()); 
            $output .= "\n";
            $output .= implode("\n", $recipe->getInstructions());
            $output .= "\n";
            $output .= $recipe->getYield();
            echo $output;
        }
        // List out the ingredients
        public static function listIngredients($ingredients) {
            $output = "";
            foreach($ingredients as $ingredient) {
                $output .= $ingredient['amount'] . " " . $ingredient['measure']. " " . $ingredient['item'];
                $output .= "\n";
            }
            return $output;
        }
        // Return information about the class object to the user.
        public function __toString() {
            // __CLASS__ is an example of a 'magic' constant, these constants can do
            // Special things in PHP that are often useful.
            $output = "\nThe following methods are available for" . " " . __CLASS__ . " " . "objects in this class: \n";
            $output .= implode("\n", get_class_methods(__CLASS__));
            return $output;
        }
        // Method to show all the recipe titles in the collection.
        public static function listRecipes($titles) {
            asort($titles);
            return implode("\n", $titles);
        }
    }