<?php
$servername="localhost";
$username="root";
$password="";
$dbname="web";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="SELECT * FROM users";
$result=$conn->query($sql);

if($result->num_rows>0)
{
while($row=$result->fetch_assoc())
{
if($row["email"]==$_POST["userid"] && $row["password"]==$_POST["pass"])
{
$url="text.html";
 header("Location: $url");   
          
 }
}
}
else
{
echo"0 results";
}
$conn->close();
 
 ?> 





















 

 