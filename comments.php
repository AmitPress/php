<?php
// use forward slash used as single line comment

/**
 * use forward slash double stars to make documentation comment like (/** )
 */

/*
    use onle forward slash and a star to make generic multiple line comment
    and use star forward slash to close it
*/


// while writing documentation 
// always try to write documentation comment
// and again try to do commenting like this file

// again, use documention comment before function not instead in the function

// use single comment in the function to reduce complexity of reading the code

/**
 * use documentation annotations for readability
 * like,
 * @param
 * @return
 * 
 */

/**
 * @author
 * @todo
 * @copyright
 * @license
 * @param
 * @return
 * @throws
 */

/**
 * @author Amit Kumar
 * @param $first The first number
 * @param $second The second number
 * @return sum of two numbers
 */

function sum($first,$second){
    return $first+$second;
}

 