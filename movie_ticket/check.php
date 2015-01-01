<?php
    session_start();
	include("db.php");
	
	$result=mysql_query("select * from log",$con);
	$flag=0;

    $_SESSION['n']=$_POST['name'];
	while($row=mysql_fetch_array($result))
	{
	   if($row['name']==$_POST['name']&&$row['pass']==$_POST['pwd'])
	    {
	  
		  $flag=1;
	    }
	}
	
	if($flag==0)
	 {
		echo "<center>";
		echo "<h1>"."Invalid login Try Again!!"."</h1>"."<br>";
		echo "<a href='index.html'>"."back"."</a>"."<br>";
		echo "</center>";
		die("");
	 }	
	else
  	{
	     header("location:home.html");
  	}
	
mysql_close($con);
?>
