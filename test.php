<?php

// CTRL + ALT + N
echo "Testing Code Runner!!!";

$age = 28;
$word = age;

echo $$word;

echo "\n";

// GOOD PRACTICE RATHER THAN USING . OPERATOR
echo "$$word {$age}";
