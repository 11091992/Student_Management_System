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
 
  $application_no = mysql_real_escape_string($_POST['application_no']);
 $registration_no = mysql_real_escape_string($_POST['registration_no']);
 $admission_roll_no = mysql_real_escape_string($_POST['admission_roll_no']);
    $sfname = mysql_real_escape_string($_POST['sfname']);
	$smname = mysql_real_escape_string($_POST['smname']);
	$slname = mysql_real_escape_string($_POST['slname']);
	$ffname = mysql_real_escape_string($_POST['ffname']);
	$fmname = mysql_real_escape_string($_POST['fmname']);
	$flname = mysql_real_escape_string($_POST['flname']);
	$mofname = mysql_real_escape_string($_POST['mofname']);
	$momname = mysql_real_escape_string($_POST['momname']);
	$molname = mysql_real_escape_string($_POST['molname']);
	$gender=mysql_real_escape_string($_POST['gender']);
	$dob=mysql_real_escape_string($_POST['dob']);
	$mstatus = mysql_real_escape_string($_POST['mstatus']);
    $blood_group=mysql_real_escape_string($_POST['blood_group']);
	$email_id = mysql_real_escape_string($_POST['email_id']);
	$phone_no = mysql_real_escape_string($_POST['phone_no']);
	$domicile=mysql_real_escape_string($_POST['domicile']);
	$domicile_number=mysql_real_escape_string($_POST['domicile_number']);
	$class=mysql_real_escape_string($_POST['class']);
	$section=mysql_real_escape_string($_POST['section']);
	$password=mysql_real_escape_string($_POST['password']);
	$nationality=mysql_real_escape_string($_POST['nationality']);
	$religion=mysql_real_escape_string($_POST['religion']);
	$other1=mysql_real_escape_string($_POST['other1']);
	$cat1=mysql_real_escape_string($_POST['cat1']);
	$minority=mysql_real_escape_string($_POST['minority']);
	$subcat1=mysql_real_escape_string($_POST['subcat1']);
	$ccno=mysql_real_escape_string($_POST['ccno']);
	$incno=mysql_real_escape_string($_POST['incno']);
	$passport_no=mysql_real_escape_string($_POST['passport_no']);
	$passport_issue_date=mysql_real_escape_string($_POST['passport_issue_date']);
	$passport_issue_place=mysql_real_escape_string($_POST['passport_issue_place']);
	$passport_expiry_date=mysql_real_escape_string($_POST['passport_expiry_date']);
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
	$status1=mysql_real_escape_string($_POST['status1']);
	$school=mysql_real_escape_string($_POST['school']);
//	$status=mysql_real_escape_string($_POST['status']);
	$substatus=mysql_real_escape_string($_POST['substatus']);
	
	$programme=mysql_real_escape_string($_POST['programme']);
	
	$programme1=mysql_real_escape_string($_POST['programme1']);
	//$programme_type=mysql_real_escape_string($_POST['programme_type']);
	//$phd=mysql_real_escape_string($_POST['phd']);
	$supername=mysql_real_escape_string($_POST['supername']);
	$csupername=mysql_real_escape_string($_POST['csupername']);
	$phdsub=mysql_real_escape_string($_POST['phdsub']);
	$phdsrc=mysql_real_escape_string($_POST['phdsrc']);
	$phdsrcdate=mysql_real_escape_string($_POST['phdsrcdate']);
	$phdrdc=mysql_real_escape_string($_POST['phdrdc']);
	$phdrdcdate=mysql_real_escape_string($_POST['phdrdcdate']);
	
	
	$batch_from=mysql_real_escape_string($_POST['batch_from']);
	$batch_to=mysql_real_escape_string($_POST['batch_to']);
	$csession=mysql_real_escape_string($_POST['csession']);
	$feecat=mysql_real_escape_string($_POST['feecat']);
	$unpaid=mysql_real_escape_string($_POST['unpaid']);
	$admsem=mysql_real_escape_string($_POST['admsem']);
	$currsem=mysql_real_escape_string($_POST['currsem']);
	$catquota=mysql_real_escape_string($_POST['catquota']);
	$subcatquota=mysql_real_escape_string($_POST['subcatquota']);
	$grp=mysql_real_escape_string($_POST['grp']);
	$refOf=mysql_real_escape_string($_POST['refOf']);
	$refBy=mysql_real_escape_string($_POST['refBy']);
	$priority=mysql_real_escape_string($_POST['priority']);
	$app_id=mysql_real_escape_string($_POST['app_id']);
	$admndate=mysql_real_escape_string($_POST['admndate']);
	$admno=mysql_real_escape_string($_POST['admno']);
	$enrollno=mysql_real_escape_string($_POST['enrollno']);
	$rollno=mysql_real_escape_string($_POST['rollno']);
	$admn_under=mysql_real_escape_string($_POST['admn_under']);
   $prog_type=mysql_real_escape_string($_POST['prog_type']);
	$allot_cat=mysql_real_escape_string($_POST['allot_cat']);
	$allot_subcat=mysql_real_escape_string($_POST['allot_subcat']);
	$late_entry=mysql_real_escape_string($_POST['late_entry']);
	//$date_added=mysql_real_escape_string($_POST['date_added']);
   // $sname=mysql_real_escape_string($_POST['sname']);
	
	include "connect.php";
	$sql=mysql_query("SELECT * FROM student_info WHERE registration_no='$registration_no' LIMIT 1");
 $productmatch=mysql_num_rows($sql);
 if($productmatch>0){
 echo 'Sorry you tried to place a duplicate "Registration Number", <a href="student_list.php">Click Here</a>';
 exit();
 }
 $sql=mysql_query("INSERT INTO student_info(registration_no,admission_roll_no,application_no,sfname,smname,slname,ffname,fmname,flname,mofname,momname,molname,
 gender,dob,mstatus,blood_group,email_id,phone_no,domicile,domicile_number,religion,other1,minority,nationality,passport_expiry_date,passport_issue_date,passport_issue_place,
 passport_no,visa_expiry_date,visa_issue_date,visa_no, visa_type, address1,city1,tehsil1,district1,state1,country1,pin1,landline1,address2,city2,tehsil2,district2,state2,
 country2, pin2,landline2,password,substatus,programme,programme1,batch_from,batch_to,csession,feecat,unpaid,admsem,currsem,catquota,subcatquota, class,section,refBy,
 refOf,priority,app_id,admndate,admno,enrollno,rollno,admn_under,prog_type,allot_cat,allot_subcat,late_entry,cat1,subcat1,ccno,incno,status1,school,grp,
 supername,csupername,phdsub,phdsrc,phdsrcdate,phdrdc,phdrdcdate,date_added)VALUES('$registration_no','$admission_roll_no','$application_no','$sfname','$smname','$slname',
 '$ffname','$fmname','$flname','$mofname','$momname','$molname','$gender','$dob','$mstatus','$blood_group','$email_id','$phone_no','$domicile','$domicile_number',
 '$religion','$other1','$minority','$nationality','$passport_expiry_date','$passport_issue_date','$passport_issue_place','$passport_no','$visa_expiry_date',
 '$visa_issue_date','$visa_no','$visa_type','$address1','$city1','$tehsil1','$district1','$state1','$country1','$pin1','$landline1','$address2','$city2',
 '$tehsil2','$district2','$state2','$country2','$pin2','$landline2','$password','$substatus','$programme','$programme1','$batch_from','$batch_to',
 '$csession','$feecat','$unpaid','$admsem','$currsem','$catquota','$subcatquota','$class','$section','$refBy','$refOf','$priority','app_id','$admndate',
 '$admno','$enrollno','$rollno','$admn_under','$prog_type','$allot_cat','$allot_subcat','$late_entry','$cat1','$subcat1','$ccno','$incno',
 '$status1','$school','$grp','$supername','$csupername','$phdsub','$phdsrc','$phdsrcdate','$phdrdc','$phdrdcdate', now())") or die(mysql_error());
 $e=mysql_query("SELECT * FROM student_info WHERE registration_no='$registration_no' ") or die(mysql_error());
 $r=mysql_num_rows($e);
 if($r>0){
	 $row4=mysql_fetch_array($e);
	 $id=$row4['id'];
$sql98=mysql_query("INSERT INTO student_hostel(id,registration_no,admno,rollno)VALUES('$id','$registration_no','$admno','$rollno')") or die(mysql_error());
 $sql8=mysql_query("INSERT INTO qualification_document(id,registration_no,admno,rollno)VALUES('$id','$registration_no','$admno','$rollno')") or die(mysql_error());
 $sql8=mysql_query("INSERT INTO student_fees(id,registration_no,admno,rollno,school,programme)VALUES('$id','$registration_no','$admno','$rollno','$school','$programme1')") or die(mysql_error());}
  $newname = "$registration_no.jpg";
	 move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], "student_images/$newname");
echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
	 //header("location: student_list.php"); 

	}
 ?>
 
 <html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
	</head>

	

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
	
//nationality

function nat(val)
{
    if(val == 'Foreign')
	{
		document.getElementById('old').setAttribute('style','visibility:visible');
	     document.getElementById('new').setAttribute('style','visibility:hidden');
	}
        
    else
	if(val=='Indian')
	{
		document.getElementById('old').setAttribute('style','visibility:hidden');
        document.getElementById('new').setAttribute('style','visibility:visible');
	}
		
}	

function dom(val)
{
    if(val == 'up')
		
			{
					document.getElementById('do').setAttribute('style','visibility:visible');
			}
	
        else
		{
			document.getElementById('do').setAttribute('style','visibility:hidden');
		}
	
			
}	
function prg(val)
{
    if(val == 'Normal')
	{ 
	document.getElementById('nrm').setAttribute('style','visibility:visible');
	document.getElementById('hello').setAttribute('style','visibility:hidden');
	}
    else
	if(val=='PHD')
	{
		document.getElementById('hello').setAttribute('style','visibility:visible');
		document.getElementById('nrm').setAttribute('style','visibility:hidden');
        
	}
}
function yoyo(val)
{
    if(val == 'Completed')
	{
		document.getElementById('hell').setAttribute('style','visibility:visible');
	}
        
    else
	if(val=='Not_Completed')
	{
		document.getElementById('hell').setAttribute('style','visibility:hidden');        
	}
		
}
function popo(val)
{
    if(val == 'Completed')
	{
		document.getElementById('hello').setAttribute('style','visibility:visible');
	}	
    else
    if(val == 'Not_Completed')
	{
		document.getElementById('hello').setAttribute('style','visibility:hidden');
	}
		
}
	
	

	

</script>

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


<div align="right" style="margin-right:25px;margin-top:-5px;">
</div><a name="studentForm" id="studentForm"></a>
<h3>
<!--<div align="right" style="margin-left:352px;">-->

<form action="student_list.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
<h1>Admission</h1>
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr><td>App No.</td>
<td><input type="text" name="application_no" id="application_no" size="15"/></td>
<td>Admn-Roll No.</td>
<td><input type="text" name="admission_roll_no" id="admission_roll_no" size="15"/></td>
<td>Reg No.</td>
<td><input type="text" name="registration_no" id="registration_no" size="15"/></td>
</tr>
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
<td><input type="text" name="dob" id="dob" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('dob')" style="cursor:pointer"/></td>
</tr>

<tr>
<td width="30%">Marital status</td>
<td><select name="mstatus" id="mstatus">
<option value="single">Single </option>
<option value="married">Married </option>
<option value="divorcee">Divorcee </option></select>
 </td>
<td width="30%">Blood Group</td>
<td><select name="blood_group" id="blood_group">
<option value="O+">O Positive </option>
<option value="O-">O Negative</option>
<option value="A+">A Positive </option>
<option value="A-">A Negative </option>
<option value="B+">B Positive</option>
<option value="B-">B Negative</option>
<option value="AB+">AB Positive </option>
<option value="AB-">AB Negative </option></select>
</td>
</tr>

<tr>
<td width="30%">Email ID</td>
<td><input type="text" name="email_id" id="email_id" size="15"/>
<td width="30%">Mobile Number</td>
<td><input type="text" name="phone_no" id="phone_no" size="15"/>
</td></tr>
<tr>
<td width="30%">Class</td>
<td><input type="text"  name="class" id="class"/></td>

<td width="30%">Section</td>
<td><input type="text"  name="section" id="section"/></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="password" id="password"/></td>
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
<option value="">None</option>
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
<td><input type="text" name="incno" id="incno" size="15"/></td></tr>

<tr>
<td width="30%">Nationality</td>
<td>
<br>

<input type="radio" name="nationality" value="Indian" class="choice"
       onClick="nat(this.value)"/>Indian

<input type="radio" name="nationality" value="Foreign" class="choice"
       onClick="nat(this.value)"/>Foreign<br>
</td>
</tr>
</table>
 <!----------------------------------------------
 ----------------->
 <div name="new" id="new" value="new" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="30%">Domicile


<input type="radio" name="domicile" value="up" class="choice"
       onClick="dom(this.value)"/>U.P

<input type="radio" name="domicile" value="other" class="choice"
       onClick="dom(this.value)"/>Other<br></td>

</tr>
</table></div>


<div name="do" id="do" value="do" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="30%">Domicile No</td>
<td><input type="text" name="domicile_number" id="domicile_number" size="15"/>
</tr>
</table></div>
 <!-----------------------------
 -------------------->
<div name="old" id="old" value="old" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="30%">Passport No.</td>
<td><input type="text" name="passport_no" id="passport_no" size="15"/>
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
<td><input type="text" name="visa_type" id="visa_type" size="15"/>
<td width="30%">Visa No.</td>
<td><input type="text" name="visa_no" id="visa_no" size="15"/>
</tr>
<tr>
<td width="30%">Visa Issue Date</td>
<td><input type="text" name="visa_issue_date" id="visa_issue_date" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('visa_issue_date')" style="cursor:pointer"/></td>
<td width="30%">Visa Expiry Date</td>
<td><input type="text" name="visa_expiry_date" id="visa_expiry_date" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('visa_expiry_date')" style="cursor:pointer"/></td></tr>

</table></div>
<table>


 
 

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
<tr>
<td>Photo</td>
<td><input type="file" name="fileToUpload" id="fileToUpload"/></td>
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
<option value="sobt">SOBT </option>
<option value="soe">SOE</option>
<option value="sohss">SOHSS</option>
<option value="sovsas">SOVSAS</option>
<option value="soljg">SOLJG </option>
<option value="sobsc">SOBSC</option>
</select>
</td>
</tr>
<tr>
<td>Programme</td>
<td>
<input type="radio" name="programme" id="programme" value="Normal" class="choice"
       onClick="prg(this.value)"/>Normal

<input type="radio" name="programme" id="programme" value="PHD" class="choice"
       onClick="prg(this.value)"/>PHD<br>
	</td>   </tr></table>
	   
	   
	   
	   <div name="nrm" id="nrm" value="nrm" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
	   
	   
<td><select name="programme1" id="programme1">
<option value="Int.mba">Int.mba</option>
<option value="MBA">MBA</option>
<option value="M.Tech(ICT)">M.Tech(ICT)</option>
<option value="Int.mtech(CSE)">Int.mtech(CSE)</option>
<option value="Int.mba(CSE)">Int.mba(CSE)</option>
<option value="Int.mtech(ECE)">Int.mtech(ECE)</option>
<option value="Int.mba(CSE)">Int.mba(CSE)</option>
<option value="M.Tech(biotech)">M.Tech(biotech) </option>
<option value="Int.mtech(biotech)">Int.mtech(biotech)</option>
<option value="Int.mba(biotech)">Int.mba(biotech)</option>
<option value="M.A(developmental studies)">M.A(developmental studies)</option>
<option value="MSW">MSW</option>
<option value="M.A(Education)">M.A(Education)</option>
<option value="M.Tech(engg.)">M.Tech(engg.)</option>
<option value="Int.mtech(engg.)">Int.mtech(engg.)</option>
<option value="Int.mba(engg.)">Int.mba(engg.)</option></select>
</td></tr></table></div>

<div name="hello" id="hello" value="hello" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="20%">Supervisior Name<input type="text" name="supername" id="supername" size="15"/></td>
</tr>
<tr>
<td width="20%">Co.Supervisior Name<input type="text" name="csupername" id="csupername" size="15"/></td>
</tr>
<tr>
<td width="20%">Subject<input type="text" name="phdsub" id="phdsub" size="15"/></td>
</tr>
<tr>
<td width="20%">Supervisior Name<input type="text" name="supername" id="supername" size="15"/></td>
</tr>
<tr>
<td width="20%">SRC</td>
<td>
<input type="radio" name="phdsrc" id="phdsrc" value="Completed" class="choice"
       onClick="yoyo(this.value)"/>Done

<input type="radio" name="phdsrc" id="phdsrc" value="Not_Completed" class="choice"
       onClick="yoyo(this.value)"/>Not Done
	   </td>

</tr>

<tr>
<td width="20%">RDC</td>
<td>
<input type="radio" name="phdrdc" id="phdrdc" value="Completed" class="choice"
       onClick="popo(this.value)"/>Done

<input type="radio" name="phdrdc" id="phdrdc" value="Not_Completed" class="choice"
       onClick="popo(this.value)"/>Not Done
	   </td>

</tr>

</table>
</div>


<div name="hell" id="hell" value="hell" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">

<tr>
<td width="20%">SRC DATE<input type="text" name="phdsrcdate" id="phdsrcdate" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('phdsrcdate')" style="cursor:pointer"/></td>
</tr>
</table>
</div>

<div name="hello" id="hello" value="hello" style="visibility:hidden" >
<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="20%">RDC DATE<input type="text" name="phdrdcdate" id="phdrdcdate" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('phdrdcdate')" style="cursor:pointer"/></td>
</tr>
</table>
</div>


<table width="90%" border="0" cellspacing="0" cellpadding="6">
<tr>
<td width="20%">Batch</td>
<td></br><input type="text" maxlength="4" size="4" name="batch_from" id="batch_from"/>&nbsp;&nbsp;-&nbsp;&nbsp;<input type="text" size="4" maxlength="4" name="batch_to" id="batch_to"/>
</b></td>
<td width="20%">Current Session</td>
<td><input type="text" name="csession" id="csession" size="15"/></td>
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
<td/><input type="text"  name="app_id" id="app_id" size="15"/></td>
</tr>
<tr>
<td width="20%">Adm Date</td>
<td><input type="text"  name="admndate" id="admndate" size="15"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('admndate')" style="cursor:pointer"/></td>
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
<td><input type="text"  name="admn_under" id="admn_under"size="15"/></td>
</tr>
<tr>
<td width="20%">Programme Type</td>
<td><select name="prog_type" id="prog_type" >
<option value="single">Integrated(m.tech/MBA) </option>
<option value="married">M.tech </option>
<option value="married">Phd </option>
</select>
   </td>
</tr>
<tr>
<td width="20%">Alloted Category</td>
<td><select name="allot_cat" id="allot_cat">
<option value="general"size="20">General </option>
<option value="sc"> SC</option>
<option value="st">ST </option>
<option value="obc">OBC(U.P) </option>

     </select></td>
<td width="20%">Alloted Sub Category</td>
<td><select name="allot_subcat" id="allot_subcat">
<option value="">None</option>
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
<td><input type="radio" name="late_entry" id="late_entry" value='yes'>Yes</input>&nbsp;&nbsp;
   <input type="radio" name="late_entry" id="late_entry" value='no'>No</input>
   </td>
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
           
      </div><!-- /sidy__content -->
    </div><!-- /sidy -->

</body>
</html>







