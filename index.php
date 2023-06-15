<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Php Title" ?></title>
</head>
<body>
    <h1>
    <?php 
        $text = 'Hello world';
        echo $text;
    ?>
    </h1>
    <?php
        echo ("Welcome to to php");
        print '<br>';
        $output = print ("Welcome to the world of php");
    ?>
    <?php 
        $name = "My name is Ernest Ghansah";
        echo "<h1>$name</h1>";
        echo "<h1>".$name."</h1>";

        $username = "vybrant_user";
        echo $username;

        define('Pie', 3.146, false);
        echo '<br>';
        echo Pie * 5;
        /*
        datatypes in php
        integer
        float/decimal
        boolean
        null
        string        
        */
        echo "<br>";
        $number = 10;

        var_dump($number);

        $str = "What's up?";
        print $str;
    
    ?>
   
</body>
</html>