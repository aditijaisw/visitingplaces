<?php
$insert=false;
if(isset($_POST['name'])){
    //set connection variables
$server="localhost";
$username="root";
$password="";
// create database connection
$con=mysqli_connect($server,$username,$password);
//check for connection success
if(!$con){
    die("connection to this database failed due to".mysqli_connect_error());
}
//echo "success connecting to the db";
//collect for post variables
$name=$_POST["name"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$email=$_POST["email"];
$phone=$_POST["phone"];
$desc=$_POST["desc"];
$sql="INSERT INTO `ustrip`.`tripwithus` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES
 ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
//echo $sql;
//execute the query
if($con->query($sql)==true){//object operator
    //echo "successfully inserted";
    //flag for successful insertion
    $insert=true;
}
else{
    echo "error: $sql<br> $con->error";
}
//close the database connection
$con->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to travel form</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
       <link rel="stylesheet" href="style2.css">
</head>
<body>
    <img src="pg.jpg" alt="IIT kharagpur" id="edit">
    <div class="container">
        <h2>Welcome to IIT kharagpur US Trip form</h2>
        <p>Enter your details and submit this form to confirm your participation in the trip</p>
        <?php
        if($insert==true)
        {
            echo "<p class='sub'>Thanks for submit your form. We are happy to see you joining us for 
            US trip</p>";
        }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="Enter your age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="name" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" 
            placeholder="Enter anyother information here"></textarea>
            <button id="btn" >Submit</button>
           
        </form>
    </div>
    <script src="index.js"></script>
</body>
</html>

