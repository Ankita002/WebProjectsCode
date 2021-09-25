<html>
<head></head>

<body bgcolor="lightyellow">
<center><h1>Your Ticket has been Cancelled.</h1></center>

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="SELECT * FROM book1";
$result=$conn->query($sql);

if($result->num_rows>0)
{
echo"<center>";
echo"<table><caption><h1><b>Details of Ticket:</b></h1></caption>"; 
echo"<colgroup span=7 style=background-color:lightblue></colgroup>";
echo"<tr><td><h2>From</h2></td><td><h2>To</h2></td></td><td><h2>Date</h2></td><td><h2>No. of Adults</h2></td><td><h2>No. of Children</h2></td><td><h2>Number of infants</h2></td><td><h2>Ticket Number</h2></td></tr>";
while($row=$result->fetch_assoc()){
if($row["tno"]==$_POST["tno"])
{
echo"<tr><td>".$row["bfrom"]."</td><td>".$row["bto"]."</td><td>".$row["b_date"]."</td><td>".$row["adult"]."</td><td>".$row["children"]."</td><td>".$row["infant"]."</td><td>".$row["tno"]."</td></tr>";
}
}
echo"</table>";

echo"<br>";
echo"<a href=text.html>";
echo"Go back to home";
echo"</a>";
echo"</center>";
}
else
{
echo"0 results";
}
$conn->close();
 
 ?>
  
</body>


</html>