<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="#">
        enter id<input type="text" name="eid"><br>
        enter name<input type="text" name="ename"><br>
        enter department<input type="text" name="dept"><br>
        enter salary<input type="text" name="salary"><br>
        
       Submit <input type="submit" name="submit">
      </form>
<?php
$servername="localhost";
$username="root";
$password="";
$dbname="webdb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo"not connected <br>";
}
else{
    echo "connected successfully<br>";
}

$id=$_POST['eid'];
$dept=$_POST['dept'];
$salary=$_POST['salary'];
$name=$_POST['ename'];

$query="INSERT INTO emp VALUES('$id','$name','$dept','$salary')";
$res=mysqli_query($conn, $query);
if($res)
{
    echo" submitted";
}
else{
    echo "not submitted";
}
?>


</body>

</html>
