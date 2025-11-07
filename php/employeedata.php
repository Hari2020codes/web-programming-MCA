<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="">
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

$query="INSERT INTO emp(id,name,dept,salary) VALUES('$id','$name','$dept','$salary')";
$res=mysqli_query($conn, $query);
if($res)
{
    echo" submitted";
}
else{
    echo "not submitted";
}

// displaying data
echo"<br><h2 align=center>EMPLOYEE DETAILS</h2><br/>";

$sql="SELECT*FROM emp";
$res=mysqli_query($conn,$sql); 
if(mysqli_num_rows($res)>0)
{
echo"<table border=2 align=center>";
echo"<tr><th>Employee ID</th>";
echo"<th>Employee name</th>"; 
echo"<th>Department</th>";
echo"<th>Salary</th></tr>"; 
while($row=mysqli_fetch_assoc($res))
{
echo"<tr><td>$row[id]</td>"; 
echo"<td>$row[name]</td>";
 echo"<td>$row[dept]</td>"; 
echo"<td>$row[salary]</td></tr>";
}
echo"</table>";
}
else
{
echo"0 results";
}
mysqli_close($conn);
?>

</body>

</html>
