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
if (isset($_POST['button'])) {
	
	$pid = mysql_real_escape_string($_POST['thisID']);
    $name = mysql_real_escape_string($_POST['name']);
	$employee_id = mysql_real_escape_string($_POST['employee_id']);
	$designation = mysql_real_escape_string($_POST['designation']);
	$email_id = mysql_real_escape_string($_POST['email_id']);
	$password=mysql_real_escape_string($_POST['password']);
	$address=mysql_real_escape_string($_POST['address']);
	$nationality=mysql_real_escape_string($_POST['nationality']);
	$category=mysql_real_escape_string($_POST['category']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$phone_no=mysql_real_escape_string($_POST['phone_no']);
		$gender=mysql_real_escape_string($_POST['gender']);
	include "connect.php";
	// See if that product name is an identical match to another product in the system
	$sql = mysql_query("UPDATE faculty_info SET name='$name', gender='$gender', employee_id='$employee_id', phone_no='$phone_no',address='$address',nationality='$nationality',category='$category',dob='$dob', email_id='$email_id', password='$password', designation='$designation' WHERE id='$pid'")or die("Error: ". mysql_error());
	header("location: faculty_list.php"); 
    exit();
}
?>
<?php 
// Gather this product's full information for inserting automatically into the edit form below on page
include "connect.php";
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM faculty_info WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
	    while($row = mysql_fetch_array($sql)){ 
             $employee_id=$row["employee_id"];
			 $name = $row["name"];
			 $email_id = $row["email_id"];
			 $designation= $row["designation"];
			 $password = $row["password"];
			 $gender=$row["gender"];
		 $category=$row["category"];
		 $address=$row["address"];
		 $nationality=$row["nationality"]; 
		 $phone_no=$row["phone_no"];
		 $dob=$row["dob"];
		
			 $date_added = strftime("%b %d, %Y", strtotime($row["date_added"]));
        }
    } else {
	    echo "Sorry this faculty doesn't exist.";
		exit();
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
        <li><a href="faculty_list.php">Add Faculty</a></li>
        <li><a href="faculty_added.php">Faculty List</a></li>
        <li><a href="subject_list.php">Add Subject</a></li>
		<li><a href="subject_added.php">Subject List</a></li>
				<li><a href="student_list.php">Add Student</a></li>
        <li><a href="student_display.php">Student List</a></li>
        <li><a href="#">Fees Details</a></li>
      </ul>
    </div>
  </div>
<div id="main">    
    
    <a name="FacultyForm" id="FacultyForm"></a>
	<div align="right" style="margin-left:352px;">
    <form action="faculty_edit.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
    <table width="90%" border="0" cellspacing="0" cellpadding="6">
      <tr>
        <td width="20%" align="right"></br>Name</td>
        <td width="80%"><label>
          </br><input name="name" type="text" id="name" value="<?php echo $name; ?>" />
        </label></td>
      </tr>
      <tr>
        <td align="right"></br>Employee ID</td>
        <td><label>
         
          </br><input name="employee_id" type="text" id="employee_id" value="<?php echo $employee_id; ?>" />
        </label></td>
      </tr>
	  <tr>
        <td align="right"></br>Designation</td>
        <td><label>
         
          </br><input name="designation" type="text" id="designation" value="<?php echo $designation; ?>" />
        </label></td>
      </tr>
      <tr>
        <td align="right"></br>Email ID</td>
        <td><label>
         
          </br><input name="email_id" type="text" id="email_id" value="<?php echo $email_id; ?>" />
        </label></td>
      </tr>
      <tr>
        <td align="right"></br>Password</td>
        <td><label>
         
          </br><input name="password" type="text" id="password" value="<?php echo $password; ?>" />
        </label></td>
      </tr>
	  <tr>
<td width="20%"></br>Category</td>
<td></br><input type="text" name="category" id="category" value="<?php echo $category; ?>"/>
</tr>
<tr>
<td width="20%"></br>Nationality</td>
<td></br><input type="text" name="nationality" id="nationality" value="<?php echo $nationality; ?>"/>
</tr>
<tr>
<td width="20%"></br>Date of Birth</td>
<td></br><input type="text" name="dob" id="dob" value="<?php echo $dob; ?>"/>
</tr>
<tr>
<td width="20%"></br>Address</td>
<td></br><input type="text" name="address" id="address" value="<?php echo $address; ?>"/>
</tr>
<tr>
<td width="20%"></br>Phone Number</td>
<td></br><input type="text" name="phone_no" id="phone_no" value="<?php echo $phone_no; ?>"/>
</tr>
<tr>
<td width="20%"></br>Gender</td>
<td>  </br><input type="radio" name="gender" id="gender" value='male'>Male</input>&nbsp;&nbsp;
   <input type="radio" name="gender" id="gender" value='female'>Female</input>
   </td>
</tr>
      <tr>
        <td></br>&nbsp;</td>
        <td><label>
          <input name="thisID" type="hidden" value="<?php echo $targetID; ?>" />
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