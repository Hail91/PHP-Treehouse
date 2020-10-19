<?php 
    // ** Escaping outputs **
    
    /* Output is any data that leaves your application headed for another application 
    or client. For example, adding a record to a database, or outputting information 
    to a web page. */

    /* The goal of escaping output data is to represent data in a way that will not 
    allow it to execute or get interpreted. Without escaping the output it's possible 
    you could accidentally send malicious links to a user's browser, or try to submit 
    data to a database that causes an error, or, even worse, executes malicious SQL. */

    /* The three main functions for escaping HTML data using PHP are:
        - strip_tags()
        - htmlspecialchars()
        - htmlentities()
    */

    // ** strip_tags() **

    /* The strip_tags() function removes all HTML tags except the ones you specify. 
    For example, say you had a form that let a user submit a custom HTML snippet -- 
    like a paragraph of text, with their name, and their photo. This could be part of 
    a custom blogging system that lets users create their own web page. */

    /* You wouldn't however want the user to add links or JavaScript <script> tags, 
    since those could be used to link other users to malicious sites or execute 
    malicious code. In this example, you only want to allow <p> and <img> tags, 
    nothing else. */

    /* Here's where the strip_tags function comes in handy, It takes two arguments:
        - The string to process
        - A string containing the tags you want to allow
    */

    // For example, say your input was this string of HTML stored in the variable $str:

    // $str = 
    // '<script>
    //     alert('You have been hacked!');
    // </script>
    // <a href="http://bad-web-site.com/">Click here</a>
    // <p>My name's Sarah. <img src="https://picsum.photos/id/1005/5760/3840" /></p>';

    /* Escaping the output with strip_tags($str, '<p><img>''); converts the above to:
        - <p>My name's Sarah. <img src="https://picsum.photos/id/1005/5760/3840" /></p>
    */

    // ** htmlspecialchars() **

    // Code Example for use below:

    // $str = '<body>♠ ♣ ♥</body>';
    // echo htmlspecialchars($str);
        
    // Source Code:
    // &lt;body&gt;♠ ♣ ♥&lt;/body&gt;
        
    // Browser View:
    // <body>♠ ♣ ♥</body>

    /* In general, htmlspecialchars() is a better choice for escaping output most 
    notably when outputting HTML or XML in UTF-8. It encodes fewer characters, 
    handles the most important symbols, and avoids display problems that can appear 
    when using htmlentities(). */

    /* Secure programming is all about keeping security at the forefront of all of 
    your projects so remember to filter your inputs and escape your outputs. */
?>