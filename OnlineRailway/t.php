  <?php
$servername="localhost";
$username="root";
$password="";
$dbname="web";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
die("Connection failed:".$conn->connect_error);
}

$sql="INSERT INTO book1 (bfrom,bto,b_date,adult,children,infant,tno) VALUES('".$_POST["from"]."' ,'".$_POST["to"]."','".$_POST["date"]."','".$_POST["adult"]."','".$_POST["children"]."','".$_POST["infant"]."','".$_POST["tno"]."')";
if($conn->query($sql)===TRUE){
 
	  
 
	 $url="transaction.html";

         header("Location: $url"); 
         
  }
else{
echo"Error:".$sql."<br>".$conn->error;
}

 
$conn->close();

?>
 
