<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial</title>
</head>
<body>
    this is first php website
    <?php
    define('pi',3.14);
        echo "hello world";
        
        //Single line comment

        /*
        this is multiline comment
        */
        $variable1=10;
        $variable2=20;
        echo $variable1;
        echo $variable2;
        echo $variable1+$variable2;
        echo "<br>";

        echo "<h2>operator in php</h2>";
        //arithmetic operator
        echo "the sum of var1+var2 is:";
        echo $variable1+$variable2;
        echo "<br>";
        echo "the sub of var1-var2 is:";
        echo $variable1-$variable2;
        echo "<br>";
        echo "the mul of var1*var2 is:";
        echo $variable1*$variable2;
        echo "<br>";
        echo "the div of var1/var2 is:";
        echo $variable1/$variable2;
        echo "<br>";

        // logical operator
        // and(&&)
        // or(||)
        //xor
        //!
        $myvar1 =(true and true);
        echo var_dump($myvar1);
        echo "<br>";
        $myvar2 =(true and false);
        echo var_dump($myvar2);
        echo "<br>";
        $myvar3 =(false and true);
        echo var_dump($myvar3);
        echo "<br>";
        $myvar4 =(false and false);
        echo var_dump($myvar4);
        echo "<br>";
        $myvar5 =(false or true);
        echo var_dump($myvar5);
        echo "<br>";
        $myvar6 =(false xor false);
        echo var_dump($myvar6);
        echo "<br>";
        $myvar7 =(true xor false);
        echo var_dump($myvar7);
        echo "<br>";


        // assignment operator
        $newvar=$variable2;
        $newvar +=2;
        //$newvar -=2;
        //$newvar *=2;
        //$newvar /=2;
        echo "the value of new variable is";
        echo $newvar;

        // comparision operator
        echo "this value is 1==4";
        echo var_dump(1==4);
        echo "<br>";
        echo "this value is 1>=4";
        echo var_dump(1>=4);
        echo "<br>";
        echo "this value is 1<=4";
        echo var_dump(1<=4);
        echo "<br>";
        echo "this value is 1!=4";
        echo var_dump(1!=4);
        
        // increment/decremant operator
        echo $variable1++;
        echo $variable1;
        echo "<br>";
        echo $variable1--;
        echo $variable1;
        echo "<br>";
        echo ++$variable1;
        echo $variable1;
        echo "<br>";
        echo --$variable1;
        echo $variable1;
        ?>

        <?php
        //Datatypes in php
        //string
        //integer
        //float
        //array
        //boolean
        //object
        echo "<br><h2>Data Type</h1>";
        $var= "this is string";
        echo $var;
        echo var_dump($var);
        echo "<br>";
        $var= 66;
        echo $var;
        echo var_dump($var);
        echo "<br>";
        $var=32.3;
        echo $var;
        echo var_dump($var);
        echo "<br>";
        $var= true;
        echo $var;
        echo var_dump($var);
        echo "<br>";

        echo pi;

        ?>
</body>
</html>