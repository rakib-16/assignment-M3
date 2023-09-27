<?php

function sorting($grades){
    rsort($grades);
    print_r($grades) ;
};

$grades =[85, 92, 78, 88, 95];

sorting($grades);

