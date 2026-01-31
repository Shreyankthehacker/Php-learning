<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/calculator.css" />
    <title>Document</title>
</head>
<body>
    


<form action = "<?php  echo htmlspecialchars($_SERVER["PHP_SELF"])?>" method = "POST">
    
<input type = "number" name = "num1" placeholder="Number one" value = "<?= htmlspecialchars($_POST['num1'] ?? '') ?>">
<select name = "operator">

<option value="add">+</option>
<option value="subtract">-</option>
<option value="multiply">*</option>
<option value="divide">÷</option>
<option value="modulus">%</option>
<option value="power">^</option>

</select>
<input type = "number" name = "num2" placeholder="Number two" value = "<?= htmlspecialchars($_POST['num2'] ?? '') ?>">

<button>calculate </button>

</form>

<?php

if($_SERVER['REQUEST_METHOD']=="POST"){

    $num1 = filter_input(INPUT_POST,'num1',FILTER_SANITIZE_NUMBER_FLOAT);
    $num2 = filter_input(INPUT_POST,'num2',FILTER_SANITIZE_NUMBER_FLOAT);
    $operator = htmlspecialchars($_POST['operator']);
    

    //error handlers 
    $errors = false;
    $errors = empty($num1) or empty($num2) or empty($operator);
    if($errors){
        echo "<p class='error'>Fill in all the fields please</p>";
        $errors=true;
    }

    $errors = !(is_numeric($num1) and is_numeric($num2));
    if($errors){
        echo "<p> class = 'error'>Please enter a number </p>";
    }

    if(!$errors){
        // proceed with calculaton
        $result = match ($operator) {
            'add'      => $num1 + $num2,
            'subtract' => $num1 - $num2,
            'multiply' => $num1 * $num2,
            'divide'   => $num2 != 0 ? $num1 / $num2 : null,
            'modulus'  => $num2 != 0 ? $num1 % $num2 : null,
            default    => null,
        };

        echo "<p>Result: $result</p>";


    }

}


?>




</body>
</html>