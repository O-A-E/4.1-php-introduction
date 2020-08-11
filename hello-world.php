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

// Difference between single an ddouble quotes. // "." is used for concatenation.
$mySingleQuoteString = 'This is single quotes:\n' . $myString; // Sinlge = a string will output exactly as you have it
echo $mySingleQuoteString;
echo "\n\n"; // New lines!
$mySingleQuoteString = "\n\nThis is a double quotes string:\n$myString"; // Double quotes let us inject variables right insde of our string!
echo $mySingleQuoteString;

// Comments in PHP. // is used for one-line comment.
# We can also use bash-style one-line comments ("#".)
/* We can also
do multi-line comments
    by
        using
            asterisk and slash, like we did in previous languages!
*/

// Data-types:
$myString = 'This is a string.';  // String.
$myTrueBoolean = TRUE; // Boolean.
$myFalseBoolean = false; // Case of a function doesn't matter.
$myInt = 42; //Integer
$myFloat = 3.14; // Decimal value (float/double.)
$myNull = null;
$myArray = [ 1, 2, 3, 4, 'test', false, null ]; // Array can be created using [] or array () syntaxes)
$mySecondArray = array (
    $myString,
    $myTrueBoolean,
    $myFalseBoolean,
    $myInt,
    $myFloat,
    $myNull,
    $myArray
);

$myObject = new stdClass(); // Basic standard/ generic object. 
$myObject->name = "Bob";
$myObject->age = 36;
$myObject->hobbies = ["programming", "skydiving"];
echo "\n Hello, my name is {$myObject->name}. \n I am {$myObject->age} years old. \n I enjoy the following activities: {$myObject->hobbies}";

// Oh, we'll need to loop through our array of hobbies!

foreach( $myObject->hobbies as $hobby ) { // Note: $hobby in this case represents the current iterated item in the array. Can be any variable name. Each iteration of the loop will display a new item in the list..
    echo "\n * $hobby";
}

echo "\n\nLet's try a \"for\" loop!";
for ( $iterator = 0; $iterator <8; $iterator = $iterator + 2  ) {
    echo "\nCurrent value in loop: $iterator";
}

$myArrayLength = count ( $myArray );
echo "The variable \$myArray contains $myArrayLength items."; // Escape backslash stops myArray from printing and just prints it as text.