<?php
// Conditional statements
$age = 10;

if ($age >= 18) {
    echo "You are allowed to vote";
} else{
    echo "Not eligible to vote";
}

$currentMonth = date("H");

echo $currentMonth;

$post = [];

// if (!empty($post)) {
//     echo $post[0];
// }

//ternary operator
//echo !empty($post) ? $post[0] : "No post";
echo $post[0] ?? 'No post';




$favcolor = 'red';

switch ($favcolor) {
    case 'red':
        echo "Your favorite color is {$favcolor}";
        break;
    
    default:
        echo "You don't have a fav color";
        break;
}
?>
