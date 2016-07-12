<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (isset($_SESSION["registration_no"])) {
    header("location: student.php"); 
    exit();}
$registration_no=$_SESSION['registration_no'];
?>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
	</head>

	<body>
		<div id="main">
						 
						 <?php 
						 $form="<form action='./studentlogin.php' method='post'>
<table>
<tr>
<td width='100'>&nbsp;</td>
<td width='250'></br><b><font size='5'>Roll Number</font></b></td>
<td></br><input type='text' name='registration_no'/></td>
</tr>
<tr>
<td width='100'>&nbsp;</td>
<td width='250'></br><b><font size='5'>Password</font></b></td>
<td></br><input type='password' name='password'/></td>
</tr>
<tr>
<td width='100'>&nbsp;</td>
<td>&nbsp;</td>
<td></br><input type='submit' value='Login' name='login'/></td>
</tr>
</table>
</form>";
if($_POST['login']){
$registration_no=$_POST['registration_no'];
$password=$_POST['password'];
if($registration_no){
if($password){
require("connect.php");
$query=mysql_query("SELECT * FROM student_info WHERE registration_no='$registration_no'");
$numrows=mysql_num_rows($query);
if($numrows==1){
$row=mysql_fetch_assoc($query);
$dbid=$row['id'];
$dbuser=$row['registration_no'];
$dbpass=$row['password'];
if($password==$dbpass)
{
$_SESSION['userid']=$dbid;
$_SESSION['registration_no']=$dbuser; 
header("location: student.php");
//echo "<font style='color:white;' size='5'>You are logged in as <b>$registration_no</b>. &nbsp;<a href='./student.php'><font style='color:white;' size='5'>Click here</font></a>";
}
else
echo "You did not enter the correct password.$form";
}
else
echo "The Roll Number name you entered was not found.$form";
mysql_close();
}
else
echo "You must enter your password.$form";
}
else 
echo "You must enter your Roll Number.$form";
}
else
echo $form;

?>
</div>
</body>
</html>

