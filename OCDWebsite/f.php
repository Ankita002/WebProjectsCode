 
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'web');
 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$name = $_POST["name"];
 
 
$name = mysqli_real_escape_string($db, $name);
 
$sql = "SELECT name FROM ocd WHERE name='$name'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
	echo "Sorry...This email already exist..";
}
else
{
	$query = mysqli_query($db, "INSERT INTO ocd (name)VALUES ('$name')");
 }
if($query)
{
	echo "Thank You!";
        echo "<html>";
         echo "<head>";
  echo "</head>";
  echo "<body>";
  echo "<a href=ocd.html>";
  echo "Back";
echo "</a>";
echo "</body>";
echo "</html>";
 
 
         
}




  