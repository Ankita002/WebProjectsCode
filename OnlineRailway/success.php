<html>
<head><title></title></head>
<body bgcolor="lightyellow">
<br><br><br>
<?php

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'web');
$name = $_POST["amt"];
 
echo "Your transaction is Sucessfully done. ";
echo "<u>";
echo "Rs.";
echo $name;
echo "</u>";
echo "  has been deduced!";


 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$amt= $_POST["amt"];
$no = $_POST["no"];
$pin= $_POST["pin"];
  
$amt = mysqli_real_escape_string($db, $amt);
$no = mysqli_real_escape_string($db, $no);
$pin = mysqli_real_escape_string($db, $pin);

$sql = "SELECT pin FROM cc WHERE pin='$pin'";
$result= mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
	echo "Sorry...This email already exist..";
}
else
{
	$query = mysqli_query($db, "INSERT INTO cc (amt,cno,pin)VALUES ('$amt', '$no', '$pin')");
 }
if($query)
{
	 $sqlc="SELECT * FROM cc";
$resultc=$db->query($sqlc);

if($resultc->num_rows>0)
{
echo"<table><caption><h1><b>Credit Card Details</b></h1></caption>"; 
echo"<colgroup span=3 style=background-color:lightblue></colgroup>";
echo"<tr><td><h1>Amount</h1></td><td><h1>Credit card number</h1></td></td><td><h1>Pin</h1></td></tr>";
while($row=$result->fetch_assoc()){
echo"<tr><td>".$row["initial"]."</td><td>".$row["cno"]."</td><td>".$row["pin"]."</td></tr>";
}
echo"</table>";
} 
         
}
$db->close(); 
?>
  <a href=text.html>
  Go to Home</a> 
</body>
</html>