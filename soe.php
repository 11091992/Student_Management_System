




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
	
<?php
include "connect.php"; 
$sql1 = mysql_query("SELECT * FROM student_info WHERE school='soe'") or die("Error: ". mysql_error());	
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
<td><a href='student_edit.php?pid=<?php echo $id;?>'>Edit</a> &bull;<a href='student_hostel_edit.php?pid=<?php echo $id;?>'>Hostel Edit</a>&bull;<a href='student_fees_edit.php?pid=<?php echo $id;?>'>Fees Edit</a> &bull;<a href='qualification_document_edit.php?pid=<?php echo $id;?>'>Qualification Edit</a> &bull;<a href='student_display.php?deleteid=<?php echo $id;?>'>Delete</a></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
		}?></tbody></table>
		</div>
</body></html>