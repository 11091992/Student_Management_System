<?php
error_reporting(E_ALL ^ E_NOTICE);
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();}
$username=$_SESSION['username'];
?>
						 
						 <?php 
						 $form="<form action='./officelogin.php' method='post'>
<table>
<tr>
<td width='100'>&nbsp;</td>
<td width='250'></br><b><font size='5'>Username</font></b></td>
<td></br><input type='text' name='username'/></td>
</tr>
<tr>
<td width='100'>&nbsp;</td>
<td width='250'></br><b><font size='5'>Password</font></b></td>
<td></br><input type='password' name='password'/></td>
</tr>
<tr>
<td width='100'>&nbsp;</td>
<td width='250'></br><b><font size='5'>Role</font></b></td>
<td></br><select name='school'>
  <option value=''></option>
  <option value='student'> Student </option>
  <option value='faculty'> Faculty </option>
  <option value='office'> Office </option>
</select></br></td>
</tr>
<tr>
<td width='100'>&nbsp;</td>
<td>&nbsp;</td>
<td></br><input type='submit' value='Login' name='login'/></td>
</tr>
</table>
</form>";
if($_POST['login']){
$username=$_POST['username'];
$password=$_POST['password'];
$role=$_POST['role'];
if($username){
if($password){
if($role){
require("connect.php");
if($role=='office'){
$query=mysql_query("SELECT * FROM office WHERE username='$username'");
$numrows=mysql_num_rows($query);
if($numrows==1){
$row=mysql_fetch_assoc($query);
$dbid=$row['id'];
$dbuser=$row['username'];
$dbpass=$row['password'];
if($password==$dbpass)
{
$_SESSION['userid']=$dbid;
$_SESSION['username']=$dbuser; 
header("location: index.php");      
//echo "<font style='color:white;' size='5'>You are logged in as <b>$username</b>. &nbsp;<a href='./index.php'><font style='color:white;' size='5'>Click here</font></a>";
}
else
echo "You did not enter the correct password.$form";
}
else
echo "The Roll Number name you entered was not found.$form";
}
else if($role='student'){
$query=mysql_query("SELECT * FROM student_info WHERE registration_no='$username'");
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
}
else if($role='faculty'){
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
echo "The Roll Number name you entered was not found.$form";
}
}

else
echo "Mention the role.$form";
}
else
echo "You did not enter the correct password.$form";
}
else
echo "The username you entered was not found.$form";
}
 // else
 // echo "You must enter your username/password.$form";
 // }
else
echo $form;
?>

