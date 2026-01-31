<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);


$a = "Hello";
$b = "World";
echo $a." ".$b;

if($a!=$b)echo "this is false";


$c = 2;
$d = "2";
$e = 2;


echo $c==$d;

echo $c===$d;

echo $c===$e;

/*
true → printed as 1

false → printed as empty string (nothing)

*/

$result = match($c){
1,3,5,6,7=>"variable c is equal to 1",
2=>"Variable c is equal to 2",
default=>"No match found",
};

echo $result;

$fruits = ["Apple","banana","Cherrry"];
echo $fruits[0]; 
unset($fruits[1]);
echo implode(", ",$fruits);
echo "<br>";
$tasks = $fruits + ['Apple','Cheeku'];
print_r($tasks);

$map = [
    
    "name"=>"Shreyank",
    "fruit"=>"apple",
];

print_r($map);

#sorting actually overrides the key and writes the index... 
sort($map);
print_r($map);


$tasks = [...$fruits, ...$fruits];
echo implode(", ",$tasks);
echo "<br>";
array_splice($tasks,1,1,"mango");
echo implode(", ",$tasks);

// echo $tasks[-1]; doesnt work haha 


?>


</body>
</html>