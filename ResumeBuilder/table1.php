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

$sql="SELECT * FROM table1 ";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo"<table><caption><h1><b>Summary Record</b></h1></caption>"; 
echo"<colgroup span=1 style=background-color:lightgrey></colgroup>";
echo"<tr><td><h1>Summary</h1></td></tr>";
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["summary"]."</td></tr>";
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
<a href="form1.html"><button style="color:darkblue">Back</button></a><h1> 

</div>
</body>
</html>
