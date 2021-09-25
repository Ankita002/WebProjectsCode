<html>
<head>
<title> </title>
</head>
<body>
<div align="center">
<?php 
$servername="localhost";
$username="root";
$password="";
$dbname="mydb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="SELECT * FROM note";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo"<table><caption><h1><b>Your saved notes</b></h1></caption>"; 
echo"<colgroup span=1 style=background-color:lightgrey></colgroup>";
echo"<tr><td><h1>Notes</h1></td></tr>";
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["note"]."</td></tr>";
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
</div>
<div align="center">
<a href="start.html"><button style="color:darkblue">Back</button></a><h1> 

</div>
</body>
</html>