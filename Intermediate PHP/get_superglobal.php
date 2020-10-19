<?php 
    // Example of $_GET superglobal being used in a function.
    // Check if it's set first
    if(isset($_GET['name'])){
        $name = $_GET['name']; 
    }
    function greeting() {
        $name = $_GET['name'];
        echo "Hello, " . $name;
    }
    // Then call function.
    greeting();
?>
