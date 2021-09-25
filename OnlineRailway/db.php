
<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'web');
 
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

$name = $_POST["name"];
$email = $_POST["email"];
$password = $_POST["password"];
 
$name = mysqli_real_escape_string($db, $name);
$email = mysqli_real_escape_string($db, $email);
$password = mysqli_real_escape_string($db, $password);
$sql = "SELECT email FROM users WHERE email='$email'";
$result = mysqli_query($db,$sql);
$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
 
if(mysqli_num_rows($result) == 1)
{
	echo "Sorry...This email already exist..";
}
else
{
	$query = mysqli_query($db, "INSERT INTO users (name, email, password)VALUES ('$name', '$email', '$password')");
 }
if($query)
{
	echo "Thank You! You are now registered.";
        echo "<html>";
         echo "<head>";
  echo "</head>";
  echo "<body>";
  echo "<a href=index.html>";
  echo "Login Here";
echo "</a>";
echo "</body>";
echo "</html>";

 
         
}

$db->close(); 


