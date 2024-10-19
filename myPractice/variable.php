<?php

// basic variable declaration
// variable = value
$name = "faria";
$age = 27;
$isWorking = true;

// echo "name: " . $name . "\n"; 
// echo "Age: " . $age . "\n"; 
// echo "Working Status: " .  $isWorking . "\n";


// constant declaration
// define ("name", value, case-insensitive)
// const name = value

define("SITE_URL","http://www.faria.com");
// echo "Website URL: " . SITE_URL . "\n";

const MAX_USER = 500;
// echo MAX_USER . "\n";

// chatgpt exercise

/* q-1 : Exercise 1: Personal Details
Create a PHP script that defines three variables: your name, age, and favorite programming language.
Output the following sentence using these variables:
"My name is John, I am 30 years old, and my favorite programming language is PHP.")*/

$name = "Faria";
$age = 27;
$programmingLanguage = "PHP";

// echo "My name is {$name},I am {$age} years old, and my favorite programming language is {$programmingLanguage}." . "\n";

/* Exercise 2: Define Constants
Define a constant for your favorite color and your birth year.
Write a PHP script that outputs the following sentence:
"My favorite color is [color] and I was born in [year]."
*/

define("MY_COLOR","BLACK");
define("MY_BIRTH_YEAR",1997);


echo "My favorite color is " . constant("MY_COLOR") . " and I was born in " . constant("MY_BIRTH_YEAR") . "." . "\n";


/*
Exercise 3: Circle Circumference

Define a constant for Pi (3.14159) and a variable for the radius of a circle.
Write a PHP script to calculate the circumference of the circle using the formula C = 2 * Pi * radius.

*/

define("PI", 3.1416);
$radius = 7;

echo "The circle circumference is" . " " . (2*PI*$radius)."\n"







?>