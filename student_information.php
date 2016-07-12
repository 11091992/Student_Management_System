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

<div id="main">

<?php
if(isset($_GET['pid'])){
	include "connect.php";
$id=$_GET['pid'];
$q=mysql_query("SELECT * FROM student_info WHERE id='$id'");
$r=mysql_query("SELECT * FROM student_hostel WHERE id='$id'");
$s=mysql_query("SELECT * FROM qualification_document WHERE id='$id'");
$row1=mysql_fetch_array($q);
$row2=mysql_fetch_array($r);
$row3=mysql_fetch_array($s);
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
$admthrough=$row1['admthrough'];
$engrate=$row1['engrate'];
$cat1=$row1['cat1'];
$subcat1=$row1['subcat1'];
$ccno=$row1['ccno'];
$incno=$row1['incno'];
$school=$row1['school'];
$status1=$row1['status1'];
$grp=$row1['grp'];
$Xschool=$row1['Xschool'];
$Xp=$row1['Xp'];
$Xgrade=$row1['Xgrade'];
$XIIschool=$row1['XIIschool'];
$XIIp=$row1['XIIp'];
$XIIgrade=$row1['XIIgrade'];
$mstatus=$row1['mstatus'];
$email_id=$row1['email_id'];
$phone_no=$row1['phone_no'];
$religion=$row1['religion'];
$other1=$row1['other1'];
$minority=$row1['minority'];
$blood_group=$row1['blood_group'];
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
$substatus=$row1['substatus'];
$programme=$row1['programme'];
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
$focc=$row3['focc'];
$fdesig=$row3['fdesig'];
$fjob=$row3['fjob'];
$forg=$row3['forg'];
$fincome=$row3['fincome'];
$mocc=$row3['mocc'];
$mdesig=$row3['mdesig'];
$mjob=$row3['mjob'];
$morg=$row3['morg'];
$mincome=$row3['mincome'];
$fmob=$row3['fmob'];
$femail=$row3['femail'];
$mmob=$row3['mmob'];
$memail=$row3['memail'];
$gmob=$row3['gmob'];
$gemail=$row3['gemail'];
$emob=$row3['emob'];
$eemail=$row3['eemail'];
$smob=$row3['smob'];
$semail=$row3['semail'];
$lgname=$row3['lgname'];
$lgaddress=$row3['lgaddress'];
$relation=$row3['relation'];
$desig=$row3['desig'];
$lgph=$row3['lgph'];
$allot_cat=$row1['allot_cat'];
$allot_subcat=$row1['allot_subcat'];
$late_entry=$row1['late_entry'];
$sname=$row3['sname'];
$sname2=$row2['sname'];
$status=$row3['status'];
$status2=$row2['status'];
$particular=$row2['particular'];
$as_on=$row2['as_on'];
$result=$row2['result'];
$remarks=$row2['remarks'];
$hname=$row2['hname'];
$fno=$row2['fno'];
$room=$row2['room'];
$bed=$row2['bed'];
$fee=$row2['fee'];
$regdate=$row2['regdate'];
$expdate=$row2['expdate'];
$nationality=$row1['nationality'];
$domicile=$row1['domicile'];
$domicile_number=$row1['domicile_number'];
$passport_no=$row['passport_no'];
$passport_issue=$row['passport_issue'];
$passport_issue_date=$row['passport_issue_date'];
$passport_issue_place=$row['passport_issue_place'];
$passport_expiry_date=$row['passport_expiry_date'];
$visa_type=$row['visa_type'];
$visa_no=$row['visa_no'];
$visa_issue_place=$row['visa_issue_place'];
$visa_expiry_date=$row['visa_expiry_date'];
$name=$sfname.'&nbsp;'.$smname.'&nbsp;'.$slname;

$same_page = $_POST['same-page'];
if(!empty($same_page) && $same_page == 1) {
  $filename = 'Sample Table';
  header('Content-type: application/vnd.xls');
  header('Content-Disposition: attachment; filename="'.$filename.'.xls"');
}?>

<font size='5'><b><center><?php echo $name; ?></center></b>

<div style="margin-left:150px;">
<table cellpadding='1' cellspacing='5' border='0' width="100%"><tbody>
<tr>
<td width="20%"><b>Application No.</b></td>
<td width="30%"><?php echo $application_no; ?></td>
<td rowspan="4" colspan="2"></td>
<td>
</tr>
<tr>
<td width="20"><b>Admission Roll No.</td>
<td width="30%"><?php echo $admission_roll_no; ?></td>
</tr>
<tr>
<td><b>Registration No.</td>
<td><?php echo $registration_no; ?></td>
</tr>
<tr>
<td><b>Student Name</td>
<td><?php echo $sfname.'&nbsp;'.$smname.'&nbsp;'.$slname; ?></td>
</tr>
<tr>
<td><b>Father's Name</td>
<td><?php echo $ffname.'&nbsp;'.$fmname.'&nbsp;'.$flname; ?></td>
<td><b>Mother's Name</td>
<td><?php echo $mofname.'&nbsp;'.$momname.'&nbsp;'.$molname; ?></td>
</tr>
<tr>
<td><b>Gender</td>
<td><?php echo $gender; ?></td>
<td><b>Date of Birth</td>
<td><?php echo $dob; ?></td>
</tr>
<tr>
<td><b>Marital Status</td>
<td><?php echo $mstatus; ?></td>
<td><b>Blood Group</td>
<td><?php echo $blood_group; ?></td>
</tr>
<tr>
<td><b>Email ID</td>
<td><?php echo $email_id; ?></td>
<td><b>Mobile Number</td>
<td><?php echo $phone_no; ?></td>
</tr>
<tr>
<td><b>Class</td>
<td><?php echo $class; ?></td>
<td><b>Section</td>
<td><?php echo $section; ?></td>
</tr>
<tr>
<td><b>Religion</td>
<td><?php echo $religion; ?></td>
<td><b>If other</td>
<td><?php echo $other1; ?></td>
</tr>
<tr>
<td><b>Sub-Category</td>
<td><?php echo $subcat1; ?></td>
<td><b>Caste Certificate No.</td>
<td><?php echo $ccno; ?></td>
</tr>
<tr>
<td><b>Inc Certi No.</td>
<td><?php echo $incno; ?></td>
<td><b>Nationality</td>
<td><?php echo $nationality ;?></td>
</tr>
<?php
if($nationality!="Indian"){?>
<tr>
<td><b>Passport No.</td>
<td><?php echo $passport_no; ?></td>
<td><b>Passport Issue Date</td>
<td><?php echo $passport_issue_date ;?></td>
</tr>
<tr>
<td><b>Passport Issue Place</td>
<td><?php echo $passport_issue_place;?></td>
<td><b>Passport Expiry Date</td>
<td><?php echo $passport_expiry_date ;?></td>
</tr>
<tr>
<td><b>Visa Type</td>
<td><?php echo $visa_type ;?></td>
<td><b>Visa No.</td>
<td><?php echo $visa_no ;?></td>
</tr>
<tr>
<td><b>Visa Issue Date</td>
<td><?php echo $visa_issue_place ;?></td>
<td><b>Visa Expiry Date</td>
<td><?php echo $visa_expiry_date ;?></td>
</tr>
<?php } else { ?>
<tr>
<td><b>Domicile</td>
<td><?php echo $domicile ;?></td><?php if($domicile=='up'){?>
<td><b>Domicile No.</td>
<td><?php echo $domicile_number ;?></td>
</tr>
<?php } } ?></tbody></table></div>
<center>
<br><br>
<b><u>Permanent Address</b></u>
<br><br>
<table cellpadding='1' cellspacing='1' border='1' width="60%">
<tr>
<td width="20%"><b>Address</td>
<td width="30%"><?php echo $address1 ;?></td>
<td width="20%"><b>City</td>
<td width="30%"><?php echo $city1 ;?></td>
</tr>
<tr>
<td><b>Tehsil</td>
<td><?php echo $tehsil1 ;?></td>
<td><b>District</td>
<td><?php echo $district1 ;?></td>
</tr>
<tr>
<td><b>State</td>
<td><?php echo $state1 ;?></td>
<td><b>Country</td>
<td><?php echo $country1 ;?></td>
</tr>
<tr>
<td><b>Pin</td>
<td><?php echo $pin1 ;?></td>
<td><b>Landline</td>
<td><?php echo $landline1 ;?></td>
</tr></tbody></table>
<br><br>
<b><u>Current Address</b></u>
<br><br>
<table cellpadding='1' cellspacing='1' border='1' width="60%">
<tr>
<td width="20%"><b>Address</td>
<td width="30%"><?php echo $address2 ;?></td>
<td width="20%"><b>City</td>
<td width="30%"><?php echo $city2 ;?></td>
</tr>
<tr>
<td><b>Tehsil</td>
<td><?php echo $tehsil2; ?></td>
<td><b>District</td>
<td><?php echo $district2; ?></td>
</tr>
<tr>
<td><b>State</td>
<td><?php echo $state2 ;?></td>
<td><b>Country</td>
<td><?php echo $country2 ;?></td>
</tr>
<tr>
<td><b>Pin</td>
<td><?php echo $pin2 ;?></td>
<td><b>Landline</td>
<td><?php echo $landline2 ;?></td>
</tr></tbody></table>
<br><br>
<b><u>Official Information</u></b>
<br><br>
<table cellpadding='1' cellspacing='1' border='1' width="60%">
<tr>
<td width="20%"><b>Status</td>
<td width="30%"><?php echo $status1 ; ?></td>
<td width="20%"><b>Sub Status</td>
<td width="30%"><?php echo $substatus; ?></td>
</tr>
<tr>
<td><b>School</td>
<td><?php echo $school; ?></td>
<td><b>Programme</td>
<td><?php echo $programme; ?></td>
</tr>
<tr>
<td><b>Batch</td>
<td><?php echo $batch_from."-".$batch_to; ?></td>
<td><b>Current Session</td>
<td><?php echo $csession; ?></td>
</tr>
<tr>
<td><b>Fee Category</td>
<td><?php echo $feecat; ?></td>
<td><b>Amt Unpaid</td>
<td><?php echo $unpaid; ?></td>
</tr>
<tr>
<td><b>Adm Sem</td>
<td><?php echo $admsem; ?></td>
<td><b>Current Sem</td>
<td><?php echo $currsem; ?></td>
</tr>
<tr>
<td><b>Category/Quota</td>
<td><?php echo $catquota; ?></td>
<td><b>Sub Category/Quota</td>
<td><?php echo $subcatquota; ?></td>
</tr>
<tr>
<td><b>Reference Of</td>
<td><?php echo $refOf; ?></td>
<td><b>Group Name</td>
<td><?php echo $grp ; ?></td>
</tr>
<tr>
<td><b>Referenced By</td>
<td><?php echo $refBy ; ?></td>
<td><b>Priority</td>
<td><?php echo $priority ; ?></td>
</tr>
<tr>
<td><b>App ID</td>
<td><?php echo $app_id ; ?></td>
<td><b>Admn Date</td>
<td><?php echo $admndate ; ?></td>
</tr>
<tr>
<td><b>Admn Number</td>
<td><?php echo $admno ; ?></td>
<td><b>Enrollment Number</td>
<td><?php echo $enrollno ; ?></td>
</tr>
<tr>
<td><b>Roll Number</td>
<td><?php echo $rollno ; ?></td>
<td><b>Adm Under</td>
<td><?php echo $admn_under ; ?></td>
</tr>
<tr>
<td><b>Programme Type</td>
<td><?php echo $prog_type ; ?></td>
<td><b>Alloted Category</td>
<td><?php echo $allot_cat ; ?></td>
</tr>
<tr>
<td><b>Alloted Sub-category</td>
<td><?php echo $allot_subcat ; ?></td>
<td><b>Late Entry</td>
<td><?php echo $late_entry ; ?></td>
</tr></table>
<br><br>
<b><u>Qualification Details</b></u><br><br>
<table cellpadding='1' cellspacing='1' border='1' width="60%">
<tr>
<td width="20%"><b>Student Name</td>
<td width="30%"><?php echo $sname ; ?></td>
<td width="20%"><b>Status</td>
<td width="30%"><?php echo $status ; ?></td>
</tr>
<tr>
<td><b>Father's Occupation</td>
<td><?php echo $focc ; ?></td>
<td><b>Designation</td>
<td><?php echo $fdesig ; ?></td>
</tr>
<tr>
<td><b>Job Type</td>
<td><?php echo $fjob ; ?></td>
<td><b>Organisation Type</td>
<td><?php echo $forg ; ?></td>
</tr>
<tr>
<td><b>Annual Income</td>
<td><?php echo $fincome ; ?></td>
<td></td>
<td></td>
</tr>
<tr>
<td><b>Mother's Occupation</td>
<td><?php echo $mocc ; ?></td>
<td><b>Designation</td>
<td><?php echo $mdesig ; ?></td>
</tr>
<tr>
<td><b>Job Type</td>
<td><?php echo $mjob ; ?></td>
<td><b>Organisation Type</td>
<td><?php echo $morg ; ?></td>
</tr>
<tr>
<td><b>Annual Income</td>
<td><?php echo $mincome ; ?></td>
<td></td>
<td></td>
</tr>
<tr>
<td><b>Father's Mobile No.</td>
<td><?php echo $fmob ; ?></td>
<td><b>Email ID</td>
<td><?php echo $femail ; ?></td>
</tr>
<tr>
<td><b>Mother's Mobile No.</td>
<td><?php echo $mmob ; ?></td>
<td><b>Email ID</td>
<td><?php echo $memail ; ?></td>
</tr>
<tr>
<td><b>Guardian's Mobile No.</td>
<td><?php echo $gmob ; ?></td>
<td><b>Email ID</td>
<td><?php echo $gemail ; ?></td>
</tr>
<tr>
<td><b>Emergency Mobile No.</td>
<td><?php echo $emob ; ?></td>
<td><b>Email ID</td>
<td><?php echo $eemail ; ?></td>
</tr>
<tr>
<td><b>Student's Mobile No.</td>
<td><?php echo $smob ; ?></td>
<td><b>Email ID</td>
<td><?php echo $semail ; ?></td>
</tr></tbody></table>
<br><br>
<b><u>Local Guardian's Details</b></u>
<br><br>
<table cellpadding='1' cellspacing='1' border='1' width="60%">
<tr>
<td width="20%"><b>Name</td>
<td width="30%"><?php echo $lgname ; ?></td>
<td width="20%"><b>Address</td>
<td width="30%"><?php echo $lgaddress ; ?></td>
</tr>
<tr>
<td><b>Designation</td>
<td><?php echo $desig ; ?></td>
<td><b>Relation</td>
<td><?php echo $relation ; ?></td>
</tr>
<tr>
<td><b>Phone No.</td>
<td><?php echo $phone_no ; ?></td>
<td></td>
<td></td>
</tr></tbody></table>
<br><br>
<b><u>Hostel Details</b></u>
<br><br>
<table cellpadding='1' cellspacing='1' border='1' width="60%" id="myTable"><tbody>
<tr>
<td width="20%"><b>Name</td>
<td width="30%"><?php echo $sname ; ?></td>
<td width="20%"><b>Status</td>
<td width="30%"><?php echo $status ; ?></td>
</tr>
<tr>
<td><b>Particular</td>
<td><?php echo $particular ; ?></td>
<td><b>As On</td>
<td><?php echo $as_on ; ?></td>
</tr>
<tr>
<td><b>Result</td>
<td><?php echo $result ; ?></td>
<td><b>Remarks</td>
<td><?php echo $remarks ; ?></td>
</tr>
<tr>
<td><b>Hostel Name</td>
<td><?php echo $hname ; ?></td>
<td><b>Floor No.</td>
<td><?php echo $fno ; ?></td>
</tr>
<tr>
<td><b>Room No.</td>
<td><?php echo $room ; ?></td>
<td><b>Bedding</td>
<td><?php echo $bed ; ?></td>
</tr>
<tr>
<td><b>Fee Structure</td>
<td><?php echo $fee ; ?></td>
<td></td>
<td></td>
</tr>
<tr>
<td><b>Registration Date</td>
<td><?php echo $regdate ; ?></td>
<td><b>Expiry Date</td>
<td><?php echo $expdate ; ?></td>
</tr>
<?php } ?></tbody></table>
<form method="POST" action="" target="_balnk">
<button onclick="myFunction()">Print this page</button>
<?php if(empty($same_page)): ?>
   <input type="hidden" name="same-page" value="1"/>
   <input id="export-btn" type="submit" value="Export as Excel"/>
 </form>
<?php endif; ?>

</div>
</body>
</html>