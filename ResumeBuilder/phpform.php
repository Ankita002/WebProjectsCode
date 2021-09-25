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

$sql="INSERT INTO contacts (name,desig,mobile,homeno,oadd,radd,id) VALUES('".$_GET["name"]."' ,'".$_GET["desig"]."','".$_GET["mobile"]."','".$_GET["homeno"]."','".$_GET["oadd"]."','".$_GET["radd"]."','".$_GET["id"]."')";
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
<div align="center" style="background-color:skyblue">
<br>
<a href="form.html"><button style="color:green"><h1>Go Back To Form</h1></button></a><br><br>
<a href="first.html"><button style="color:green"><h1>Go To Home</h1></button></a><br><br><br><br>
</div>
<div style="background-color:black"><br><br><br><br>
</div>
</body>
</html>


