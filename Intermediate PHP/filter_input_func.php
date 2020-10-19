<?php 
    /* The filter_input() function filters and validates external variables coming from
    insecure sources, such as input forms. This function is commonly used to prevent some
    security threats like SQL injection attacks. */

    // ** EXAMPLE **
    // http://yourdomain.com/index.php?name=<a href="https://google.com">Click Me</a>

    /* The query string contains the HTML to create a link. 
    You should be careful when echoing $_GET superglobal variables like this: */

    echo $_GET['name'];

    /* The above example would output a link to Google -- this is harmless. 
    However, you can imagine a link to a phishing site, or a link that executes a 
    malicious script. To avoid input that could lead to improper links or executing 
    malicious code, you should filter all input with the filter_input() function 
    like this: */

    echo filter_input(INPUT_GET, 'name', FILTER_SANITIZE_STRING);

    /* With the same query string -- ?name=<a href="https://google.com>Click Me</a> 
    -- this PHP code strips out the <a> tag entirely and only echoes the 
    string Click Me. */

    /* filter_input() provides added security by stripping or filtering code or malicious
    scripts from the query string. You should ALWAYS filter inputs. The PHP filter_input()
    function accepts three arguments. */

    /* - The filter type:
        - INPUT_GET
        - INPUT_POST
        - INPUT_COOKIE
        - INPUT_SERVER
        - INPUT_ENV
    - The name of the variable
    - The ID or name of the filter to apply. <--- Docs for filters: https://www.php.net/manual/en/filter.filters.php */
    
    /* In this example, the first argument -- INPUT_GET -- identifies the input as 
    coming from a query string. 'name' is the variable in the query string to filter. 
    And the final argument is the filter to apply: when the input is a query string 
    use the FILTER_SANITIZE_STRING argument. But there are also filters for numbers, 
    email, special characters and more. If you were filtering an email, you would use 
    FILTER_SANITIZE_EMAIL. */
?>