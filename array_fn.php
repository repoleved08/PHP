<?php
$fruits = ['orange', 'mango', 'pineapple'];

var_dump(in_array('orange', $fruits));
echo '<br>';

array_push($fruits, 'strawberry', 'quava');
foreach($fruits as $fruit) {
    echo "$fruit <br>";

}
// Merging arrays
$firstNum = [1,2,3];
$secondNum = [4,5,6];

$arrMerger = array_merge($firstNum, $secondNum);

print_r($arrMerger);
// Spread 
$arr4 = [...$firstNum];
print_r($arr4);

?>
