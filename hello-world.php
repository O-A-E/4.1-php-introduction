Hello, World!<?php // This is a comment. ?>
More Text!
<?php
// Ech ois used to output evaluations as a string (if possible.)
echo 'This is my standard Hello World test using "echo".';
echo 'One more echo!';

// Variables in PHP are marked with a $ ($ = don't run this as code, just output it!)
// Variable names cannot start with a number
// Variable names ARE case sensitive!
$myString = 'Hello, this is a string!';
echo ( $myString );
// Re-assignment is as simple as assinging again!
$myString = 'My string has now changed!';
echo $myString;

// Difference between single an ddouble quotes.
$mySingleQuoteString = 'This is single quotes:\n' . $myString; // Sinlge = a string will output exactly as you have it
echo $mySingleQuoteString;
$mySingleQuoteString = "\n\nThis is a double quotes string:\n$myString";
echo $mySingleQuoteString;