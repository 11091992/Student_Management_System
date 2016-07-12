<?php 
session_start();
if(!isset($_SESSION["username"])){
header("location:officelogin.php");
exit();
}
?>
<?php
 error_reporting(E_ALL);
 ini_set('display_errors','1');
?>
 <?php
 if(isset($_POST['button']))
 {
 
 $subject_code = mysql_real_escape_string($_POST['subject_code']);
    $name = mysql_real_escape_string($_POST['name']);
    $class = mysql_real_escape_string($_POST['class']);
    $total_lectures = mysql_real_escape_string($_POST['total_lectures']);
    $credits = mysql_real_escape_string($_POST['credits']);
	$section = mysql_real_escape_string($_POST['section']);
	$employee_id=mysql_real_escape_string($_POST['employee_id']);
	 $batch_from = mysql_real_escape_string($_POST['batch_from']);
    $batch_to = mysql_real_escape_string($_POST['batch_to']);
	$semester = mysql_real_escape_string($_POST['semester']);
	include "connect.php";
	$e=mysql_query("SELECT * FROM subject WHERE subject_code='$subject_code' AND class='$class' AND section='$section' AND batch_from='$batch_from' AND batch_to='$batch_to'") or die (mysql_error());
	$numrows=mysql_num_rows($e);
	if($numrows == 0)
	{
		$sql=mysql_query("INSERT INTO subject(name,subject_code,total_lectures,semester,credits,class,section,employee_id,batch_from,batch_to,date_added)VALUES('$name','$subject_code','$total_lectures','$semester','$credits','$class','$section','$employee_id','$batch_from','$batch_to',now())") or die(mysql_error());
     $sql9=mysql_query("SELECT * FROM subject WHERE name='$name' AND subject_code='$subject_code' AND class='$class' AND section='$section' AND batch_from='$batch_from' AND batch_to='$batch_to'");   
   while($r=mysql_fetch_array($sql9))
   { $id=$r['id'];
   $tablename=$id."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
	$sql1=mysql_query("CREATE TABLE `". $tablename ."` (id INT(6), registration_no VARCHAR(30),lectures_held VARCHAR(78), attendence VARCHAR(30), midsem VARCHAR(10), endsem VARCHAR(10), grade VARCHAR(30))");
	}
	$sql2=mysql_query("SELECT * FROM student_info WHERE class='$class' AND section='$section' AND batch_from='$batch_from' AND batch_to='$batch_to'") or die (mysql_error());
	while($row=mysql_fetch_array($sql2))
	{
	$id1=$row['id'];
	$registration_no3=$row['registration_no'];
	$sql3=mysql_query("INSERT INTO `". $tablename ."`(id,registration_no)VALUES('$id1','$registration_no3')");
	}
	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
	}
else
	echo "You have already added the subject for the class ".$class."-".$section; 
 }
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

       
        <li><a href="faculty_list.php">Faculty Update</a></li>
        <li><a href="subject_list.php">Allot Subjects</a></li>
		<li><a href="student_list.php">Add Student</a></li>
        <li><a href="student_display.php">Student Details</a></li>
        <li><a href="#">Fees</a></li>  
        <li><?php// echo $class.'-'.$section; ?><?php //echo $name; ?><a href="logoutadmin.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main"> 



<h3>
<div align="right" style="margin-left:352px;">
</br><form action="subject_list.php" enctype="multiple/form-data" name="myform" id="myform" method="post">
<table width="90%" border="0" cellspacing="0" cellpadding="16">
<tr>
<td width="23%"> Subject Code</td>
<td><input type="text" name="subject_code" id="subject_code"/></td>
</tr>
<tr>
<td width="30%"></br> Name</td>
<td></br><input type="text" name="name" id="name"/></td>
</tr>
<tr>
</br><td width="30%"></br>Taught By(Employee ID only)</td>
</br><td></br><input type="text" name="employee_id" id="employee_id"/></td>
</tr>
<tr>
<td width="20%"></br>Total Number of Lectures</td>
<td></br><input type="text" name="total_lectures" id="total_lectures"/></td>
</tr>
<tr>
<td width="20%"></br>Credits</td>
<td></br><input type="text" name="credits" id="credits"/></td>
</tr>
<tr>
<td width="20%"></br>Semester</td>
<td></br><input type="text" name="semester" id="semester"/></td>
</tr>
<tr>
<td width="20%"></br> Class</td>
<td></br><input type="text" name="class" size="4" id="class"/>
</tr>
<tr>
<td width="20%"></br> Section</td>
<td></br><input type="text" name="section" id="section" size=4/></td>
</tr>
<tr>
<td></br>Batch </td>
<td></br><input type="text" name="batch_from" id="batch_from" size="4" maxlength="4"/>&nbsp;&nbsp;-&nbsp;&nbsp;<input type="text" name="batch_to" id="batch_to" size="4" maxlength="4"/></td>
</tr>
<tr>
<td></br>&nbsp;</td>
<td></br><input type="submit" name="button" id="button" value="Add Subject"/></td>
</tr>
<tr>
<td></td>
<td></td>
</tr>
</table>
</form>

        </div>   
      </div><!-- /sidy__content -->
    </div><!-- /sidy -->
    
</body>
</html>