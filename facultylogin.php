<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (isset($_SESSION["employee_id"])) {
    header("location: faculty.php"); 
    exit();}
$employee_id=$_SESSION['employee_id'];
?>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
  </head>

  <body>
<div id="wrap">
  <div id="top">
    <div class="rights"> </div>
    <div id="search"> </div>
    <div class="lefts">
      <h1>Welcome</h1>
     
    </div>
  </div>
  <div id="topmenu">
    <div class="rights"></div>
    <div class="lefts">
      <ul>
        <li><a href="#">HOME</a></li>
        
        <li>
    <?php echo $class.'-'.$section; ?><?php echo $name; ?><a href="logout1.php">Logout</a></li>
       
      </ul>
    </div>
  </div>
<div id="main">

						 
						 <?php 
						 $form="<form action='./facultylogin.php' method='post'>
<table>
<tr>
<td width='100'>&nbsp;</td>
<td width='250'></br><b><font size='5'>Employee ID</font></b></td>
<td></br><input type='text' name='employee_id'/></td>
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
$employee_id=$_POST['employee_id'];
$password=$_POST['password'];
if($employee_id){
if($password){
require("connect.php");
$query=mysql_query("SELECT * FROM faculty_info WHERE employee_id='$employee_id'");
$numrows=mysql_num_rows($query);
if($numrows==1){
$row=mysql_fetch_assoc($query);
$dbid=$row['id'];
$dbuser=$row['employee_id'];
$dbpass=$row['password'];
if($password==$dbpass)
{
$_SESSION['userid']=$dbid;
$_SESSION['employee_id']=$dbuser; 
header("location: faculty.php");
//echo "<font style='color:white;' size='5'>You are logged in as <b>$employee_id</b>. &nbsp;<a href='./faculty.php'><font style='color:white;' size='5'>Click here</font></a>";
}
else
echo "You did not enter the correct password.$form";
}
else
echo "The employee_id you entered was not found.$form";
mysql_close();
}
else
echo "You must enter your password.$form";
}
else 
echo "You must enter your employee_id.$form";
}
else
echo $form;

?>

</div>
</div>
</body>
</html>