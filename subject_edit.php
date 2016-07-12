<?php 
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();
}
?>
<?php 
// Script Error Reporting
error_reporting(E_ALL);
ini_set('display_errors', '1');
?>
<?php 
//Parse the form data and add inventory item to the system
// include "connect.php";
// $k=$_GET['pid'];
 // $sql8=mysql_query("SELECT * FROM subject WHERE id='$k' LIMIT 1") or die(mysql_error());
	// while($t=mysql_fetch_array($sql8))
	// {
	// $subject_code1=$t['subject_code'];
	// $class2=$t['class'];
	// $section3=$t['section'];
	// $batch_from4=$t['batch_from'];
	// $batch_to5=$t['batch_to'];
	// $table=$subject_code1."-".$class2."-".$section3."-".$batch_from4."-".$batch_to5;
		
if (isset($_POST['button'])) {
	$subject_table = mysql_real_escape_string($_POST['subject_table']);	
	$pid = mysql_real_escape_string($_POST['thisID']);
    $subject_code = mysql_real_escape_string($_POST['subject_code']);
    $name = mysql_real_escape_string($_POST['name']);
    $total_lectures = mysql_real_escape_string($_POST['total_lectures']);
    $credits = mysql_real_escape_string($_POST['credits']);
	$class = mysql_real_escape_string($_POST['class']);
	$section = mysql_real_escape_string($_POST['section']);
	$employee_id=mysql_real_escape_string($_POST['employee_id']);
	 $batch_from = mysql_real_escape_string($_POST['batch_from']);
    $batch_to = mysql_real_escape_string($_POST['batch_to']);
	 $semester = mysql_real_escape_string($_POST['semester']);
include "connect.php";
$table=$pid."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
	// See if that product name is an identical match to another product in the system
	$sql = mysql_query("UPDATE subject SET name='$name', credits='$credits', total_lectures='$total_lectures' , semester='$semester', employee_id='$employee_id', batch_from='$batch_from', batch_to='$batch_to', subject_code='$subject_code',class='$class', section='$section' WHERE id='$pid'")or die("Error: ". mysql_error()); 
	$sql3=mysql_query("RENAME TABLE	`". $subject_table ."` TO `".$table."`")or die("Error: ". mysql_error());
	header("location: subject_list.php"); 
    exit();
}
?>
<?php 
// Gather this product's full information for inserting automatically into the edit form below on page
include "connect.php";
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM subject WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
	    while($row = mysql_fetch_array($sql)){ 
           $id=$row["id"];
$name=$row["name"];
$batch_from=$row["batch_from"];
$batch_to=$row["batch_to"];
$section=$row["section"];
$total_lectures=$row["total_lectures"];
$credits=$row["credits"];
$class=$row["class"];
$employee_id=$row["employee_id"];
$subject_code=$row["subject_code"];
$semester=$row["semester"];
 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
 $tablename=$id."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
        }
    } else {
	    echo "Sorry this subject doesn't exist.";
		exit();
    }
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
        <li><a href="student_list.php">Add Details</a></li>
        <li><a href="#">Fees</a></li>  
        <li><?php echo $class.'-'.$section; ?><?php echo $name; ?><a href="logout1.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main"> 
    <hr />
    <a name="SubjectForm" id="SubjectForm"></a>
   
<div align="right" style="margin-left:352px;">
    <form action="subject_edit.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
    <table width="90%" border="0" cellspacing="0" cellpadding="6">
      <tr>
<td width="30%"> </br>Subject Code</td>
<td></br><input type="text" name="subject_code" id="subject_code" value="<?php echo $subject_code; ?>"/></td>
</tr>
<tr>
<td width="20%"> </br>Name</td>
<td></br><input type="text" name="name" id="name" value="<?php echo $name; ?>"/></td>
</tr>
<tr>
<td width="20%"></br>Taught By(Employee ID only)</td>
<td></br><input type="text" name="employee_id" id="employee_id" value="<?php echo $employee_id; ?>"/></td>
</tr>
<tr>
<td width="20%"></br>Total Number of Lectures</td>
<td></br><input type="text" name="total_lectures" id="total_lectures" value="<?php echo $total_lectures; ?>"/></td>
</tr>
<tr>
<td width="20%"></br>Credits</td>
<td></br><input type="text" name="credits" id="credits" value="<?php echo $credits; ?>"/></td>
</tr>
<tr>
<td width="20%"></br>Semester</td>
<td></br><input type="text" name="semester" id="semester" value="<?php echo $semester; ?>"/></td>
</tr>
<tr>
<td width="20%"> </br>Class</td>
<td></br><input type="text" name="class" size="4" id="class" value="<?php echo $class; ?>"/>&nbsp;&nbsp; Section&nbsp;&nbsp;<input type="text" name="section" id="section" size=4 value="<?php echo $section; ?>"/></td>
</tr>
<tr>
<td></br>Batch </td>
<td></br><input type="text" name="batch_from" id="batch_from" size="4" maxlength="4" value="<?php echo $batch_from; ?>"/>&nbsp;&nbsp;-&nbsp;&nbsp;<input type="text" name="batch_to" id="batch_to" size="4" maxlength="4" value="<?php echo $batch_to; ?>"/></td>
</tr>
      <tr>
        <td></br>&nbsp;</td>
        <td><label>
          <input name="thisID" type="hidden" value="<?php echo $targetID; ?>" />
		  <input name="subject_table" type="hidden" value="<?php echo $tablename; ?>" />
          </br><input type="submit" name="button" id="button" value="Make Changes" />
        </label></td>
      </tr>
    </table>
    </form>
	</div>
    <br />
  <br />
  </div>
</div>

       
      </div><!-- /sidy__content -->
    </div><!-- /sidy -->
   


</body>
</html>