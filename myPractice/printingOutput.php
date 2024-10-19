<?php

$name = "faria";
$age = 27;
$location = "Dhaka";
$marrital_status = "married";
$no_of_children = "1";

// echo
// echo "my name is $name\n";

// printf(format,arguments);
// printf("my name is %s, my age is %d, my location is %s.",$name,$age,$location);


// print_r(expression, return);

$array = array("Apple", "Banana", "Cherry");
// print_r($array); 

// var_dump Statement
// var_dump($name, $age, $location);



/*
Exercise 1: String Output
Write a PHP script that outputs a greeting message like:
"Welcome to the world of PHP!"
*/

// echo "Welcome to the world of PHP!\n";

/*
Exercise 2: Multiple Variable Output Using echo
Create variables for your name, favorite food, and favorite sport.
Use echo to display a sentence like:
"My name is [name]. I love [food] and my favorite sport is [sport]."
*/
$name = "faria";
$food = "mango";
$sport = "cricket";

// echo " My name is $name. I love $food and my favorite sport is $sport.";


/*
Exercise 3: Formatted Output Using printf
Write a PHP script that defines variables for a product’s name, price, and quantity.
Use printf to display:
"The price of [product] is $[price] for [quantity] units."
*/

$product_name = "mango";
$product_price = 100;
$product_quantity = 200;
printf ("The price of %s is $%s for %s units.", $product_name,$product_price,$product_quantity);