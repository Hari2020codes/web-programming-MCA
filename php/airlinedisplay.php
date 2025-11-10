<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
$servername="localhost";
$username="root";
$password="";
$dbname="airlinedb";
$conn=mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    echo"not connected <br>";
}
else{
    echo "connected successfully<br>";
}
// displaying data
echo"<br><h2 align=center>AIRLINE RESERVATION DETAILS</h2><br/>";
$sql="SELECT*FROM reservation";
$res=mysqli_query($conn,$sql);
if(mysqli_num_rows($res)>0)
{
echo"<table border=2 align=center>";
echo"<tr><th>from </th>";
echo"<th>airline</th>";
echo"<th>departure date</th>";
echo"<th>arrival date</th>";
echo"<th>to</th>";
echo"<th>flight number</th>";
echo"<th>terminal</th></tr>";

while($row=mysqli_fetch_assoc($res))
{
echo"<tr><td>$row[from]</td>";    
echo"<td>$row[airline]</td>";
echo"<td>$row[departure_date]</td>"; 
echo"<td>$row[arrival_date]</td>";
echo"<td>$row[to]</td>";
echo"<td>$row[flight_number]</td>";
echo"<td>$row[terminal]</td></tr>";
}
echo"</table>";
}
else{
    echo "0 result";
}
?>

</body>
</html>