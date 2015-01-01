<html>
<head><?php session_start(); $_SESSION['a']=""; ?>
<title>Registration</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="imagetoolbar" content="no" />
<link rel="stylesheet" href="styles/layout.css" type="text/css" />
<link rel="stylesheet" href="styles/default.css" type="text/css" />
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.slidepanel.setup.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.min.js"></script>
<script type="text/javascript" src="scripts/jquery.cycle.setup.js"></script>
</head>
<body>
<div class="wrapper col0">
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col1">
  <div id="header">
    
    <div id="logo">
      <h1><a href="#"><strong><font color="yellow">M</font></strong>ovie <strong>
	  <font color="yellow">T</font></strong>ick3t</a></h1>
      <p>World's largest movie Tick3t Selling</p>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="overlap">
	<center><br><br>
	<form action="ab.php" method="post">
		<p><b>User name  :&nbsp;&nbsp;&nbsp;&nbsp;</b>
		<input  type="text" class="tbx" name="name">
		<?php echo $_SESSION['u_blank']; ?><?php echo $_SESSION['u_valid']; ?></p>
		
		
		<b>Password&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;</b>
		<input type="password" class="tbx" name="pwd"><br>
		
		
		<p><b>Em@il&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  :&nbsp;&nbsp;&nbsp;&nbsp;</b>
		<input  type="text" class="tbx" name="email">
		<?php echo $_SESSION['e_blank'];?><?php echo $_SESSION['e_valid'];?></p>
		
		
		<p><b>city &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;</b>
		<input  type="text" class="tbx" name="city">
		<?php echo $_SESSION['c_blank']; ?></p>
		
		<p><b>State &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;</b>
		<input  type="text" class="tbx" name="state">
		<?php echo $_SESSION['s_blank']; ?></p>
		
		<p><b>Phone &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;</b>
		<input  type="text" class="tbx" name="ph">
		<?php echo $_SESSION['p_blank'];?><?php echo $_SESSION['p_valid'];?></p>
		<?php
		$_SESSION['u_blank']="";
		$_SESSION['u_valid']="";
		$_SESSION['e_blank']="";
		$_SESSION['e_valid']="";
		$_SESSION['c_blank']="";
		$_SESSION['s_blank']="";
		$_SESSION['p_blank']="";
		$_SESSION['p_valid']="";
		?>
		<input class="bn" type="submit" value="create" name="submit">
		<input class="bn" type="reset" value="reset" name="reset">
		</form>
		<div id="pos">
		<form action="index.html">
		<input class="bn" type="submit" value="back">
		</form>
		</div>
	</form>
	</center><br>		
</div> 

</body>
</html>
<!-- ####################################################################################################### -->
<!-- ####################################################################################################### -->



<!-- ####################################################################################################### -->

