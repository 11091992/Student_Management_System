<?php 
session_start();
if(!isset($_SESSION["username"])){
header("location:officelogin.php");
exit();
}
?>
<html>

<form action="name_search.php" enctype="multiple/form-data" name="myForm" id="myform" method="post">
<table><tr><td>
Student First Name<input type="text" name="sfname"/> 
Middle<input type="text" name="smname"/>
Last<input type="text" name="slname"/></label></td><td>
<input type="submit" name="search" value="Search">
</td></tr></table>

<?php
if(isset($_POST['search'])){
	include "connect.php";
$searchby = mysql_real_escape_string($_POST['search']);
	if($_POST['sfname']){
	$sfname=mysql_real_escape_string($_POST['sfname']);
		$smname=mysql_real_escape_string($_POST['smname']);
			$slname=mysql_real_escape_string($_POST['slname']);
$sql = mysql_query("SELECT * FROM student_info WHERE sfname='$sfname' AND (smname='$smname' OR slname='$slname') ORDER BY date_added ASC") or die("Error: ". mysql_error());	
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
}}
?>
<?php 
// Delete Item Question to Admin, and Delete Product if they choose
include "connect.php";
if (isset($_GET['deleteid'])) {
	echo 'Do you really want to delete? <a href="sd_try.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a> | <a href="sd_try.php">No</a>';
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
	//header("location: sd_try.php"); 
    exit();
}
?>
</body></html>