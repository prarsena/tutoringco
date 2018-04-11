<?php

$user_name = "root";
$password = "root";
$database = "tutoringCompany";
$server = "localhost";

mysql_connect("$server","$user_name","$password");

mysql_select_db("$database");

$name=$_POST['name'];
$age=$_POST['age'];
$location=$_POST['location'];
//$subject=print_r( $_POST["check"] );


$order = "INSERT INTO tutor

        (name, age, location)

        VALUES

        ('".$name."',

        '".$age."',
        
        '".$location."'        )";


$result = mysql_query($order);

if($result){

    echo("<br>Input data is succeed");

} else{

    echo("<br>Input data is fail");

}

echo "<br><a href='index.php'>Return to Index</a><br>";
echo "<br><a href='view.php'>View all tutors</a>";
?>