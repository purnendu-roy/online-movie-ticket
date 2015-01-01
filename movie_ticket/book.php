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
      <h1><a href="#"><font color="yellow">B</font>ook <font color="yellow">T</font>icket</a></h1>
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


<!-- ####################################################################################################### -->
<div id="over">
	
	<br><center><font color="green" size="4px" ><b>Movie Name :
	<?php
	session_start();
	$_SESSION['mname']=$_GET["m"];
	$mn=$_GET["m"];
	echo $mn;
?></b></center></font>
	<form action="get.php" method="post"><br>
	
		
			<font color="green" size="15px">Timing<br></font>
			<font color="black" size="5px">
				<input type="radio" name="time" value="10:00-12:00AM">10:00-12:00AM<br>
				<input type="radio" name="time" value="2:30-4:30PM">2:30-4:30PM<br>
				<input type="radio" name="time" value="5:30-7:30PM">5:30-7:30PM<br>
				<input type="radio" name="time" value="8:00-10:00PM">8:00-10:00PM
			</font><br>
		
		
		<font color="green" size="15px">Seat<br></font>
		 <select name="seatno">
			<option value="1">1</option>
			<option value="2">2</option>
			<option value="3">3</option>
			<option value="4">4</option>
		 </select>
	
	<br><br>
	<center><input  type="submit"  value="book"></center>
	</form>
	
</div>
<!-- ####################################################################################################### -->

</body>
</html>
