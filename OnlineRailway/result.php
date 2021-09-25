<html>
<head>
<title>
</title>
</head>
<body bgcolor="lightyellow">
<center><h1> Result of Enquiry on Trains till Departure</h1>
</center><br><br><br><br><br><br>
<center>
 <?php
$name = $_POST["passengers"];
if($name<11)
 {
echo "Your seat is available ";
 
echo "Book Here";
echo "<a href=book.html>";
echo "</a>";
}
else

{
$url="no.html";
 header("Location: $url"); 

}
?>
<br>
<br>
 
</a> 


 <h1> Seat is Available</h1>
Book your Ticket Here:<br>
<form method="post" action="book.html">
<br>
<input type="submit" value="Book">
</form>




</center>
</body>
</html>