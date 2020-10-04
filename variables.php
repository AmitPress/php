<?php
// In php, variables are quite elegant when they works

//you can't use a variable without declaring it

echo $home; //shows nothing

var_dump($home); // shows NULL

/*lets assume all the memory address by default is nullified
then if we make a variable null then it really doesn't make any sense
so we can also assume it this way :- a variable only exist if it has any kind of value
other than null. If a variable is given null as value then its existance will be reject
*/

$notnullval = 'This is awesome';

echo $notnullval;//This is awesome

$notnullval = null;

echo $notnullval;//nothing
var_dump($notnullval);//null

/*
so to delete variable just assign variable null and never used uninitialized variable
*/

//variables can be assigned to another variable
echo "\n\n\n\n\n";
//copying variables
$pink = 'pink';
$yellow = $pink;

echo $yellow;

//reference to variables
echo "\n \n \n";

$apple = 'red'; //red

$guava = 'green';//green

$apple = &$guava;//green

$apple = 'black';//black

echo $guava;//black

//duck typing

echo "\n\n\n\n\n";
$pinned = true;
var_dump($pinned);
$pinned = "is not true";
var_dump($pinned);

//so variables are loosely typed