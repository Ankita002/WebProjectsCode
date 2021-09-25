<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'web');
 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$name = $_POST["email"];
 
 
$name = mysqli_real_escape_string($db, $name);
 
$sql = "SELECT name FROM ocdn WHERE name='$name'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
	echo "Sorry...This email already exist..";
}
else
{
	$query = mysqli_query($db, "INSERT INTO ocdn (name)VALUES ('$name')");
 }
if($query)
{
	echo "Thank You! Your are subscribed to our Newsletter!";
        echo "<html>";
         echo "<head>";
  echo "</head>";
  echo "<body>";
  echo "<a href=ocd.html>";
  echo "Back to Home";
echo "</a>";
echo "</body>";
echo "</html>";
 
 
         
}




  