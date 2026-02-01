<?php

// $string = "he glo wo rld";
// echo strlen($string);
// echo "<br>";
// echo strpos($string,"l");
// echo "This says the first position of a particualr char in string";
// echo str_replace("world","Shreyank",$string );
// echo strtolower($string);
// echo strtoupper($string);
// echo "<br>";
// echo substr($string , 2, -2);
// echo "<br>";

function print_array($a){
    echo implode(" ",$a);
}

echo "<br> <h1>Math function</h1>";
echo abs(-3);
echo round(3.455);
echo pow(2,3);
echo "<br>";
echo rand(1,10);

$array = ['a','b',"c"];
echo count($array);
echo is_array($array);
array_push($array,23);
echo "<br>";
echo implode($array);


echo "<br>";
echo date("Y-m-d H:i:s");
echo "<br>";
echo time();