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
  $name = mysql_real_escape_string($_POST['name']);

 $employee_id = mysql_real_escape_string($_POST['employee_id']);
      
	$designation = mysql_real_escape_string($_POST['designation']);
	 $email_id = mysql_real_escape_string($_POST['email_id']);
	$password=mysql_real_escape_string($_POST['password']);
	$category=mysql_real_escape_string($_POST['category']);
	$nationality=mysql_real_escape_string($_POST['nationality']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$address=mysql_real_escape_string($_POST['address']);
	
$phone_no=mysql_real_escape_string($_POST['phone_no']);	
	$gender=mysql_real_escape_string($_POST['gender']);
	include "connect.php";
	$sql=mysql_query("SELECT * FROM faculty_info WHERE employee_id='$employee_id' LIMIT 1");
 $productmatch=mysql_num_rows($sql);
 if($productmatch>0){
 echo 'Sorry you tried to place a duplicate "Employee ID", <a href="faculty_list.php">Click Here</a>';
 exit();
 }
 $sql=mysql_query("INSERT INTO faculty_info(name,gender,designation,employee_id,password,email_id,address,nationality,category,dob,phone_no,date_added)VALUES('$name','$gender','$designation','$employee_id','$password','$email_id','$address','$nationality','$category','$dob','$phone_no',now())") or die(mysql_error());
// $newname="$employee_id.jpg";
 //move_uploaded_file($_FILES["fileField"]["tmp_name"], "../faculty_images/$newname");
 echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
 }
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
   <script src="datetimepicker_css.js"></script>
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
      <li><a href="faculty_list.php">Add Faculty</a></li>
        <li><a href="faculty_added.php">Faculty List</a></li>
        <li><a href="subject_list.php">Add Subject</a></li>
		<li><a href="subject_added.php">Subject List</a></li>
				<li><a href="student_list.php">Add Student</a></li>
        <li><a href="student_display.php">Student List</a></li>
        <li><a href="#">Fees Details</a></li>
        <li><a href="logoutadmin.php">Logout</font><a name="facultyform" id="facultyform"></a></li>  

      </ul>
    </div>
  </div>
<div id="main">

<h3>
<div align="right" style="margin-left:352px;">
<form action="faculty_list.php" enctype="multiple/form-data" name="myform" id="myform" method="post">
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="20%"> Name</td>
<td><input type="text" name="name" id="name"/></td>
</tr>
<tr>
<td></br>Employee ID</td>
<td></br><input type="text" name="employee_id" id="employee_id"/></td>
</tr>
<tr>
<td></br>Designation</td>
<td></br><input type="text" name="designation" id="designation"/></td>
</tr>
<tr>
<td width="20%"></br>Email ID</td>
<td></br><input type="text" name="email_id" id="email_id"/></td>
</tr>
<tr>
<td width="20%"></br>Password</td>
<td></br><input type="password" name="password" id="password"/></td>
</tr>
<tr>
<td width="20%"></br>Category</td>
<td></br><input type="text" name="category" id="category"/>
</tr>
<tr>
<td width="20%"></br>Nationality</td>
<td></br><input type="text" name="nationality" id="nationality"/>
</tr>
<tr>
<td width="20%"></br>Date of Birth</td>
<td></br><input type="text" name="dob" id="dob"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('dob')" style="cursor:pointer"/>
</tr>
<tr>
<td width="20%"></br>Address</td>
<td></br><input type="text" name="address" id="address"/>
</tr>
<tr>
<td width="20%"></br>Phone Number</td>
<td></br><input type="text" name="phone_no" id="phone_no"/>
</tr>
<tr>
<td width="20%"></br>Gender</td>
<td> </br> <input type="radio" name="gender" id="gender" value='male'/>Male&nbsp;&nbsp;
   <input type="radio" name="gender" id="gender" value='female'/>Female
   </td>
</tr>
<tr>
<td></br>&nbsp;</td>
<td></br><input type="submit" name="button" id="button" value="Add faculty"/></td>
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