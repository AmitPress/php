<?php

// while(true) echo "Oh yeah"; //infinite loop

$dim = 0;

while($dim<10){
    echo $dim . " "; //single line while is infinite loop if it doesnt change the variable that is being compared
    $dim++;
}