<?php
/*
php has several datatype like integer, float, boolean, string, array, Object, null
 */

 //boolean - identified as bool
 $isRed = false;

 var_dump($isRed); //bool(false)

 //string - identified as string

 $rand_str = "Rand-string";
 var_dump($rand_str); //string(11)

 //integer as int

 $intval = 22;

 var_dump($intval); //int(22)

 //float as float

 $flute = 22.22;
 var_dump($flute); //float(22.22)

 //array as array

 $arr = array(21, 23, 25);
    var_dump($arr);         /*array(3) {
                                [0]=>
                                int(21)
                                [1]=>
                                int(23)
                                [2]=>
                                int(25)
                            }
                            */

//null is used to nullify a value

//we dont need to use delete() like c++, we just need to nullify some unwanted variable and later task will be done by GC

