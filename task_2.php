<?php
function is_odd($n) {
    return $n % 2 != 0;
};
$numbers=[1,2,3,4,5,6,7,8,9,10];
$evenNumbers = array_filter($numbers, 'is_odd');
print_r($evenNumbers);


