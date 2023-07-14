<?php
// $numbers = [1,2,3,4,5];
// print_r($numbers);
// $names = ["Norman", "Cyrus", "Evans"];

// var_dump($numbers);
// var_dump($names);
// print_r($names)

$person = [
    "first_name" => "Norman",
    "last_name" => "Bii",
    "email" => "norman@gmail.com"
];
echo $person["first_name"];

// Multidimensional arrays
$persons = [
    [
        "name" => "George",
        "age" => 21
    ],
    [
        "name" => "Norman"
    ],
    [
        "name" => "Evans"
    ]
    ];

$jsonString = json_encode($persons);
var_dump($jsonString);

?>
