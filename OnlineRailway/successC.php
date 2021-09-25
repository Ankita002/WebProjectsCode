 <html>
<head><title></title></head>
<body bgcolor="lightyellow">

<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="INSERT INTO cc (amt,ccn,pin) VALUES('".$_POST["amt"]."' ,'".$_POST["no"]."','".$_POST["pin"]."')";
if($conn->query($sql)===TRUE){
 
	 $sqlc="SELECT * FROM cc";
$resultc=$conn->query($sqlc);

if($resultc->num_rows>0)
{
echo"<center>";
echo"<table><caption><h1><b>Credit Card Details</b></h1></caption>"; 
echo"<colgroup span=4 style=background-color:lightblue></colgroup>";
echo"<tr><td><h1>Initial Balance in Account</h1></td><td><h1>Amount Left in Account</h1></td><td><h1>Credit card number</h1></td></td><td><h1>Pin</h1></td></tr>";

while($row=$resultc->fetch_assoc())
{
if($row["amt"]==$_POST["amt"]){
$row["initial"]=100000;
 $ini=$row["initial"];
   $row["initial"]=$row["initial"]-$row["amt"];
echo"<tr><td>".$ini."</td><td>".$row["initial"]."</td><td>".$row["ccn"]."</td><td>".$row["pin"]."</td></tr>";
 }
}
echo"</table>";
echo"</center>";
} 
}
else{
echo"Error:".$sql."<br>".$conn->error;
}

 
$conn->close();

?>
    
  <a href="text.html">
  Go to Home</a> 
</body>

</html>