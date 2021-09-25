<html>
<head>
<title> </title>
</head>
<body>
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="SELECT * FROM table0";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo"<table><caption><h1><b>Details</b></h1></caption>"; 
echo"<colgroup span=3 style=background-color:lightgrey></colgroup>";
echo"<tr><td><h1>Name</h1></td><td><h1>Email ID</h1></td></td><td><h1>Mobile Contact Number</h1></td></tr>";
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["name"]."</td><td>".$row["email"]."</td><td>".$row["mobile"]."</td></tr>";
}
echo"</table>";
}
else
{
echo"0 results";
}
$conn->close();
 
 
  

?>
<br>
<br>

<div align="center">
<a href="start.html"><button style="color:darkblue">Back</button></a>

</div>
</body>
</html>
