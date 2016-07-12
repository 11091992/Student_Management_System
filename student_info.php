<?php 
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body>

<div id="wrap">
  <div id="top">
    <div class="rights"> </div>
    <div id="search"> </div>
    <div class="lefts">
      <h1>Student Details</h1>
     
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


<div style="margin-left:-120px;">

<form method="POST" action="student_info.php" target="_balnk">
<button onclick="myFunction()">Print this page</button>
<?php if(empty($same_page)): ?>
   <input type="hidden" name="same-page" value="1"/>
   <input id="export-btn" type="submit" value="Export as Excel"/>
 </form>
<?php endif; ?>

<?php
	include "connect.php";
$q=mysql_query("SELECT * FROM student_info");
//$r=mysql_query("SELECT * FROM student_hostel");
//$s=mysql_query("SELECT * FROM qualification_document");?>
<table cellpadding='1' border='1'><tbody>
<tr>
<td><b>S.No.</b></td>
<td><b>Registration No.</td>
<td><b>Admission Roll No.</td>
<td><b>Application No.</b></td>
<td><b>Student Name</td>
<td><b>Father's Name</td>
<td><b>Mother's Name</td>
<td><b>Gender</td>
<td><b>Date of Birth</td>
<td><b>Reference of</td>
<td><b>Referenced By</td>
<td><b>Enrollment Number</td>
<td><b>Roll Number</td>
<td><b>Category</td>
<td><b>Sub-Category</td>
<td><b>Caste Certificate No.</td>
<td><b>Inc Certi No.</td>
<td><b>School</td>
<td><b>Status</td>
<td><b>Group Name</td>
<td><b>Marital Status</td>
<td><b>Email ID</td>
<td><b>Phone Number</td>
<td><b>Domicile</td>
<td><b>Domicile No.</td>
<td><b>Religion</td>
<td><b>If other</td>
<td><b>Minority</td>
<td><b>Nationality</td>
<td><b>Blood Group</td>
<td><b>Passport No.</td>
<td><b>Passport Issue Date</td>
<td><b>Passport Expiry Date</td>
<td><b>Passport Issue Place</td>
<td><b>Visa No.</td>
<td><b>Visa Type</td>
<td><b>Visa Issue Date</td>
<td><b>Visa Expiry Date</td>
<td><b>Address</td>
<td><b>City</td>
<td><b>Tehsil</td>
<td><b>District</td>
<td><b>State</td>
<td><b>Country</td>
<td><b>Pin</td>
<td><b>Landline</td>
<td><b>Address</td>
<td><b>City</td>
<td><b>Tehsil</td>
<td><b>District</td>
<td><b>State</td>
<td><b>Country</td>
<td><b>Pin</td>
<td><b>Landline</td>
<td><b>Password</td>
<td><b>Sub Status</td>
<td><b>Programme</td>
<td><b>Sub Programme</td>
<td><b>Batch</td>
<td><b>Current Session</td>
<td><b>Fee Category</td>
<td><b>Amt Unpaid</td>
<td><b>Adm Sem</td>
<td><b>Current Sem</td>
<td><b>Category/Quota</td>
<td><b>Sub Category/Quota</td>
<td><b>Class</td>
<td><b>Section</td>
<td><b>Priority</td>
<td><b>App ID</td>
<td><b>Admn Date</td>
<td><b>Adm Under</td>
<td><b>Programme Type</td>
<td><b>Admn Number</td>
<td><b>Alloted Category</td>
<td><b>Alloted Sub-category</td>
<td><b>Late Entry</td>
<td><b>Supername</td>
<td><b>CSupername</td>
<td><b>Phd Subject</td>
<td><b>Phd Src</td>
<td><b>Phd Src Date</td>
<td><b>Phd Rdc</td>
<td><b>Phd rdc date</td>
</tr><?php
$serial_no=1; 
$productCount = mysql_num_rows($q); // count the output amount
if ($productCount > 0) {
while($row1=mysql_fetch_array($q)){
$registration_no=$row1['registration_no'];
$admission_roll_no=$row1['admission_roll_no'];
$application_no=$row1['application_no'];
$sfname=$row1['sfname'];
$smname=$row1['smname'];
$slname=$row1['slname'];
$ffname=$row1['ffname'];
$fmname=$row1['fmname'];
$flname=$row1['flname'];
$mofname=$row1['mofname'];
$momname=$row1['momname'];
$molname=$row1['molname'];
$gender=$row1['gender'];
$dob=$row1['dob'];
$refOf=$row1['refOf'];
$refBy=$row1['refBy'];
$enrollno=$row1['enrollno'];
$rollno=$row1['rollno'];
$cat1=$row1['cat1'];
$subcat1=$row1['subcat1'];
$ccno=$row1['ccno'];
$incno=$row1['incno'];
$school=$row1['school'];
$status1=$row1['status1'];
$grp=$row1['grp'];
$mstatus=$row1['mstatus'];
$email_id=$row1['email_id'];
$phone_no=$row1['phone_no'];
$domicile=$row1['domicile'];
$domicile_number=$row1['domicile_number'];
$religion=$row1['religion'];
$other1=$row1['other1'];
$minority=$row1['minority'];
$nationality=$row1['nationality'];
$blood_group=$row1['blood_group'];
$passport_no=$row1['passport_no'];
$passport_issue_date=$row1['passport_issue_date'];
$passport_expiry_date=$row1['passport_expiry_date'];
$passport_issue_place=$row1['passport_issue_place'];
$visa_no=$row1['visa_no'];
$visa_type=$row1['visa_type'];
$visa_issue_date=$row1['visa_issue_date'];
$visa_expiry_date=$row1['visa_expiry_date'];
$address1=$row1['address1'];
$city1=$row1['city1'];
$tehsil1=$row1['tehsil1'];
$district1=$row1['district1'];
$state1=$row1['state1'];
$address2=$row1['address2'];
$city2=$row1['city2'];
$tehsil2=$row1['tehsil2'];
$district2=$row1['district2'];
$state2=$row1['state2'];
$country1=$row1['country2'];
$pin1=$row1['pin2'];
$landline1=$row1['landline1'];
$country2=$row1['country2'];
$pin2=$row1['pin2'];
$landline2=$row1['landline2'];
$password=$row1['password'];
$substatus=$row1['substatus'];
$programme=$row1['programme'];
$programme1=$row1['programme1'];
$batch_from=$row1['batch_from'];
$batch_to=$row1['batch_to'];
$csession=$row1['csession'];
$feecat=$row1['feecat'];
$unpaid=$row1['unpaid'];
$admsem=$row1['admsem'];
$currsem=$row1['currsem'];
$catquota=$row1['catquota'];
$subcatquota=$row1['subcatquota'];
$class=$row1['class'];
$section=$row1['section'];
$priority=$row1['priority'];
$app_id=$row1['app_id'];
$admndate=$row1['admndate'];
$admn_under=$row1['admn_under'];
$prog_type=$row1['prog_type'];
$admno=$row1['admno'];
$allot_cat=$row1['allot_cat'];
$allot_subcat=$row1['allot_subcat'];
$late_entry=$row1['late_entry'];
$supername=$row1['supername'];
$csupername=$row1['csupername'];
$phdsub=$row1['phdsub'];
$phdsrc=$row1['phdsrc'];
$phdsrcdate=$row1['phdsrcdate'];
$phdrdc=$row1['phdrdc'];
$phdrdcdate=$row1['phdrdcdate'];

$same_page = $_POST['same-page'];
if(!empty($same_page) && $same_page == 1) {
  $filename = 'Sample Table';
  header('Content-type: application/vnd.xls');
  header('Content-Disposition: attachment; filename="'.$filename.'.xls"');
}
?>
<tr>
<td><?php echo $serial_no; ?></td>
<td><?php echo $registration_no; ?></td>
<td><?php echo $admission_roll_no; ?></td>
<td><?php echo $application_no; ?></td>
<td><?php echo $sfname.'&nbsp;'.$smname.'&nbsp;'.$slname; ?></td>
<td><?php echo $ffname.'&nbsp;'.$fmname.'&nbsp;'.$flname; ?></td>
<td><?php echo $mofname.'&nbsp;'.$momname.'&nbsp;'.$molname; ?></td>
<td><?php echo $gender; ?></td>
<td><?php echo $dob; ?></td>
<td><?php echo $refOf; ?></td>
<td><?php echo $refBy ; ?></td>
<td><?php echo $enrollno ; ?></td>
<td><?php echo $rollno ; ?></td>
<td><?php echo $cat1; ?></td>
<td><?php echo $subcat1; ?></td>
<td><?php echo $ccno; ?></td>
<td><?php echo $incno; ?></td>
<td><?php echo $school; ?></td>
<td><?php echo $status1 ; ?></td>
<td><?php echo $grp ; ?></td>
<td><?php echo $mstatus; ?></td>
<td><?php echo $email_id; ?></td>
<td><?php echo $phone_no; ?></td>
<td><?php echo $domicile ;?></td>
<td><?php echo $domicile_number ;?></td>
<td><?php echo $religion; ?></td>
<td><?php echo $other1; ?></td>
<td><?php echo $minority; ?></td>
<td><?php echo $nationality ;?></td>
<td><?php echo $blood_group; ?></td>
<td><?php echo $passport_no; ?></td>
<td><?php echo $passport_issue_date ;?></td>
<td><?php echo $passport_expiry_date ;?></td>
<td><?php echo $passport_issue_place;?></td>
<td><?php echo $visa_no ;?></td>
<td><?php echo $visa_type ;?></td>
<td><?php echo $visa_issue_date ;?></td>
<td><?php echo $visa_expiry_date ;?></td>
<td><?php echo $address1 ;?></td>
<td><?php echo $city1 ;?></td>
<td><?php echo $tehsil1 ;?></td>
<td><?php echo $district1 ;?></td>
<td><?php echo $state1 ;?></td>
<td><?php echo $country1 ;?></td>
<td><?php echo $pin1 ;?></td>
<td><?php echo $landline1 ;?></td>
<td><?php echo $address2 ;?></td>
<td><?php echo $city2 ;?></td>
<td><?php echo $tehsil2; ?></td>
<td><?php echo $district2; ?></td>
<td><?php echo $state2 ;?></td>
<td><?php echo $country2 ;?></td>
<td><?php echo $pin2 ;?></td>
<td><?php echo $landline2 ;?></td>
<td><?php echo $password; ?></td>
<td><?php echo $substatus; ?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $programme1; ?></td>
<td><?php echo $batch_from."-".$batch_to; ?></td>
<td><?php echo $csession; ?></td>
<td><?php echo $feecat; ?></td>
<td><?php echo $unpaid; ?></td>
<td><?php echo $admsem; ?></td>
<td><?php echo $currsem; ?></td>
<td><?php echo $catquota; ?></td>
<td><?php echo $subcatquota; ?></td>
<td><?php echo $class; ?></td>
<td><?php echo $section; ?></td>
<td><?php echo $priority ; ?></td>
<td><?php echo $app_id ; ?></td>
<td><?php echo $admndate ; ?></td>
<td><?php echo $admn_under ; ?></td>
<td><?php echo $prog_type ; ?></td>
<td><?php echo $admno ; ?></td>
<td><?php echo $allot_cat ; ?></td>
<td><?php echo $allot_subcat ; ?></td>
<td><?php echo $late_entry ; ?></td>
<td><?php echo $supername; ?></td>
<td><?php echo $csupername ; ?></td>
<td><?php echo $phdsub; ?></td>
<td><?php echo $phdsrc; ?></td>
<td><?php echo $phdsrcdate ; ?></td>
<td><?php echo $phdrdc; ?></td>
<td><?php echo $phdrdcdate; ?></td>
</tr><?php  $serial_no=$serial_no+1;
}
}
?></tbody></table><?php exit();
 ?>
</div>
</body>
</html>

