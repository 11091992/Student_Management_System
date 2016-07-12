<?php 
session_start();
if(!isset($_SESSION["username"])){
header("location:officelogin.php");
exit();
}
?>
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
        <li><a href="logout1.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main">	


  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script type="text/javascript">
	function checkvalue(val)
{
    if(val==="school"){
	document.getElementById('school').style.display='block';}
   //else{
    //document.getElementById('school').style.display='none'; }
   
   if(val==="sname"){
	   document.getElementById('school').style.display='block';
   document.getElementById('sname').style.display='block';}
    else{
//		document.getElementById('school').style.display='none';
       document.getElementById('sname').style.display='none'; 
	}
	if(val==="registration_no"){
		//document.getElementById('school').style.display='block';
   document.getElementById('registration_no').style.display='block';}
    else{
	//	document.getElementById('school').style.display='none';
       document.getElementById('registration_no').style.display='none'; 
	}
	
	if(val==="category"){
		document.getElementById('school').style.display='block';
   document.getElementById('category').style.display='block';}
    else{
		//document.getElementById('school').style.display='none';
       document.getElementById('category').style.display='none'; 
	}
	if(val==="fees"){
		document.getElementById('school').style.display='block';
  document.getElementById('fees').style.display='block';
  }
  else{
		//document.getElementById('school').style.display='none';
       document.getElementById('fees').style.display='none'; 
	}  
 	if(val==="subcategory"){
		document.getElementById('school').style.display='block';
   document.getElementById('subcategory').style.display='block';}
    else{
		//document.getElementById('school').style.display='none';
       document.getElementById('subcategory').style.display='none'; 
	}
	if(val==="programme"){
		document.getElementById('school').style.display='block';
   document.getElementById('programme').style.display='block';}
    else{
       document.getElementById('programme').style.display='none';
//document.getElementById('school').style.display='none';	   
	}
}
</script>
<form action="student_display_try.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
<table><tr><td>Search By <select name="searchby" onchange='checkvalue(this.value)'>
<option>&nbsp;</option>
<option value="school">School</option>
<option value="programme">Programme</option>
<option value="sname">Name</option>
<option value="registration_no">Registration_no</option>
<option value="fees">Fees</option>
<option value="indian">Nationality-Indian</option>
<option value="foreign">Nationality-Foreign</option>
<option value="category">Category </option>
<option value="subcategory">Subcategory</option>
</select></td>
<td>
<select name="school" id="school" style='display:none'>
<option value="soict">SOICT </option>
<option value="som">SOM</option>
<option value="sobt">SOBT </option>
<option value="soe">SOE</option>
<option value="sohss">SOHSS</option>
<option value="sovsas">SOVSAS</option>
<option value="soljg">SOLJG </option>
<option value="sobsc">SOBSC</option>
</select>
<label id="sfname" name="sfname" style='display:none'>
Student First Name<input type="text" id="sfname" name="sfname"/> 
Middle<input type="text" name="smname" id="smname"/>
Last<input type="text" name="slname" id="slname"/></label>
<label  id="registration_no1" name="registration_no1" style='display:none'>
Student Registration Number<input type="text" id="registration_no" name="registration_no"/> 
</label>
<label id="fee_cat" name="fee_cat" style='display:none'>
Fees <input type="radio" name="fees" value="paid" id="fees">Paid&nbsp;&nbsp;<input type="radio" name="fees" value="unpaid" id="fees">Unpaid</label>
<label id="category" name="category" style='display:none'>
Category<select name="cat1" id="cat1">
<option></option>
<option value="general"size="20">General </option>
<option value="sc"> SC</option>
<option value="st">ST </option>
<option value="obc">OBC(U.P) </option>
     </select>
</label>
<label id="subcategory" name="subcategory" style='display:none'>
Sub-Category<select name="subcat1" id="subcat1">
<option></option>
<option value="ph">Physically Handicapped</option>
<option value="dd">DefencePersonel </option>
<option value="ff">FreedomFighter </option>
<option value="km">KashmiriMigrant</option>
<option value="f">WomenCandidate</option>
<option value="gb">WardOfGBUEmployee</option>
     </select>
</label><label id="programme1" name="programme1" style='display:none'>
Programme<select name="programme" id="programme">
<option></option>
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
<option value="Int.mba(engg.)">Int.mba(engg.)</option></select></label>
</td><td></br>
<input type="submit" name="search" value="Search">
</td></tr></table></form>

<?php
if(isset($_POST['search'])){
	include "connect.php";
$searchby = mysql_real_escape_string($_POST['searchby']);
if($_POST['school']){
	$school=mysql_real_escape_string($_POST['school']);
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' ORDER BY date_added ASC") or die("Error: ". mysql_error());?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody></table><?php	exit();
}
if($_POST['sfname']){
	$sfname=mysql_real_escape_string($_POST['sfname']);
		$smname=mysql_real_escape_string($_POST['smname']);
			$slname=mysql_real_escape_string($_POST['slname']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND (sfname='$sfname' OR smname='$smname' OR slname='$slname')") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody></table><?php	exit();
} 
$sql = mysql_query("SELECT * FROM student_info WHERE sfname='$sfname' OR smname='$smname' OR slname='$slname' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody>
   </table><?php	exit();
}
	if($_POST['registration_no']){
	$registration_no=mysql_real_escape_string($_POST['registration_no']);
	$sql = mysql_query("SELECT * FROM student_info WHERE registration_no='$registration_no' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
	?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	$row = mysql_fetch_array($sql);
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   ?></tbody></table><?php	exit();
}
if($_POST['fees']){
	$fees=mysql_real_escape_string($_POST['fees']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND feecat='$fees' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
	//$school=mysql_real_escape_string($_POST['school']);
$sql = mysql_query("SELECT * FROM student_info WHERE feecat='$fees' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['indian']){
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND nationality='Indian' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody></table><?php	
}

	//$school=mysql_real_escape_string($_POST['school']);
$sql = mysql_query("SELECT * FROM student_info WHERE nationality='Indian' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody></table><?php	
}
else if($_POST['foreign']){
	$school=mysql_real_escape_string($_POST['school']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND nationality='Foreign' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}

	$sql = mysql_query("SELECT * FROM student_info WHERE nationality='Foreign' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
	?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['programme']){
	$programme=mysql_real_escape_string($_POST['programme']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND programme='$programme' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}

	$sql = mysql_query("SELECT * FROM student_info WHERE programme='$programme' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
	?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['cat1']){
	$category=mysql_real_escape_string($_POST['cat1']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND cat1='$category' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
	 exit();
   }
   }	?></tbody></table><?php
}

	$sql = mysql_query("SELECT * FROM student_info WHERE cat1='$category' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
	?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['subcat1']){
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND subcat1='$category' ORDER BY date_added ASC") or die("Error: ". mysql_error());
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull; <a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	
?></tbody></table><?php   
}
	$subcategory=mysql_real_escape_string($_POST['subcat1']);
$sql = mysql_query("SELECT * FROM student_info WHERE subcat1='$category' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
?>
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Student Name</th>
<th width=200>Father's Name</th>
<th width=200>Mother's Name</th>
<th width=200>Registration_no</th>
<th width=200>Class</th>
<th width=200>Programme</th>
<th width=200>Batch</th>
<th width=200>Edit/Delete</th>
</tr>
<?php $serial_no=1; 
$productCount = mysql_num_rows($sql); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname"];
			 $registration_no = $row["registration_no"];
			 $class=$row['class'];
			 $section=$row['section'];
			 $programme=$row['programme'];
			 $batch_from=$row['batch_from'];
			 $batch_to=$row['batch_to'];
			 ?>
			 <tr>
			 
<td><?php echo $serial_no; ?></td>
<td><a href='student_details.php?pid=<?php echo $id;?>'><?php echo $sfname;?>&nbsp;<?php echo $smname;?>&nbsp;<?php echo $slname;?></a></td>
<td><?php echo $ffname;?>&nbsp;<?php echo $fmname;?>&nbsp;<?php echo $flname;?></td>
<td><?php echo $mofname;?>&nbsp;<?php echo $momname;?>&nbsp;<?php echo $molname;?></td>
<td><?php echo $registration_no;?></td>
<td><?php echo $class;?>-<?php echo $section;?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;   }
   }	
?></tbody></table><?php
}
}
?>
<?php 
// Delete Item Question to Admin, and Delete Product if they choose
include "connect.php";
if (isset($_GET['deleteid'])) {
	echo 'Do you really want to delete? <a href="student_display.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a> | <a href="student_display.php">No</a>';
	exit();
}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	$sql1 = mysql_query("SELECT * FROM student_info WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	while($t=mysql_fetch_assoc($sql1))
	{
		$registration_no=$t['registration_no'];
	}
	$sql = mysql_query("DELETE FROM student_info WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	// unlink the image from server
	// Remove The Pic -------------------------------------------
    $pictodelete = ("student_images/$registration_no.jpg");
    if (file_exists($pictodelete)) {
       		    unlink($pictodelete);
    }
	//header("location: student_display.php"); 
    exit();
}
?>
</div>
</body></html>