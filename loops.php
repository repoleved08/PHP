<?php
// For loop
$numbers = [1,2,3,4,5];

for ($i=0; $i < count($numbers); $i++) { 
    echo ($numbers[$i]);
}

$posts = ["First Post", "Second Post", "Third Post"];

// for($p = 0; $p < count($posts); $p++){
//     print_r($posts[$p]);
// }
foreach($posts as $post){
    echo $post;
}
?>
