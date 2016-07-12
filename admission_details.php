<?php 
session_start();
if(!isset($_SESSION["username"])){
header("location:officelogin.php");
exit();
}
?>

<?php
 // error_reporting(E_ALL);
 // ini_set('display_errors','1');
?>

 <?php
 if(isset($_POST['button1']))
 {
 
 $registration_no = mysql_real_escape_string($_POST['registration_no']);
 $admission_roll_no = mysql_real_escape_string($_POST['admission_roll_no']);
 $application_no = mysql_real_escape_string($_POST['application_no']);
    $sfname = mysql_real_escape_string($_POST['sfname']);
	$smname = mysql_real_escape_string($_POST['smname']);
	$slname = mysql_real_escape_string($_POST['slname']);
	$ffname = mysql_real_escape_string($_POST['ffname']);
	$fmname = mysql_real_escape_string($_POST['fmname']);
	$flname = mysql_real_escape_string($_POST['flname']);
	$mofname = mysql_real_escape_string($_POST['mofname']);
	$momname = mysql_real_escape_string($_POST['momname']);
	$molname = mysql_real_escape_string($_POST['molname']);
	$blood_group=mysql_real_escape_string($_POST['blood_group']);
	$gender=mysql_real_escape_string($_POST['gender']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$Xschool=mysql_real_escape_string($_POST['Xschool']);
	$Xp=mysql_real_escape_string($_POST['Xp']);
	$Xgrade=mysql_real_escape_string($_POST['Xgrade']);
	$XIIschool=mysql_real_escape_string($_POST['XIIschool']);
	$XIIp=mysql_real_escape_string($_POST['XIIp']);
	$XIIgrade=mysql_real_escape_string($_POST['XIIgrade']);
    $mstatus = mysql_real_escape_string($_POST['mstatus']);
    $email_id = mysql_real_escape_string($_POST['email_id']);
	$phone_no = mysql_real_escape_string($_POST['phone_no']);
	$domicile=mysql_real_escape_string($_POST['domicile']);
	$domicile_number=mysql_real_escape_string($_POST['domicile_number']);
	$religion=mysql_real_escape_string($_POST['religion']);
	$other1=mysql_real_escape_string($_POST['other1']);
	$caste=mysql_real_escape_string($_POST['caste']);
	$other2=mysql_real_escape_string($_POST['other2']);
	$sub_caste=mysql_real_escape_string($_POST['sub_caste']);
$other31=mysql_real_escape_string($_POST['other31']);
	$other32=mysql_real_escape_string($_POST['other32']);
	$other33=mysql_real_escape_string($_POST['other33']);
	$handicap=mysql_real_escape_string($_POST['handicap']);
	$minority=mysql_real_escape_string($_POST['minority']);
	$nationality=mysql_real_escape_string($_POST['nationality']);
	$passport_number=mysql_real_escape_string($_POST['passport_number']);
	$passport_issue_date=mysql_real_escape_string($_POST['passport_issue_date']);
	$passport_expiry_date=mysql_real_escape_string($_POST['passport_expiry_date']);
	$passport_issue_place=mysql_real_escape_string($_POST['passport_issue_place']);
	$visa_type=mysql_real_escape_string($_POST['visa_type']);
	$visa_no=mysql_real_escape_string($_POST['visa_no']);
	$visa_issue_date=mysql_real_escape_string($_POST['visa_issue_date']);
	$visa_expiry_date=mysql_real_escape_string($_POST['visa_expiry_date']);
	$address1=mysql_real_escape_string($_POST['address1']);
	$city1=mysql_real_escape_string($_POST['city1']);
	$tehsil1=mysql_real_escape_string($_POST['tehsil1']);
	$district1=mysql_real_escape_string($_POST['district1']);
	$state1=mysql_real_escape_string($_POST['state1']);
	$country1=mysql_real_escape_string($_POST['country1']);
	$pin1=mysql_real_escape_string($_POST['pin1']);
	$landline1=mysql_real_escape_string($_POST['landline1']);
	$address2=mysql_real_escape_string($_POST['address2']);
	$city2=mysql_real_escape_string($_POST['city2']);
	$tehsil2=mysql_real_escape_string($_POST['tehsil2']);
	$district2=mysql_real_escape_string($_POST['district2']);
	$state2=mysql_real_escape_string($_POST['state2']);
	$country2=mysql_real_escape_string($_POST['country2']);
	$pin2=mysql_real_escape_string($_POST['pin2']);
	$landline2=mysql_real_escape_string($_POST['landline2']);
	$remark=mysql_real_escape_string($_POST['remark']);
	$password=mysql_real_escape_string($_POST['password']);
	
	$status=mysql_real_escape_string($_POST['status']);
	$substatus=mysql_real_escape_string($_POST['substatus']);
	$college=mysql_real_escape_string($_POST['college']);
	$programme=mysql_real_escape_string($_POST['programme']);
	$batch_from=mysql_real_escape_string($_POST['batch_from']);
	$batch_to=mysql_real_escape_string($_POST['batch_to']);
	$csession=mysql_real_escape_string($_POST['csession']);
	$feecat=mysql_real_escape_string($_POST['feecat']);
	$unpaid=mysql_real_escape_string($_POST['unpaid']);
	$admsem=mysql_real_escape_string($_POST['admsem']);
	$currsem=mysql_real_escape_string($_POST['currsem']);
	$catquota=mysql_real_escape_string($_POST['catquota']);
	$other5=mysql_real_escape_string($_POST['other5']);
	$subcatquota=mysql_real_escape_string($_POST['subcatquota']);
	$class=mysql_real_escape_string($_POST['class']);
	$section=mysql_real_escape_string($_POST['section']);
	//$sno=mysql_real_escape_string($_POST['sno']);
	//$refOf=mysql_real_escape_string($_POST['refOf']);
	//$refBy=mysql_real_escape_string($_POST['refBy']);
	$priority=mysql_real_escape_string($_POST['priority']);
	//$app_id=mysql_real_escape_string($_POST['app_id']);
	$admndate=mysql_real_escape_string($_POST['admndate']);
	//$admn_no=mysql_real_escape_string($_POST['admn_no']);
	//$enrollno=mysql_real_escape_string($_POST['enrollno']);
	//$rollno=mysql_real_escape_string($_POST['rollno']);
	$admn_under=mysql_real_escape_string($_POST['admn_under']);
	$prog_type=mysql_real_escape_string($_POST['prog_type']);
	$allot_cat=mysql_real_escape_string($_POST['allot_cat']);
	$allot_subcat=mysql_real_escape_string($_POST['allot_subcat']);
	//$qualval=mysql_real_escape_string($_POST['qualval']);
	$late_entry=mysql_real_escape_string($_POST['late_entry']);
	//$eng_rate=mysql_real_escape_string($_POST['eng_rate']);
	//$qual_crit=mysql_real_escape_string($_POST['qual_crit']);
	include "connect.php";
	$sql=mysql_query("SELECT * FROM student_info WHERE registration_no='$registration_no' LIMIT 1");
 $productmatch=mysql_num_rows($sql);
 if($productmatch>0){
 echo 'Sorry you tried to place a duplicate "Registration Number", <a href="admission_details.php">Click Here</a>';
 exit();
 }
 $sql=mysql_query("INSERT INTO student_info(registration_no,admission_roll_no,application_no,sfname,smname,slname,ffname,fmname,flname,mofname,momname,molname,
 gender,dob,Xschool, Xp,Xgrade,XIIschool,XIIp,XIIgrade,mstatus,blood_group,email_id,phone_no,domicile,domicile_number,religion,other1,caste,other2,sub_caste,other31,
 other32,other33, handicap,minority,nationality,passport_expiry_date,passport_issue_date,passport_issue_place,passport_no,visa_expiry_date,visa_issue_date,visa_no,
 visa_type, address1,city1,tehsil1,district1,state1,country1,pin1,landline1,address2,city2,tehsil2,district2,state2,country2, pin2,landline2,remark,password,status,
 substatus,college,programme,batch_from,batch_to,csession,feecat,unpaid,admsem,currsem,catquota,other5,subcatquota, class,section,priority,admndate,admn_under,
 prog_type,allot_cat,allot_subcat,late_entry,date_added)VALUES('$registration_no','$admission_roll_no','$application_no','$sfname','$smname','$slname','$ffname',
 '$fmname','$flname','$mofname','$momname','$molname','$gender', '$dob','$Xschool','$Xp','$Xgrade','$XIIschool','$XIIp','$XIIgrade','$mstatus','$blood_group',
 '$email_id','$phone_no','$domicile','$domicile_number', '$religion','$other1','$caste','$other2','$sub_caste','$other31','$other32','$other33','$handicap','$minority',
 '$nationality','$passport_expiry_date','$passport_issue_date','$passport_issue_place','$passport_no','$visa_expiry_date','$visa_issue_date','$visa_no','$visa_type',
 '$address1','$city1','$tehsil1','$district1','$state1','$country1','$pin1','$landline1','$address2','$city2','$tehsil2','$district2','$state2','$country2','$pin2',
 '$landline2','$remark','$password','$status','$substatus','$college','$programme','$batch_from','$batch_to','$csession','$feecat','$unpaid','$admsem','$currsem',
 '$catquota','$other5','$subcatquota','$class','$section','$priority','$admndate','$admn_under','$prog_type','$allot_cat','$allot_subcat','$late_entry',now())") or die(mysql_error());
 //move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "student_images/$newname");
	//$info = pathinfo($_FILES['fileToUpload']['name']);
 $newname = $registration_no.".jpg";
	//$ext = $info['extension']; // get the extension of the file
 //$newname = "newname.".$ext; 
$target = 'student_images/'.$newname;
 move_uploaded_file( $_FILES['fileField']['tmp_name'], $target);
	header("location: admission_details.php"); 
	exit();
	}
 ?>
 
 <html>
 <head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
<title>Student List</title>

   <script src="datetimepicker_css.js"></script>
<script type="text/javascript">
    // function IsTermChecked() {
        // if (!$("input:checkbox").is(":checked")) {
            // alert("You must check either of the checkboxes.");
            // return false;
        // }
        // else
            // return true;
    // }

</script>
 </head>
<body>

<div align="right" style="margin-right:25px;margin-top:-5px;"><a href="student_display.php"><font size="3">Student Edit</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="logoutadmin.php"><font size="3">Logout</font>
</div><a name="studentForm" id="studentForm"></a>
<h3>
<!--<div align="right" style="margin-left:352px;">-->
<body>
<form action="ad.php" enctype="multiple/form-data" name="myForm" id="myform" method="post">
<h1>Admission</h1>
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr><td>App No.</td>
<td><input type="text" name="appno" id="appno" size="15"/></td>
<td>Admn-Roll No.</td>
<td><input type="text" name="adrollno" id="adrollno" size="15"/></td>
<td>Reg No.</td>
<td><input type="text" name="regno" id="regno" size="15"/></td>
<td>Student Name</td>
<td><input type="text" name="sname" id="sname" size="15"/></td>
<td>Status</td>
<td><input type="text" name="status" id="status" size="15"/></td></tr>
</table>
<table>
<tr><td>
<table width="50%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br>Personal Info</font></tr>

<tr>
<td>Student</td>
<td>First name<input type="text" name="sfname" id="sfname" size="15"/></td>
<td>Middle name<input type="text" name="smname" id="smname" size="15"/></td>
<td>Last name<input type="text" name="slname" id="slname" size="15"/></td>
</tr>
<tr>
<td>Father</td>
<td width="30%">First name<input type="text"  name="ffname" id="ffname" size="15"/></td>
<td width="30%">Middle name<input type="text"  name="fmname" id="fmname" size="15"/></td>
<td width="30%">Last name<input type="text"  name="flname" id="flname" size="15"/></td>
</tr>

<tr>
<td>Mother</td>
<td width="30%">First name<input type="text"  name="mofname" id="mofname" size="15"/></td>
<td width="30%">Middle name<input type="text"  name="momname" id="momname" size="15"/></td>
<td width="30%">Last name<input type="text"  name="molname" id="molname" size="15"/></td>
</tr>

<tr>
<td width="30%">Gender</td>
<td><input type="radio" name="gender" id="gender" value='male'>Male</input>
     <input type="radio" name="gender" id="gender" value='female'>Female</input></td>
<td width="30%">Date Of Birth</td>
<td><input type="text" name="dob" id="dob" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('dob')" style="cursor:pointer"/></td></td>
</tr>

<tr>
<td width="30%">Marital status</td>
<td><select name="mstatus" id="mstatus">
<option value="single">Single </option>
<option value="married">Married </option>
<option value="divorcee">Divorcee </option>
     </select></td>
<td width="30%">Blood Group</td>
<td><select name="bg" id="bg">
<option value="O+">O Positive </option>
<option value="O-">O Negative</option>
<option value="A+">A Positive </option>
<option value="A-">A Negative </option>
<option value="B+">B Positive</option>
<option value="B-">B Negative</option>
<option value="AB+">AB Positive </option>
<option value="AB-">AB Negative </option>
     </select></td>
</tr>

<tr>
<td width="30%">Email ID</td>
<td><input type="text" name="emailid" id="emailid" size="15"/>
<td width="30%">Mobile Number</td>
<td><input type="text" name="mobno" id="mobno" size="15"/>
</td></tr>

<tr>
<td width="30%">Nationality</td>
<td><input type="text" name="nationality" id="nationality" size="15"/>
</td></tr>

<tr>
<td width="30%">Domicile</td>
<td><select name="domicile" id="domicile">
<option value="up">U.P</option>
<option value="other">Other</option>
     </select></td>
<td width="30%">Domicile Number</td>
<td><input type="text" name="domno" id="domno" size="15"/></td>
</tr>
<tr>
<td width="30%">Religion</td>
<td><select name="religion" id="religion">
<option value="hindu">Hindu </option>
<option value="muslim">Muslim </option>
<option value="christian">Christian </option>
<option value="other">Other </option>
     </select>
</td>
<td width="30%">If Other</td>
<td><input type="text" name="other1" id="other1" size="15"/></td>
</tr>
<tr>	 
<td width="30%">Category</td>
<td><select name="cat1" id="cat1">
<option value="general"size="20">General </option>
<option value="sc"> SC</option>
<option value="st">ST </option>
<option value="obc">OBC(U.P) </option>

     </select></td>
	 <td width="30%">Minority</td>
<td><input type="text" name="minority" id="minority" size="15"/>
	 </tr>
	 <tr>
<td width="30%">Sub-Category</td>
<td><select name="subcat1" id="subcat1">
<option value="ph">Physically Handicapped</option>
<option value="dd">DefencePersonel </option>
<option value="ff">FreedomFighter </option>
<option value="km">KashmiriMigrant</option>
<option value="f">WomenCandidate</option>
<option value="gb">WardOfGBUEmployee</option>
     </select></td>
 </tr>
  <tr>
<td width="30%">Caste Certi No.</td>
<td><input type="text" name="ccno" id="ccno" size="15"/>
<td width="30%">Inc. Certi No.</td>
<td><input type="text" name="incno" id="incno" size="15"/>



<tr>
<td width="30%">Passport No.</td>
<td><input type="text" name="passno" id="passno" size="15"/>
<td width="30%">Passport Issue date</td>
<td><input type="text" name="passport_issue_date" id="passport_issue_date" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('passport_issue_date')" style="cursor:pointer"/></td>
<tr>
<td width="30%">Passport Issue Place</td>
<td><input type="text" name="passport_issue_place" id="passport_issue_place" size="15"/>
<td width="30%">Passport Expiry Date</td>
<td><input type="text" name="passport_expiry_date" id="passport_expiry_date" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('passport_expiry_date')" style="cursor:pointer"/></td>
</tr>
<tr>
<td width="30%">Visa type</td>
<td><input type="text" name="visatype" id="visatype" size="15"/>
<td width="30%">Visa No.</td>
<td><input type="text" name="visano" id="visano" size="15"/>
</tr>
<tr>
<td width="30%">Visa Issue Date</td>
<td><input type="text" name="visa_issue_date" id="visa_issue_date" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('visa_issue_date')" style="cursor:pointer"/></td>
<td width="30%">Visa Expiry Date</td>
<td><input type="text" name="visa_expiry_date" id="visa_expiry_date" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('visa_expiry_date')" style="cursor:pointer"/></td></tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br>Permanent Address</font></tr>

<tr><td>Address</td><td><textarea name="address1" id="address1" rows="1" cols="30"></textarea></td></tr>
<tr><td>City</td><td><input type="text" name="city1" id="city1" size="15"/></td>
<td>Tehsil</td><td><input type="text" name="tehsil1" id="tehsil1" size="15"/></td></tr>
<tr><td>District</td><td><input type="text" name="district1" id="district1" size="15"/></td>
<td>State</td><td><input type="text" name="state1" id="state1" size="15"/></td></tr>
<tr><td>Country</td><td><input type="text" name="country1" id="country1" size="15"/></td>
<td>Pin</td><td><input type="text" name="pin1" id="pin1" size="15"/></td></tr>
<tr><td>Landline</td><td><input type="text" name="landline1" id="landline1" size="15"/></td></tr>
</table>
<table width="50%" border="0" cellspacing="0" cellpadding="2">
<tr><font size='5' style="font-style: bold;"></br>Current Address</font></tr>

<tr><td>Address</td><td><textarea name="address2" id="address2" rows="1" cols="30"></textarea></td></tr>
<tr><td>City</td><td><input type="text" name="city2" id="city2" size="15"/></td>
<td>Tehsil</td><td><input type="text" name="tehsil2" id="tehsil2" size="15"/></td></tr>
<tr><td>District</td><td><input type="text" name="district2" id="district2" size="15"/></td>
<td>State</td><td><input type="text" name="state2" id="state2" size="15"/></td></tr>
<tr><td>Country</td><td><input type="text" name="country2" id="country2" size="15"/></td>
<td>Pin</td><td><input type="text" name="pin2" id="pin2" size="15"/></td></tr>
<tr><td>Landline</td><td><input type="text" name="landline2" id="landline2" size="15"/></td></tr>
</table>
</td><td>
<table width="50%" border="0" cellspacing="0" cellpadding="6">
<tr><font size='5' style="font-style: bold;"></br>Official info</font></tr>
<tr><td>Student Name</td>
<td><input type="text" name="name" id="name" size="15"/>
<td>Photo</td>
<td><input type="file" name="file1" id="file1"/></td>
</tr>
<tr>
<td width="20%">Status</td>
<td><select name="status1" id="status1">
<option value="active">Active </option>
<option value="passed">Passed </option>
<option value="hold">Hold </option>
</select></td>	 
<td width="20%">Sub Status</td>
<td><select name="substatus" id="substatus">
<option value="regular">Regular </option>
<option value="repeat">Repeat </option>
<option value="other">other </option>
</select></td>	 
</tr>

<tr>
<td>School</td>
<td><select name="school" id="school">
<option value="soict">SOICT </option>
<option value="som">SOM</option>
<option value="soict">SOBT </option>
<option value="som">SOE</option>
<option value="soict">SOHSS</option>
<option value="som">SOVSAS</option>
<option value="soict">SOLJG </option>
<option value="som">SOBSC</option>
</select></td>
<td>Programme</td>
<td><select name="prog" id="prog"/>
<option value="soict">Int.mba</option>
<option value="soict">MBA</option>
<option value="som">M.Tech(ICT)</option>
<option value="soict">Int.mtech(CSE)</option>
<option value="som">Int.mba(CSE)</option>
<option value="soict">Int.mtech(ECE)</option>
<option value="som">Int.mba(CSE)</option>
<option value="soict">M.Tech(biotech) </option>
<option value="soict">Int.mtech(biotech)</option>
<option value="som">Int.mba(biotech)</option>
<option value="som">M.A(developmental studies)</option>
<option value="som">MSW</option>
<option value="som">M.A(Education)</option>
<option value="soict">M.Tech(engg.)</option>
<option value="soict">Int.mtech(engg.)</option>
<option value="som">Int.mba(engg.)</option>
</td>
</tr>
<tr>
<td width="20%">Batch</td>
<td></br><input type="text" maxlength="4" size="4" name="batchfrom" id="batchfrom"/>&nbsp;&nbsp;-&nbsp;&nbsp;<input type="text" size="4" maxlength="4" name="batchto" id="batchto"/>
</b></td>
<td width="20%">Current Session</td>
<td><input type="text" name="csession" id="csession" size="15"/></td>
</tr>
<tr>
<td width="20%">Adm through</td>
<td><select name="admthrough" id="admthrough">
<option value="direct">Direct </option>
<option value="indirect">Indirect </option>
</select></td>
</tr>
<tr>
<td width="20%">Fee Category</td>
<td></br><select name="feecat" id="feecat">
<option value="paid">Paid </option>
<option value="unpaid">Unpaid </option>
</select></td>	
 <td>Amt_unpaid&nbsp;<input type="text" name="unpaid" id="unpaid" size="15"/></td>
</tr>
<tr>
<td width="20%">Adm Sem</td>
<td><input type="text" name="admsem" id="admsem" size="15"/></td>
<td width="20%">Current Sem</td>
<td><input type="text" name="currsem" id="currsem" size="15"/></td>
</tr>
<tr>
<tr>
<td width="20%">Category/ Quota</td>
<td><input type="text" name="catquota" id="catquota" size="15"/> </td>
<td width="20%">Sub Category /Quota</td>
<td><input type="text" name="subcatquota" id="subcatquota" size="15"/></td>
</tr>
<tr>
<td width="20%">Group Name</td>
<td><input type="text"  name="grp" id="grp" size="15"/></td>
</tr>
<tr>
<td width="20%">Reference Of</td>
<td><input type="text"  name="refOf" id="refOf" size="15" /></td>
<td width="20%">Referenced By</td>
<td><input type="text"  name="refBy" id="refBy" size="15"/></td>
</tr>
<tr>
<td width="20%">Prirority</td>
<td><input type="text" name="priority" id="priority" size="15"/></td>
</tr>
<tr>
<td width="20%">App i.d</td>
<td/><input type="text"  name="appid" id="appid" size="15"/></td>
</tr>
<tr>
<td width="20%">Adm Date</td>
<td><input type="text"  name="admdate" id="admdate" size="15"/><tr>
<td width="30%">Visa Expiry Date</td>
<td><input type="text" name="visaedate" id="visaedate" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('dob')" style="cursor:pointer"/></td></td>
<td width="20%">Adm Number</td>
<td><input type="text"  name="admno" id="admno" size="15"/></td>
</tr>
<tr>
<td width="20%">Enrollment Number</td>
<td><input type="text"  name="enrollno" id="enrollno" size="15"/></td>
<td width="20%"></br>Roll Number</td>
<td><input type="text"  name="rollno" id="rollno" size="15"/></td>
</tr>
<tr>
<td width="20%">Adm Under</td>
<td><input type="text"  name="admunder" id="admunder"size="15"/></td>
</tr>
<tr>
<td width="20%">Programme Type</td>
<td><select name="progtype" id="progtype" >
<option value="single">Integrated(m.tech/MBA) </option>
<option value="married">M.tech </option>
<option value="married">Phd </option>
</select>
   </td>
</tr>
<tr>
<td width="20%">Alloted Category</td>
<td><select name="allotcat" id="allotcat">
<option value="general"size="20">General </option>
<option value="sc"> SC</option>
<option value="st">ST </option>
<option value="obc">OBC(U.P) </option>

     </select></td>
<td width="20%">Alloted Sub Category</td>
<td><select name="allotsubcat" id="allotsubcat">
<option value="ph">Physically Handicapped</option>
<option value="dd">DefencePersonel </option>
<option value="ff">FreedomFighter </option>
<option value="km">KashmiriMigrant</option>
<option value="f">WomenCandidate</option>
<option value="gb">WardOfGBUEmployee</option>
     </select></td>
 </tr>
<tr>
<td width="20%">Late Entry</td>
<td><input type="radio" name="late" id="late" value='yes'>Yes</input>&nbsp;&nbsp;
   <input type="radio" name="late" id="late" value='no'>No</input>
   </td>
   </tr>
   <tr>
<td width="20%">Rate in eng</td>
<td><input type="text" name="engrate" id="engrate" size="15"/></td>
</tr>
<tr>
<td><font style="font-size:0.7em;"></br>&nbsp;</td>
<td><font style="font-size:0.7em;"></br><input type="submit" name="button1" id="button1" value="Add Student" onclick="return IsTermChecked();"/></td>
<td><font style="font-size:0.7em;">&nbsp;</td>
</tr>
<tr>
</table>
</td>
</tr>
</table>
</form>

</body>
</html>







