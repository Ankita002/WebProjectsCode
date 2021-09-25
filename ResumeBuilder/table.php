<html>
<head>
<title> inserting</title>
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

$sql="SELECT * FROM contacts ";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo"<table><caption><h1><b>Contact Details</b></h1></caption>"; 
echo"<colgroup span=7 style=background-color:skyblue></colgroup>";
echo"<tr><td><h1>Name</h1></td><td><h1>Designation</h1></td></td><td><h1>Office/Mobile Contact Number</h1></td><td><h1>Home Contact Number</h1></td><td><h1>Office Address</h1></td><td><h1>Residential Address</h1></td><td><h1>Email ID</h1></td></tr>";
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["name"]."</td><td>".$row["desig"]."</td><td>".$row["mobile"]."</td><td>".$row["homeno"]."</td><td>".$row["oadd"]."</td><td>".$row["radd"]."</td><td>".$row["id"]."</td></tr>";
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
<a href="first.html"><button style="color:green">Back</button></a><h1>                   </h1><a href="form.html"><button style="color:green">Add New Contact</button></a>

</div>
</body>
</html>
