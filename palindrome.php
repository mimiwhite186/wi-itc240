<?php

$a = "shadow";

$b =  strrev($a);

    $string = str_split($b);

    $palin = '';

    foreach($string as $value){

        $palin.= $value; 
    }

    if($a == $palin){

        print "The word '{$a}' is palindrome. <br>True";

    } else {

        print "The word '{$a}' is not palindrome.<br>False"; 

    }
?>
