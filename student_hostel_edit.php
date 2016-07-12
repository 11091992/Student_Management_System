<?php 
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();
}
?>
<?php 
// Script Error Reporting
// error_reporting(E_ALL);
// ini_set('display_errors', '1');
?>
<?php 
//Parse the form data and add inventory item to the system
if(isset($_POST['button3'])) {
	
$pid = mysql_real_escape_string($_POST['thisID']);
//$admno = mysql_real_escape_string($_POST['admno']);
//$rollno = mysql_real_escape_string($_POST['rollno']);
$sname = mysql_real_escape_string($_POST['sname']);
$status = mysql_real_escape_string($_POST['status']);
$particular = mysql_real_escape_string($_POST['particular']);
$as_on = mysql_real_escape_string($_POST['as_on']);
$result = mysql_real_escape_string($_POST['result']);
$remarks = mysql_real_escape_string($_POST['remarks']);
$hname = mysql_real_escape_string($_POST['hname']);
$fno = mysql_real_escape_string($_POST['fno']);
$room = mysql_real_escape_string($_POST['room']);
$bed = mysql_real_escape_string($_POST['bed']);
$fee = mysql_real_escape_string($_POST['fee']);
$regdate = mysql_real_escape_string($_POST['regdate']);
$expdate = mysql_real_escape_string($_POST['expdate']);

include "connect.php";
	$sql1=mysql_query("SELECT * FROM student_info WHERE id='$pid' LIMIT 1" ) or die(mysql_error());
 $productmatch=mysql_num_rows($sql1);
 if($productmatch>0){
	 $row = mysql_fetch_array($sql1);
			$registration_no=$row['registration_no'];
			$id=$row['id'];

	$sql = mysql_query("UPDATE student_hostel SET id='$id',registration_no='$registration_no',sname='$sname',status='$status',
	particular='$particular',as_on='$as_on',result='$result',remarks='$remarks',hname='$hname',fno='$fno',room='$room',bed='$bed',fee='$fee',regdate='$regdate',expdate='$expdate'
	WHERE id='$pid'")or die(mysql_error());
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
 //header("location:student_display.php"); 
    exit();
}	
echo "<script type='text/javascript'>alert('Enter correct roll number else firstly add student's details')</script>";
}
?>

<?php 
// Gather this product's full information for inserting automatically into the edit form below on page
include "connect.php";
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM student_hostel WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
	   $row = mysql_fetch_array($sql); 
             
//$admno = $row["admno"];
//$rollno = $row["rollno"];
$sname = $row["sname"];
$status = $row["status"];
$particular =$row["particular"];
$as_on = $row["as_on"];
$result = $row["result"];
$remarks = $row["remarks"];
$hname = $row["hname"];
$fno = $row["fno"];
$room =$row["room"];
$bed = $row["bed"];
$fee =$row["fee"];
$regdate = $row["regdate"];
$expdate = $row["expdate"];
 
			  
    }
	else {
	    echo "Sorry, this student does not exist.";
		exit();
    }
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
       	<li><a href="student_list.php">Add Student</a></li>
        <li><a href="student_display.php">Student List</a></li>
        <li><a href="table.php">Tables</a></li>
		<li><a href="school.php">School List</a></li>
        <li><a href="logoutadmin.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main"> 
<br><br>
<form action="student_hostel_edit.php?pid=<?php echo $targetID;?>" method="post" name="form4" id="form4" enctype="multiple/form-data">
<font size="4"><b>Admission </b></font>
<table>
<tr><!--
<td><font size="3">Admission No.</font></td><td><input type="text" name="admno" id="admno" value="<?php// echo $admno; ?>"  /></td>
</tr>
<tr>
<td><font size="3">Roll No.</font></td><td> <input type="text" name="rollno"  id="rollno" value="<?php //echo $rollno; ?>" /></td>
</tr>-->
<tr>
<td><font size="3">Student Name</font></td><td><input type="text" name="sname"  id="sname" value="<?php echo $sname; ?>" /></td>
</tr>
<tr>
<td><font size="3">Status</font></td><td><input type="text" name="status" id="status" value="<?php echo $status; ?>"  /></td>
</tr>
</table>
<br><br>

<font size="4"><b>Student Health</b></font><br>
<table>
<tr>

<td><font size="3"> S.No</font></td>
<td><font size="3"> Particular</font></td>
<td><font size="3"> As On</font></td>
<td><font size="3"> Measurement/Result</font></td>
<td><font size="3"> Remark</font></td>

</tr>
<tr>
<td><font size="3"> 1</font></td>
<td><input type="text"  name="particular" id=" particular" value="<?php echo $particular; ?>"  size="8" maxlength="25"/></td>
<td><input type="text" name="as_on" id="as_on" value="<?php echo $as_on; ?>" size="8" maxlength="15"/></td>
<td><input type="text" name="result" id="result" value="<?php echo $result; ?>" size="20" maxlength="15" /></td>
<td><input type="text" name="remarks" id="remarks" value="<?php echo $remarks; ?>"  size="9" maxlength="15"/></td>
</tr>
</table>
</font>
<br>
<br>
<br>
<font size="4"><b>Hostel Details</b></font><br>
<table>
<tr>
<td><font size="3">Hostel Name </font></td><td><input type="text" name="hname"  id="hname" value="<?php echo $hname; ?>" /></td>
</tr>
<tr>
<td><font size="3">Floor No.</font></td><td><input type="text" name="fno" id="fno" value="<?php echo $fno; ?>"  /></td>
</tr>
<tr>
<td><font size="3">Room No.</font> </td><td><input type="text" name="room"  id="room" value="<?php echo $room; ?>"  /></td>
</tr>
<tr>
<td><font size="3">Bedding</font></td><td><input type="text" name="bed"  id="bed" value="<?php echo $bed; ?>" /></td>
</tr>
<tr>
<td><font size="3">Fee Structure</font></td><td><input type="text" name="fee"  id="fee" value="<?php echo $fee; ?>" /></td>
</tr>
<tr>
<td><font size="3">Reg. Date</font></td><td><input type="text" name="regdate"  id="regdate" value="<?php echo $regdate; ?>" /><img src="images2/cal.gif" onclick="javascript:NewCssCal('regdate')" style="cursor:pointer"/></td>
</tr>
<tr>
<td><font size="3">Exp. Date</font></td><td><input type="text" name="expdate"  id="expdate" value="<?php echo $expdate; ?>"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('expdate')" style="cursor:pointer"/></td>
</tr>
<tr><td><input type="hidden" name="thisID" value="<?php echo $targetID; ?>"></td><td>
<input type="submit" name="button3" value="update"/></td></table></form>
</div>
   

                
      </div><!-- /sidy__content -->
    </div><!-- /sidy -->
    

</body>
</html>
