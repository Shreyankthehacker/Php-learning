<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>this is a paragraph  <?php echo "awesome"?></p>
    <?php 
    //echo "this is also a para" ;
    // $name = "Shreyank\n";
    // echo $name;
    // $string = "Shreyank";
    // $int = 23;
    // $float = 32.34334;
    // $bool = true;
    // $array = [$int , $float,$bool,$string];
    // echo implode(" \n, ",$array);

    ?>

    <p> my name is <?= $name ?> got it</p>
    <?php

    // Super global -------

    
        // echo $_SERVER["DOCUMENT_ROOT"];
        // echo "This is the file name\n";
        // echo $_SERVER['PHP_SELF'];
        // echo $_SERVER["SERVER_NAME"];
        // echo $_SERVER['request_method'];

        echo $_GET['name'];
        echo $_GET["eyecolor"];
        echo $_REQUEST['namesss'];
        echo $_FILES['filename'];
        echo $_COOKIE['cookie'];
        $_SESSION['username'] = "IDek the name";
        echo $_SESSION['username'];


    ?>

</body>
</html>