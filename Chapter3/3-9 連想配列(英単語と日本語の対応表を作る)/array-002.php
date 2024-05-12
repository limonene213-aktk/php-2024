<?php

$fruits=[
    'apple' => 'りんご',
    'grape' => 'ぶどう',
    'lemon' => 'レモン',
    'tomato' => 'トマト',
    'peach' => 'もも'
];

print_r($fruits);

$JSON = json_encode($fruits);
echo $JSON;

$array2 = json_decode($JSON, true);
print_r($array2);

?>