<?php

//use const or define for constant variable

const polity = 'yes';

var_dump(polity);

const VOL_UP = "pagol";

//VOL_UP = "Print"; //it will give error

echo VOL_UP;

//constant variable doesnt has $ but the naming rules are same

//but the convention is to write it in Capital letter

const MEGA_VAR = 25.5;

var_dump(MEGA_VAR); //float(25.5)

//defining const

define("TRIGGERED", false);

echo TRIGGERED?"true":"false"; //false
echo defined("WAR_SAW")?"true":"false"; //false
echo defined("TRIGGERED")?"true":"false"; //true

if(defined("CONDEMNED")){
    // const CONDEMNED = true; //wont work    ---> uncomment the code to check
    define("CONDEMNED", "pilled");
}
echo "\n\n\n var_dump";
var_dump("CONDEMNED");//mysterious behavior

