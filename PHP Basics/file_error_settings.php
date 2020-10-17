<?php

// Example of how to set up Error handling in your specific PHP File.
error_reporting(E_ERROR | E_WARNING | E_NOTICE | E_PARSE);
// Make sure they appear on the screen
ini_set('display_errors', 1);
// Format errors with proper HTML
ini_set('html_errors', 1);
// ----------------------------------------------------------------------
