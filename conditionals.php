<?php
$input1 = 8;
$input2 = 18;

if ($input1 < $input2){
    $comparison = "less than";
}
else if ($input1 > $input2){
    $comparison = "greater than";
}
else {
    $comparison = "equal to";
}

echo "The number ".$input1." is ".$comparison." the number ".$input2;