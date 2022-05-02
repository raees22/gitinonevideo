<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php bolte</title>
</head>

<body>
    writing php with 16 others
    <?php


    echo "This is my first code in php";
    $variable1 = 5;
    $variable2  = 2;
    echo $variable1;
    echo $variable2;
    echo $variable1 + $variable2;
    //ARTHMETIC OPERATORS//
    echo "<br>";
    echo "The value of $variable1 + $variable2 is ";
    echo  $variable1 + $variable2;
    echo "<br>";
    echo "<br>";
    echo "The value of $variable1 - $variable2 is ";
    echo  $variable1 - $variable2;
    echo "<br>";
    echo "<br>";
    echo "The value of $variable1 * $variable2 is ";
    echo  $variable1 * $variable2;
    echo "<br>";
    echo "<br>";
    echo "The value of $variable1 / $variable2 is ";
    echo  $variable1 / $variable2;
    echo "<br>";
    //ASSIGNMENT OPERATORS//
    echo "the value of this variable is ";
    $newvar = $variable1;
    $newvar *= 3;
    echo $newvar;
    // COMPARISON OPERATORS//
    echo "<br>";
    echo "The value of 1==4   ";
    echo var_dump(1 == 4);
    echo "<br>";
    echo "The value of 1!=4   ";
    echo var_dump(1 != 4);
    echo "The value of 1<=4   ";
    echo var_dump(1 <= 4);
    echo "The value of 1>=4   ";
    echo var_dump(1 >= 4);
    echo "<br>";
    // INCREMENT/decrement OPERATORS //
    // echo ++$variable1;
    /*echo $variable1++;
  echo "<br>";
   echo $variable1;*/

    // Logical OPERATORS //
    $myVar = (false) and (true);
    echo var_dump($myVar);

    // DATA TYPES IN PHP//

    // STRING//
    //INTEGER//
    //FLOAT//
    // BOOL
    //ARRAY
    // OBJECT

    $myVar = 56;
    echo var_dump($myVar);

    //CONSTANT


    /* define('PI',3.14);  

    echo PI;

    $firstname = $_POST['fname'];

    echo $firstname;*/


    // IF ELSE //

    $age = 45;

    if ($age > 18) {

        echo "you can go to hall";
    }

    // LOOPS IN PHP //

    $languages = array('python', 'perl', 'nodejs', 'php');
    // echo $languages[1];
    $a=0;
        while ($a <=  10) {
            echo "<br> The value of is: ";
            echo $a;
            $a++;
        }
    $a = 0;
    while ($a <  count($languages)) {
        echo "<br> The value of is: ";
        echo $languages[$a];
        $a++;
    }
    //   for($i=0;$i<5;$i++){
    //       echo '<br>'.$i;
    //   }


    //   foreach($languages as $value){
    //       echo "the value from each loop";
    //       echo $value;
    //   }




    ?>

</body>

</html>