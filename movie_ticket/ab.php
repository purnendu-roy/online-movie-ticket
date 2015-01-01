<?php

session_start();
include("db.php");

$_SESSION['u_blank']="";
$_SESSION['u_valid']="";
$_SESSION['e_blank']="";
$_SESSION['e_valid']="";
$_SESSION['c_blank']="";
$_SESSION['s_blank']="";
$_SESSION['p_blank']="";
$_SESSION['p_valid']="";

$flg=0;

if(isset($_POST['submit']))
{
$n=$_POST["name"];
$p=$_POST["pwd"];
$e=$_POST["email"];
$c=$_POST["city"];
$s=$_POST["state"];
$ph=$_POST["ph"];


//user name validation
	
	if(empty($_POST["name"]))
	{
		$_SESSION['u_blank']="User Name is Required";
		$flg=1;
	}
	else
	{
		if(!preg_match("/^[a-zA-Z ]*$/",$n))
		{
			$_SESSION['u_valid']="Only letters and White Space allowed";
			$flg=1;
		}
	}
	
	
	
	//email validation
	if(empty($_POST["email"]))
	{
		$_SESSION['e_blank']="Email ID is Required";
		$flg=1;
	}
	else
	{
		if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$e))
		{
			$_SESSION['e_valid']="Invalid Email Format";
			$flg=1;
		}
	}
	
	//city cant be blank 
	if(empty($_POST["city"]))
	{
		$_SESSION['c_blank']="City can't be Blank";
		$flg=1;
	}
	
	//state cant be blank
	if(empty($_POST["state"]))
	{
		$_SESSION['s_blank']="State can't be blank";
		$flg=1;
	}
	
	//phone no validation
	
	if(empty($_POST["ph"]))
	{
		$_SESSION['p_blank']="Contact No. is Required";
		$flg=1;
	}
	else
	{
		if(!preg_match("/^[0-9]*$/",$ph))
		{
			$_SESSION['p_valid']="Invalid PHONE NO. Format";
			$flg=1;
		}
	}
}

if($flg==1)
{
		header('location:reg.php');
}
else
{
	$a=mysql_query("insert into log values('$n','$p','$e','$c','$s','$ph')");
	
	$result=mysql_query("select * from log");

	mysql_close($con);
	
	echo "<center>";
	echo "<h1>"."successfully registered"."</h1>"."<br>";
	echo "<a href='index.html'>"."back"."</a>"."<br>";
	echo "</center>";
}
/*$a=mysql_query("insert into log values('$n','$p','$e','$c','$s','$ph')");
if($n==0 || $p==0 || $e==0 || $c==0 || $s==0 || $ph==0)
{
	echo "<center>";
	echo "<h1>"."You can't leave textBox blank"."</h1>"."<br>";
	echo "<a href='reg.php'>"."back"."</a>"."<br>";
	echo "</center>";
}

if($a==0)
{
	echo "<center>";
	echo "<h1>"."You can't leave textBox blank"."</h1>"."<br>";
	echo "<a href='reg.php'>"."back"."</a>"."<br>";
	echo "</center>";
	die(mysql_error());
}
*/


?>