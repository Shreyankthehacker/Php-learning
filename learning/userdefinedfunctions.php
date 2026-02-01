<?php

declare(strict_types=1);




// function show(string $a = "random guy"){
//     global $test;
//     echo $a, "is a hero" ;
//     //return $test;
//     return $GLOBALS['test'];
// };


function br(){
    echo "<br>";
};


// show("Shreyank");
// echo "<br>";
// $res = show();
// // show(43);
// $test = function (){
//     return rand(2,100);
// };


// $result= show();


// $test2 = fn ()=> rand(2,100); 


// br();
// echo $result();
// br();
// echo $res();  # this isnt printed bcz till then globally test doesnt have ay significance

class Person {
    public string $name;
    private int $age;

    public function __construct(string $name , int $age){
        $this->age = $age ;
        $this -> name = $name;
    }

    public function introduce():string{
        return "My name is {$this->name} and i am {$this->age} old";
    }
}

$person =new Person("Shreyank",23);
echo $person->introduce();


for ($i = 0;$i<10;$i++){
echo $i;
br();
};

$fruits = [1,2,3,4,4,5,6,7,8,9];

foreach($fruits as $num){
    echo $num;
    br();
}


$fruits = [
    "apple"=>"banana",
    "banana"=>"apple",
    "a"=>"c",
];


foreach($fruits as $key=>$val){
    echo "For the {$key} we have {$val}";
    br();
}

