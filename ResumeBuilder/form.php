<html>
<head><title>Corporate Data Manangement</title>
    <link rel="php" type="text/php" href="phpform.php">
    </head>
<body bgcolor="skyblue">
        <h1><u>Corporate Data Storage System</u> <h1> 
    <br>
            <a href="first.html"><button type="button" size="36">Go To Home</button></a>
      <br>
<form method="GET" align="center" >
    <label name="data" align="center"><u>Data Form</u></label><br>
    <td><tr>Name</tr><tr> <input name="name"type="text" size="40"></tr></td><br><br>
    <td><tr>Designation</tr><tr> <input name="desig"type="text"size="40"></tr></td><br><br>
    <td> <tr>Mobile Number(Office) </tr><tr><input name="mobile"type="text"size="40" ></tr></td><br><br>
<td><tr>Contact Number</tr><tr><input name="homeno"type="text" size="40"></tr> </td><br><br>
    <td><tr> Address(Office)</tr><tr><textarea  name="oadd" cols="40" rows="4" ></textarea> </tr></td><br><br>
      
<td><tr>Residential Address</tr><tr> <textarea  name="radd"cols="40" rows="4" ></textarea></tr></td><br><br>
    <td>  <tr>Email Id</tr<tr><input name="id" type="text"size="40"></tr></td><br><br>
    <td><tr><input type="submit" value="Store" name="submit"size="40"></tr></td><br><br>
    
    
        </form>
            <td><tr><input type="submit" value="View Table" size="40"></tr></td></h1>
            <?php
if($isset($_GET["submit"])){
$servername="localhost";
$username="root";
$password="";
$dbname="myDB";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="INSERT INTO contacts (name,desig,mobile,homeno,oadd,radd,id) VALUES('".$_GET["name"]."' ,'".$_GET["desig"]."','".$_GET["mobile"]."','".$_GET["homeno"]."','".$_GET["oadd"]."','".$_GET["radd"]."','".$_GET["id"]."')";
if($conn->query($sql)===TRUE){
echo"New Record  Created Successfully!";
}
else{
echo"Error:".$sql."<br>".$conn->error;
}

 
$conn->close();
}
?>
    
  
</body>

</html>