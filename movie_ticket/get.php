<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />

</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
   <div id="topnav">
      <ul>
		<li><a href="about.html">About Us</a><span></span></li>
		<li><a href="gallery.html">Movies</a><span></span></li>
		<li><a href="#">links</a><span></span>
          <ul>
            <li><a href="#">Link 1</a></li>
            <li><a href="#">Link 2</a></li>
            <li><a href="#">Link 3</a></li>
          </ul>
        </li>
        <li class="active"><a href="home.html">Homepage</a><span></span></li>
      </ul>
    </div>
    <div class="fl_left">
      <h1><a href="#"><font color="yellow">G</font>et <font color="yellow">T</font>icket</a></h1>
      <p></p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col3">
  <div id="breadcrumb">
    <ul>
      <li class="first">You Are Here</li>
      <li>&#187;</li>
      <li><a href="#">Login</a></li>
      <li>&#187;</li>
      <li><a href="#">Home</a></li>
      <li>&#187;</li>
      <li>&#187;</li>
      <li class="current"><a href="#">Book Ticket</a></li>
    </ul>
  </div>
</div>
<!-- ####################################################################################################### -->
<?php
 session_start();
?>
<div id="over">
	<form action="index.html" method="">
	<center><br><br><br>
	<font color="green" size="5px">User Name :- <?php   echo  $_SESSION['n']; ?></font><br>
	<font color="green" size="5px">Movie name :-<?php echo $_SESSION['mname']; ?> </font><br>
	<font color="green" size="5px">Movie Time :-<?php $tm=$_POST["time"]; echo $tm;?></font><br>
	<font color="green" size="5px">Seats  :- 
	<?php
	include("db.php");
	$mn=$_SESSION['mname'];
	$tm=$_POST["time"];
	$sn=$_POST["seatno"]; echo $sn."<br>";
	
	$result=mysql_query("select * from mov where mname='$mn' and time='$tm'",$con);
	/*if(!$result) die(mysql_error());*/
	$row=mysql_fetch_array($result);
	$tn=$ts=$row['seat'];
	$ts=$ts-$sn;
	echo "Ticket number :- ";
	for($i=1;$i<=$sn;$i++)
	echo $ts+$i." , ";
	echo "<br>";
	echo "Total Price :- ".$sn*$row['price']."<br>";
	mysql_query("update mov set seat='$ts' where mname='$mn' and time='$tm'",$con);
	
	?> </font><br>
	<input type="submit" value="LogOut" name="log">
	</center>
	</form>
	
	
</div>
<!-- ####################################################################################################### -->

</body>
</html>
