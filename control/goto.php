<?php

$rival = 5;

increase:
    $rival += 50;
    echo $rival . " ";

if($rival<50) goto increase;
