<?php
//    data from webfront.html
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name=$_POST['name'];
    $age=$_POST['age'];
    echo"Hello $name <br>";
    echo $age;
}