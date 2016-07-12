
<html>
 <head>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<title>Search</title>
</head>
<body>
<?php
if(isset($_POST['search']))
{
	$school=mysql_real_escape_string($_POST['search']);
	$sfname=mysql_real_escape_string($_POST['sfname']);
	$smname=mysql_real_escape_string($_POST['smname']);
	$slname=mysql_real_escape_string($_POST['slname']);
	if($search){
		if($sfname){
			if($smname){
				if($slname){
			include "connect.php";
			$sql=mysql_query("SELECT * FROM student_info WHERE school='$school' AND sfname='$sfname' AND smname='$smname' AND slname='$slname'") or die (mysql_error());
			$count=mysql_num_rows($sql);
			if($count>0){?>
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
			 $prog_type=$row['prog_type'];
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
<td><?php echo $prog_type; ?></td>
<td><?php echo $batch_from;?>-<?php echo $batch_to;?></td>
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull; <a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
	
?>	
<form action="search.php" enctype="multiple/form-data" name="myForm" id="myform" method="post">
<table>
<tr>
<td>
Search By School</td><td> <select name="school" id="school">
<option value="soict">SOICT </option>
<option value="som">SOM</option>
<option value="sobt">SOBT </option>
<option value="soe">SOE</option>
<option value="sohss">SOHSS</option>
<option value="sovsas">SOVSAS</option>
<option value="soljg">SOLJG </option>
<option value="sobsc">SOBSC</option>
</select></td></tr><tr><td>
Search By Name </td><td><br>Student First Name<input type="text" name="sfname"> Middle<input type="text" name="smname">Last<input type="text" name="slname"></td></tr>
<tr>
<td><input type="submit" value="Search" name="search"></td>
</tr>
</table></form></body></html>