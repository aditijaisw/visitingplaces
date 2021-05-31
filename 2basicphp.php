<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
    <style>
    *{
        margin:0;
        padding:0;
    }
    .container{
        max-width:80%;
       
        margin:auto;
    }
    </style>
</head>
<body>
    <div class="container">
        <p>your party status is here</p>
        <?php
           $age=37;
           if($age>18){
            echo "you can go to party"; 
           }
           else{
               echo "you can not go to the party";
           }

           //Array in php
          $lang = array("java","c++","php","html");
        //    echo $lang[1];
        //    echo count($lang);
           //Loops in php
           //while loop
           $a=0;
           while ($a <= 10) {
               echo "<br>the number is";
               echo $a;
               $a++;
           }
           $a=0;
           while ($a < count($lang)) {
            echo "<br>the number is";
            echo $lang[$a];
            $a++;
        }

        //do while loop
        $a=0;
        do {
         echo "<br>the number is";
         echo $a;
         $a++;
        }while ($a < 10);

        //for loop
        for ($a=0; $a <=10; $a++) {
            echo "<br>"; 
            echo $a;
        } 

        //for-each loop
        foreach ($lang as $value ) {
            echo "<br>the value is:";
            echo $value;
        }

        //function in php
        function print5(){
            echo "five";
        }
        print5();
        function print_number($num){
            echo"<br>your number is";
            echo $num;
        }
        print_number(45);
        ?>
    </div>
</body>
</html>