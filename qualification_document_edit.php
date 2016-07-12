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
if(isset($_POST['button2'])) {
$pid = mysql_real_escape_string($_POST['thisID']);
//$admno=mysql_real_escape_string($_POST['admno']);
//$rollno=mysql_real_escape_string($_POST['rollno']);
$sname=mysql_real_escape_string($_POST['sname']);
$status=mysql_real_escape_string($_POST['status']);
$focc=mysql_real_escape_string($_POST['focc']);
$fdesig=mysql_real_escape_string($_POST['fdesig']);
$fjob=mysql_real_escape_string($_POST['fjob']);
$forg=mysql_real_escape_string($_POST['forg']);
$fincome=mysql_real_escape_string($_POST['fincome']);
$mocc=mysql_real_escape_string($_POST['mocc']);
$mdesig=mysql_real_escape_string($_POST['mdesig']);
$mjob=mysql_real_escape_string($_POST['mjob']);
$morg=mysql_real_escape_string($_POST['morg']);
$mincome=mysql_real_escape_string($_POST['mincome']);
$fmob=mysql_real_escape_string($_POST['fmob']);
$femail=mysql_real_escape_string($_POST['femail']);
$mmob=mysql_real_escape_string($_POST['mmob']);
$memail=mysql_real_escape_string($_POST['memail']);
$gmob=mysql_real_escape_string($_POST['gmob']);
$gemail=mysql_real_escape_string($_POST['gemail']);
$emob=mysql_real_escape_string($_POST['emob']);
$eemail=mysql_real_escape_string($_POST['eemail']);
$smob=mysql_real_escape_string($_POST['smob']);
$semail=mysql_real_escape_string($_POST['semail']);
$lgname=mysql_real_escape_string($_POST['lgname']);
$lgaddress=mysql_real_escape_string($_POST['lgaddress']);
$desig=mysql_real_escape_string($_POST['desig']);
$relation=mysql_real_escape_string($_POST['relation']);
$lgph=mysql_real_escape_string($_POST['lgph']);
	
	include "connect.php";
	$sql1=mysql_query("SELECT * FROM student_info WHERE id='$pid' LIMIT 1" ) or die(mysql_error());
 $productmatch=mysql_num_rows($sql1);
 if($productmatch>0){
	 $row = mysql_fetch_array($sql1);
			$registration_no=$row['registration_no'];
			//$admno=$row['admno'];
			//$rollno=$row['rollno'];
	$sql = mysql_query("UPDATE qualification_document SET sname='$sname',status='$status',focc='$focc',
	fdesig='$fdesig',fjob='$fjob',forg='$forg',fincome='$fincome',mocc='$mocc',mdesig='$mdesig',mjob='$mjob',morg='$morg',mincome='$mincome',fmob='$fmob',femail='$femail',mmob='$mmob',
 memail='$memail',gmob='$gmob',gemail='$gemail',emob='$emob',eemail='$eemail',smob='$smob',semail='$semail',lgname='$lgname',lgaddress='$lgaddress',desig='$desig',relation='$relation',
 lgph='$lgph' WHERE id='$pid'")or die(mysql_error());
	
if ($_FILES['ssign']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$registration_no.jpg";
	    move_uploaded_file($_FILES['ssign']['tmp_name'], "student_sign/$newname");
	}

if ($_FILES['fsign']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$registration_no.jpg";
	    move_uploaded_file($_FILES['fsign']['tmp_name'], "father_sign/$newname");
	}
if ($_FILES['msign']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$registration_no.jpg";
	    move_uploaded_file($_FILES['msign']['tmp_name'], "mother_sign/$newname");
	}
if ($_FILES['fphoto']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$registration_no.jpg";
	    move_uploaded_file($_FILES['fphoto']['tmp_name'], "father_images/$newname");
	}
if ($_FILES['mphoto']['tmp_name'] != "") {
	    // Place image in the folder 
	    $newname = "$registration_no.jpg";
	    move_uploaded_file($_FILES['mphoto']['tmp_name'], "mother_images/$newname");
	}
	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
 //header("location:qualification_document_edit.php"); 
    //exit();
}	
echo "<script type='text/javascript'>alert('Enter correct roll number else firstly add student's details')</script>";
}
?>
<?php 
// Gather this product's full information for inserting automatically into the edit form below on page
include "connect.php";
if (isset($_GET['pid'])) {
	
	$targetID = $_GET['pid'];
	
    $sql = mysql_query("SELECT * FROM qualification_document WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
    $productCount = mysql_num_rows($sql); // count the output amount
	
    if ($productCount > 0) {
	   $row = mysql_fetch_array($sql);
            
//$admno=$row["admno"];
//$rollno=$row["rollno"];
$sname=$row["sname"];
$status=$row["status"];
$focc=$row["focc"];
$fdesig=$row["fdesig"];
$fjob=$row["fjob"];
$forg=$row["forg"];
$fincome=$row["fincome"];
$mocc=$row["mocc"];
$mdesig=$row["mdesig"];
$mjob=$row["mjob"];
$morg=$row["morg"];
$mincome=$row["mincome"];
$fmob=$row["fmob"];
$femail=$row["femail"];
$mmob=$row["mmob"];
$memail=$row["memail"];
$gmob=$row["gmob"];
$gemail=$row["gemail"];
$emob=$row["emob"];
$eemail=$row["eemail"];
$smob=$row["smob"];
$semail=$row["semail"];
$lgname=$row["lgname"];
$lgaddress=$row["lgaddress"];
$desig=$row["desig"];
$relation=$row["relation"];
$lgph=$row["lgph"]; 
			
    } else {
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
<form action="qualification_document_edit.php?pid=<?php echo $targetID;?>" enctype="multipart/form-data" name="myForm" id="myform" value="<?php echo $myform; ?>"  method="post">
<h1>Admission</h1>
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr></br></br><font size='5' style="font-style: bold;">Student detail</font></tr>
<tr>
<!--<td>Admission No.</td>
<td><input type="text" name="admno" id="admno" value="<?php //echo $admno; ?>"  size="15"/></td>
<td>Roll No.</td>
<td><input type="text" name="rollno" id="rollno" value="<?php// echo $rollno; ?>" size="15"/></td>-->
<td><br>Student Name</td>
<td><br><input type="text" name="sname" id="sname" value="<?php echo $sname; ?>"  size="15"/></td>
<td><br>Status</td>
<td><br><input type="text" name="status" id="status" value="<?php echo $status; ?>"  size="15"/></td></tr>
</table>

<table width="80%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br>Parent Details</font></tr>
<tr>
<td></br>Father</td>
<td>Occupation<input type="text" name="focc" id="focc" value="<?php echo $focc; ?>"  size="15"/></td>
<td>Designation<input type="text" name="fdesig" id="fdesig" value="<?php echo $fdesig; ?>"  size="15"/></td>
<td>Job Type<select name="fjob" id="fjob">
<option value="<?php echo $fjob; ?>"size="20"><?php echo $fjob; ?></option>
<option value="business">Bussiness </option>
<option value="service">Service </option>
<option value="teacher">Teaching </option>
<option value="anyother">None </option>
</select></td>	 
<td>Org. Type<input type="text" name="forg" id="forg" value="<?php echo $forg; ?>" size="15"/></td>
<td>Ann. Income<input type="text" name="fincome" id="fincome" value="<?php echo $fincome; ?>" size="15"/></td>
</tr>
<tr>
<td>Mother</td>
<td><input type="text" name="mocc" id="mocc" value="<?php echo $mocc; ?>"  size="15"/></td>
<td><input type="text" name="mdesig" id="mdesig" value="<?php echo $mdesig; ?>" size="15"/></td>
<td><select name="mjob" id="mjob">
<option value="<?php echo $mjob; ?>"size="20"><?php echo $mjob; ?></option>
<option value="business">Bussiness </option>
<option value="service">Service </option>
<option value="teacher">Teaching </option>
<option value="anyother">None</option>
</select></td>	 
<td><input type="text" name="morg" id="morg" value="<?php echo $morg; ?>" size="15"/></td>
<td><input type="text" name="mincome" id="mincome" value="<?php echo $mincome; ?>" size="15"/></td>
</tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br>Contact Details</font></tr>
<tr>
<td></br>Father</td>
<td>Mobile</br><input type="text" name="fmob" id="fmob" value="<?php echo $fmob; ?>" size="15"/></td>
<td>Email</br><input type="text" name="femail" id="femail" value="<?php echo $femail; ?>" size="15"/></td>
</tr>
<tr>
<td>Mother</td>
<td><input type="text" name="mmob" id="mmob" value="<?php echo $mmob; ?>" size="15"/></td>
<td><input type="text" name="memail" id="memail" value="<?php echo $memail; ?>" size="15"/></td>
</tr>
<tr>
<td>Guardian</td>
<td><input type="text" name="gmob" id="gmob" value="<?php echo $gmob; ?>" size="15"/></td>
<td><input type="text" name="gemail" id="gemail" value="<?php echo $gemail; ?>" size="15"/></td>
</tr>
<tr>
<td>Emergency</td>
<td><input type="text" name="emob" id="emob" value="<?php echo $emob; ?>" size="15"/></td>
<td><input type="text" name="eemail" id="eemail" value="<?php echo $eemail; ?>" size="15"/></td>
</tr>
<tr>
<td>Student Official</td>
<td><input type="text" name="smob" id="smob" value="<?php echo $smob; ?>" size="15"/></td>
<td><input type="text" name="semail" id="semail" value="<?php echo $semail; ?>" size="15"/></td>
</tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br>Local Guardian Details</font></tr>
<tr><td>name</td>
<td><input type="text" name="lgname" id="lgname" value="<?php echo $lgname; ?>" size="15"/></td></tr>
<tr><td>Address</td>
<td><textarea name="lgaddress" id="lgaddress" rows="3" cols="17"><?php echo $lgaddress; ?></textarea></td></tr>
<tr><td>Designation</td>
<td><input type="text" name="desig" id="desig" value="<?php echo $desig; ?>" size="15"/></td></tr>
<tr><td>Relation</td>
<td><input type="text" name="relation" id="relation" value="<?php echo $relation; ?>" size="15"/></td></tr>
<tr><td>Phone</td>
<td><input type="text" name="lgph" id="lgph" value="<?php echo $lgph; ?>" size="15"/></td></tr>
</table>
<table width="65%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br></br>Upload photo/signatures</font></tr>
<tr><td>Student sign</td>
<td>Father Photo</td>
<td>Father Sign</td>
<td>Mother Photo</td>
<td>Mother Sign</td></tr>
<tr>
<td><input type="file" name="ssign" id="ssign"/></td>
<td><input type="file" name="fphoto" id="fphoto"/></td>
<td><input type="file" name="fsign" id="fsign"/></td>
<td><input type="file" name="mphoto" id="mphoto"/></td>
<td><input type="file" name="msign" id="msign"/></td></tr>
<tr>
<td><input type="hidden" name="thisID" value="<?php echo $targetID; ?>"></td>
<td><input type="submit" name="button2" /></td>
</tr>
</table>
</div>
    </form>
	</div>
	</div>
    </div>
</div>
                
      </div><!-- /sidy__content -->
    </div><!-- /sidy -->
    

</body>
</html>
