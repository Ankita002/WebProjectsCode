<html>
<head>
<title>
</title>
</head>
<body bgcolor="lightyellow">
<center><h1> Result of Enquiry on Trains fare Charges</h1>
</center><br><br><br><br><br><br>
<center>
 <?php

 $name =$_POST["from1"];
$name1=$_POST["to1"];
 
$t=0;
$f=0;
$r=0;
if($name=="Delhi"){


$f=0;
}
if($name1=="Delhi"){


$t=7;
}

if($name=="Mumbai"){


$f=0;
}
if($name1=="Mumbai"){


$t=4;
}

if($name=="Patna"){


$f=0;
}
if($name1=="Patna"){


$t=1;
}


if($name=="Lucknow"){


$f=0;
}
if($name1=="Lucknow"){


$t=2;
}



 
 if($name=="Chennai"){


$f=0;
}
if($name1=="Chennai"){


$t=7;
}

$r= $t - $f;

if($r==1 )
 {
echo "Your fare charge is Rs.1000";
 
 
}
if($r==2  )

{echo "Your fare charge is Rs.2000";
 
 
 

}

if($r==3  )

{echo "Your fare charge is Rs.3000";
 
 

}

if($r==4  )

{echo "Your fare charge is Rs.4000";
 
 
 

}
if($r==5  )

{echo "Your fare charge is Rs.5000";
 
 

}

if($r==6 )

{echo "Your fare charge is Rs.6000";
 
 

}
if($r==7 )

{echo "Your fare charge is Rs.7000";
 
 

}
 


?>



<br>
<br>
 
</a> 


  
Book your Ticket Here:<br>
<form method="post" action="book.html">
<br>
<input type="submit" value="Book">
</form>




</center>
</body>
</html>