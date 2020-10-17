<?php

// ** Modify you php.ini file ** 
// ------------------------------------------------------------------------------------
// While your server is running, go to the phpinfo file in a browser I'm using http://localhost/phpinfo.php
// Search for “php.ini”. You should see something like “Configuration File (php.ini) Path”. Examples:

// ** MAC **  
// /Applications/MAMP/bin/php/php7.0.0/conf

// ** Windows **
// C:\MAMP\conf\php7.0
// You can open the php.ini file in a text editor or in a terminal. Copy the path and open a terminal window.

// ** MAC: Type sudo vi and then paste the path with php.ini at the end ** 

// sudo vi /Applications/MAMP/bin/php/php7.0.0/conf/php.ini
// W

// ** Windows: Open notepad first then choose File > Open or copy the path and open a terminal window, example **

// notepad C:\MAMP\conf\php7.0\php.ini
// Search for error_reporting:

// ** MAC: Type a forward slash to search **

// /error_reporting

// ** Windows: Edit > Find, error_reporting ** 
// error_reporting: Set the error reporting level. The default value is: “E_ALL & ~E_NOTICE,” meaning this this would should all error levels except E_NOTICE. For a development server you probably want to turn everything on by just using E_ALL.
// display_errors: Set it to “ON” (default is “OFF”)if errors are to be printed to the screen.
// log_errors: This indicates whether or not error logging should be done; default value is “on.”
// error_log string: Sets the name of the file where script errors should be logged
// There are a couple additional settings that will give you more information or control.

// display_startup_errors: For debugging, you can also turn on errors that occur during PHP's startup sequence
// html_errors: You can also control HOW your errors as displayed. The new format for HTML errors produces clickable messages that direct the user to a page describing the error, or function causing the error. This is on by default but you can turn it off
// After saving the file, you must restart the servers for the changes to take affect.