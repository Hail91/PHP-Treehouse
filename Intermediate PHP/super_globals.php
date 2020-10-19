<?php
// Some information about super globals in PHP.

/* A PHP superglobal is an associate array of data that's created by the server to
capture information from URLs, HTML forms, cookies, sessions and web servers. It's
called a 'superglobal' because the information in the array is available everywhere
in your scripts */

/* Superglobals can be used globally with typing the 'global' keyword before the variable
name, making them available in all functions or methods by default! */

// Link to documentation for all available superglobals... https://www.php.net/manual/en/language.variables.superglobals.php

// ** CODE EXAMPLE OF _$GET **
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET Superglobal</title>
</head>
<body>
<form method="get" action="index.php">
    <input type="text" name="name"> <!-- name grabbed from here -->
    <input type="text" name="lang"> <!-- lang grabbed from here -->
    <input type="submit" value="submit">
</form>
</body>
</html>

<?php 
    // This code will grab the name/lang from the URL query string when form is submitted.
    // Need to check if name/lang are set, if form is not submitted an error will be thrown.
    if(isset($_GET['name'], $_GET['lang'])) {
        $name = $_GET['name'];
        $lang = $_GET['lang'];
        echo '<p>' . $name . '</p>';
        echo '<p>' . $lang . '</p>';
    }

    /* Use the $_GET method if the information you’ll be passing is not sensitive 
    or a security vulnerability. For example, a search function is a common use 
    case which will pass the data through the URL. */

    /* Use the $_POST superglobal if you want to send sensitive data to a file or 
    database in a more secure way. For example, when passing a secure user password 
    it's best to do so with a $_POST request that doesn't display the data in a 
    query string in the URL. */
?>