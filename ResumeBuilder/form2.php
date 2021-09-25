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

$sql="INSERT INTO table2 (edu) VALUES('".$_GET["edu"]."')";
if($conn->query($sql)===TRUE){
echo"<h1>New Record  Created Successfully!<h1>";
}
else{
echo"Error:".$sql."<br>".$conn->error;
}

 
$conn->close();

?>
<br>
<br>
<br>
<br>
<div align="center" style="background-color:white">
<br>
<a href="form2.html"><button style="color:darkblue"><h1>Go Back </h1></button></a><br><br>
<a href="res.html"><button style="color:darkblue"><h1>Go To Home</h1></button></a><br><br><br><br>
</div>
<div style="background-color:black"><br><br><br><br>
</div>
</body>
</html>


