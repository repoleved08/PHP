<?php
function registerUser(){
    echo "User registered successfuly";
}
registerUser();

function sumNumbers($num1=20, $num2=30){
    return $num1 + $num2;
}
$sum = sumNumbers();
echo $sum;

// Arrow Functions
// Anonymous 

$multiply = fn($num3, $num4) => $num3 * $num4;
echo $multiply(13, 11);
?>
