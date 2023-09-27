<?php

function str($text){
    echo "Convert the string to all lowercase: </br>";
    $convert = strtolower($text);
    echo "$convert";
    echo "</br>";
    echo "Replace brown with red in the string: <br/>";
    $replace = str_replace("brown","red",$text);
    echo $replace;


}

str("The quick brown fox jumps over the lazy dog.");


