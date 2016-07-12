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
       	<li><a href="student_list.php">Add Student</a></li>
        <li><a href="student_display.php">Student List</a></li>
        <li><a href="table.php">Tables</a></li>
		<li><a href="school.php">School List</a></li>
        <li><a href="logoutadmin.php">Logout</a></li>
             
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
	if(val==="batch"){
	   document.getElementById('school').style.display='block';
   document.getElementById('batch').style.display='block';}
    else{
//		document.getElementById('school').style.display='none';
       document.getElementById('batch').style.display='none'; 
	}
	if(val==="class"){
	   document.getElementById('school').style.display='block';
   document.getElementById('class').style.display='block';}
    else{
//		document.getElementById('school').style.display='none';
       document.getElementById('class').style.display='none'; 
	}
	if(val==="registration_no"){
		//document.getElementById('school').style.display='block';
   document.getElementById('registration_no').style.display='block';}
    else{
	//	document.getElementById('school').style.display='none';
       document.getElementById('registration_no').style.display='none'; 
	}
	if(val==="fees_cat"){
		document.getElementById('school').style.display='block';
   document.getElementById('fees_cat').style.display='block';}
    else{
		//document.getElementById('school').style.display='none';
       document.getElementById('fees_cat').style.display='none'; 
	}
	if(val==="nationality"){
		document.getElementById('school').style.display='block';
   document.getElementById('nationality').style.display='block';}
    else{
		//document.getElementById('school').style.display='none';
       document.getElementById('nationality').style.display='none'; 
	}
	if(val==="category"){
		document.getElementById('school').style.display='block';
   document.getElementById('category').style.display='block';}
    else{
		//document.getElementById('school').style.display='none';
       document.getElementById('category').style.display='none'; 
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
<form action="student_display.php" enctype="multipart/form-data" name="myForm" id="myform" method="post">
<table><tr><td>Search By <select name="searchby" onchange='checkvalue(this.value)'>
<option></option>
<option value="school">School</option>
<option value="class">Class</option>
<option value="batch">Batch</option>
<option value="programme">Programme</option>
<option value="sname">Name</option>
<option value="fees_cat">Fees</option>
<option value="registration_no">Registration_no</option>
<option value="nationality">Nationality</option>
<option value="category">Category </option>
<option value="subcategory">Subcategory</option>
</select></td>
<td>
<select name="school" id="school" style='display:none'>
<option></option>
<option value="soict">SOICT </option>
<option value="som">SOM</option>
<option value="sobt">SOBT </option>
<option value="soe">SOE</option>
<option value="sohss">SOHSS</option>
<option value="sovsas">SOVSAS</option>
<option value="soljg">SOLJG </option>
<option value="sobsc">SOBSC</option>
</select>
<label id="batch" name="batch" style='display:none'>
Batch From<input type="text" name="batch_from"/> 
Batch To<input type="text" name="batch_to"/>
</label>
<label id="class" name="class" style='display:none'>
Class<input type="text" name="class"/> 
Section<input type="text" name="section"/>
</label>
<label id="sname" name="sname" style='display:none'>
Student First Name<input type="text" name="sfname"/> 
</label>
<label id="registration_no" name="registration_no" style='display:none'>
Student Registration Number<input type="text" name="registration_no"/> 
</label>
<label id="category" name="category" style='display:none'>
Category<select name="category" id="category">
<option></option>
<option value="general"size="20">General </option>
<option value="sc"> SC</option>
<option value="st">ST </option>
<option value="obc">OBC(U.P) </option>
     </select>
</label>
<label id="subcategory" name="subcategory" style='display:none'>
Sub-Category<select name="subcategory" id="subcategory">
<option></option>
<option value="ph">Physically Handicapped</option>
<option value="dd">DefencePersonel </option>
<option value="ff">FreedomFighter </option>
<option value="km">KashmiriMigrant</option>
<option value="f">WomenCandidate</option>
<option value="gb">WardOfGBUEmployee</option>
     </select>
</label>
<label id="fees_cat" name="fees_cat" style='display:none'>
<input type="radio" name="fees_cat" id="fees_cat" value="paid"/>Paid
<input type="radio" name="fees_cat" id="fees_cat" value="unpaid"/>Unpaid
</label>
<label id="nationality" name="nationality" style='display:none'>
<input type="radio" name="nationality" id="nationality" value="indian"/>Indian
<input type="radio" name="nationality" id="nationality" value="foreign"/>Foreign
</label>
<label id="programme" name="programme" style='display:none'>
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
</td><td>
<input type="submit" name="search" value="Search">
</td></tr></table>

<?php
if(isset($_POST['search'])){
	include "connect.php";
$searchby = mysql_real_escape_string($_POST['searchby']);
	if($_POST['sfname']){
	$sfname=mysql_real_escape_string($_POST['sfname']);
		
		
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
		if($school != ""){
$sql1 = mysql_query("SELECT * FROM student_info WHERE school='$school' AND sfname='$sfname'") or die("Error: ". mysql_error());	
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
$productCount = mysql_num_rows($sql1); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql1)){ 
             $id = $row["id"];
			 $sfname = $row["sfname"];
			 	 $smname = $row["smname"];
				 	 $slname = $row["slname"];
					 $ffname = $row["ffname"];
			 	 $fmname = $row["fmname"];
				 	 $flname = $row["flname"];
					 $mofname = $row["mofname"];
			 	 $momname = $row["momname"];
				 	 $molname = $row["molname0"];
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
		}}?></tbody></table><?php exit();
		
} 
$sql2 = mysql_query("SELECT * FROM student_info WHERE sfname='$sfname' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
$productCount = mysql_num_rows($sql2); // count the output amount
if ($productCount > 0) {
	while($row1 = mysql_fetch_array($sql2)){ 
             $id = $row1["id"];
			 $sfname = $row1["sfname"];
			 	 $smname = $row1["smname"];
				 	 $slname = $row1["slname"];
					 $ffname = $row1["ffname"];
			 	 $fmname = $row1["fmname"];
				 	 $flname = $row1["flname"];
					 $mofname = $row1["mofname"];
			 	 $momname = $row1["momname"];
				 	 $molname = $row1["molname"];
			 $registration_no = $row1["registration_no"];
			 $class=$row1['class'];
			 $section=$row1['section'];
			 $programme=$row1['programme'];
			 $batch_from=$row1['batch_from'];
			 $batch_to=$row1['batch_to'];
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody>
   </table><?php	
}
else
if($_POST['class']){
	$class=mysql_real_escape_string($_POST['class']);
		$section=mysql_real_escape_string($_POST['section']);
		
		
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
		if($school != ""){
$sql1 = mysql_query("SELECT * FROM student_info WHERE school='$school' AND class='$class' AND section='$section'") or die("Error: ". mysql_error());	
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
$productCount = mysql_num_rows($sql1); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql1)){ 
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student__hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
		}}?></tbody></table><?php exit();
		
} 
$sql2 = mysql_query("SELECT * FROM student_info WHERE class='$class' AND section='$section' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
$productCount = mysql_num_rows($sql2); // count the output amount
if ($productCount > 0) {
	while($row1 = mysql_fetch_array($sql2)){ 
             $id = $row1["id"];
			 $sfname = $row1["sfname"];
			 	 $smname = $row1["smname"];
				 	 $slname = $row1["slname"];
					 $ffname = $row1["ffname"];
			 	 $fmname = $row1["fmname"];
				 	 $flname = $row1["flname"];
					 $mofname = $row1["mofname"];
			 	 $momname = $row1["momname"];
				 	 $molname = $row1["molname"];
			 $registration_no = $row1["registration_no"];
			 $class=$row1['class'];
			 $section=$row1['section'];
			 $programme=$row1['programme'];
			 $batch_from=$row1['batch_from'];
			 $batch_to=$row1['batch_to'];
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student__hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody>
   </table><?php	
}
else
if($_POST['batch_from']){
	$batch_from=mysql_real_escape_string($_POST['batch_from']);
		$batch_to=mysql_real_escape_string($_POST['batch_to']);		
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
		if($school != ""){
$sql1 = mysql_query("SELECT * FROM student_info WHERE school='$school' AND batch_from='$batch_from' AND batch_to='$batch_to'") or die("Error: ". mysql_error());	
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
$productCount = mysql_num_rows($sql1); // count the output amount
if ($productCount > 0) {
	while($row = mysql_fetch_array($sql1)){ 
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
		}}?></tbody></table><?php exit();
		
} 
$sql2 = mysql_query("SELECT * FROM student_info WHERE batch_from='$batch_from' AND batch_to='$batch_to' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
$productCount = mysql_num_rows($sql2); // count the output amount
if ($productCount > 0) {
	while($row1 = mysql_fetch_array($sql2)){ 
             $id = $row1["id"];
			 $sfname = $row1["sfname"];
			 	 $smname = $row1["smname"];
				 	 $slname = $row1["slname"];
					 $ffname = $row1["ffname"];
			 	 $fmname = $row1["fmname"];
				 	 $flname = $row1["flname"];
					 $mofname = $row1["mofname"];
			 	 $momname = $row1["momname"];
				 	 $molname = $row1["molname"];
			 $registration_no = $row1["registration_no"];
			 $class=$row1['class'];
			 $section=$row1['section'];
			 $programme=$row1['programme'];
			 $batch_from=$row1['batch_from'];
			 $batch_to=$row1['batch_to'];
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody>
   </table><?php	
}
else if($_POST['registration_no']){
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody></table><?php	
}
else if($_POST['fees_cat']){
	$fees=mysql_real_escape_string($_POST['fees_cat']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
		if($school != ""){
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
		}	}?></tbody></table><?php exit();
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['nationality']){
	$nation=mysql_real_escape_string($_POST['nationality']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
		if($school != ""){
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND nationality='$nation' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
		}	}?></tbody></table><?php exit();
}
	//$school=mysql_real_escape_string($_POST['school']);
$sql = mysql_query("SELECT * FROM student_info WHERE nationality='$nation' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['programme']){
	$program=mysql_real_escape_string($_POST['programme']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND programme='$program' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php exit();
}

	$sql = mysql_query("SELECT * FROM student_info WHERE programme='$program' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['category']){
	$cat=mysql_real_escape_string($_POST['category']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND cat1='$cat' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
	 exit();
   }
   }	?></tbody></table><?php exit();
}

	$sql = mysql_query("SELECT * FROM student_info WHERE cat1='$cat' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	?></tbody></table><?php
}
else if($_POST['subcategory']){
	$subcat=mysql_real_escape_string($_POST['subcategory']);
if($_POST['school']){
		$school=mysql_real_escape_string($_POST['school']);	
$sql = mysql_query("SELECT * FROM student_info WHERE school='$school' AND subcat1='$subcat' ORDER BY date_added ASC") or die("Error: ". mysql_error());
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull; <a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }	
?></tbody></table><?php   exit();
}
	$sql = mysql_query("SELECT * FROM student_info WHERE subcat1='$subcat' ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a> &bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;   }
   }	
?></tbody></table><?php
}
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a>  &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }?></tbody></table><?php	exit();
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
	$sql = mysql_query("DELETE FROM student_hostel WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	$sql = mysql_query("DELETE FROM qualification_document WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	// unlink the image from server
	// Remove The Pic -------------------------------------------
    $pictodelete = ("student_images/$registration_no.jpg");
    if (file_exists($pictodelete)) {
       		    unlink($pictodelete);
    }
	$pictodelete1 = ("student_sign/$registration_no.jpg");
    if (file_exists($pictodelete1)) {
       		    unlink($pictodelete1);
    }
	$pictodelete2 = ("mother_sign/$registration_no.jpg");
    if (file_exists($pictodelete2)) {
       		    unlink($pictodelete2);
    }
	$pictodelete3 = ("mother_images/$registration_no.jpg");
    if (file_exists($pictodelete3)) {
       		    unlink($pictodelete3);
    }
	$pictodelete4 = ("father_images/$registration_no.jpg");
    if (file_exists($pictodelete4)) {
       		    unlink($pictodelete4);
    }
	$pictodelete5 = ("father_sign/$registration_no.jpg");
    if (file_exists($pictodelete5)) {
       		    unlink($pictodelete5);
    }
	
	//header("location: student_display.php"); 
    exit();
}
?>
</div>
</body></html>