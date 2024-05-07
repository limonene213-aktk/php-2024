<?php

$array_name = [
            "A" => "あ",
            "B" => "い",
            "C" => "う"
        ];

echo "追加前の配列の様子："."\n";
/*
foreach ($array_name as $a =>$b){
    print ($a. ':' .$b. "\n");
    }
*/
print_r($array_name);
print"\n";

$array_name["D"] = "え";

echo "追加「後」の配列の様子："."\n";

/*
foreach ($array_name as $a =>$b){
    print ($a. ':' .$b. "\n");
    }
*/
var_dump($array_name);

?>