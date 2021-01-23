<?php

// CTRL + ALT + N
echo "Testing Code Runner!!!";

$age = 28;
$word = "age";

echo $$word;
echo "\n";

// GOOD PRACTICE RATHER THAN USING . OPERATOR
echo "$$word {$age}";
echo "\n";

// CONSTANT
define('PI', 22/7);

// WON'T WORK

// echo "Value of PI : {PI}";
// echo "\n";

// echo "Value of PI : {$PI}";
// echo "\n";

// SHOULD WORK 

// echo "Value of PI : " . PI; // 3.1428571428571
// echo "\n";

// echo constant('PI'); // 3.1428571428571
// echo "\n";

$constant = 'constant';
echo "Value of PI = {$constant('PI')}";


