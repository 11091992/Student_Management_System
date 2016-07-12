// <?php
// //error_reporting(E_ALL ^ E_NOTICE);
// session_start();
// $userid=$_SESSION['userid'];
// $employee_id=$_SESSION['employee_id'];
// if (!isset($_SESSION["employee_id"])) {
    // header("location: officelogin.php"); 
    // exit();
	// }
// ?>
<html>
<body>
<div align="right" style="margin-right:32px;"><?php echo $class.'-'.$section; ?>&nbsp;&nbsp;<?php echo $name; ?><a href="logout1.php">Logout</a></div>

<?php

require_once 'connect.php';
 
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM subject WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
	$row3=mysql_fetch_assoc($sql);

	$subject_code=$row3['subject_code'];
	$batch_from=$row3["batch_from"];
$batch_to=$row3["batch_to"];
$class=$row3["class"];
$section=$row3["section"];
//$id=$row3["id"];
	$tablename=$targetID."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
	
	
$sql1=mysql_query("SELECT * FROM `". $tablename ."`") or die("Error: ". mysql_error());
echo "<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>";
echo '<tr>';
echo "<th width='50'>".serial_no."</th>";
echo '<th width=200>'.name.'</th>';
echo '<th width=200>'.registration_no.'</th>';
echo '<th width=200>'.attendence.'</th>';
echo '<th width=200>'.midterm.'</th>';
echo '<th width=200>'.endterm.'</th>';
echo '<th width=200>'.grade.'</th>';
echo '<th width=200>'.classes_attended.'</th>';
echo '</tr>';
$serial_no=1; 
 $numrows = mysql_num_rows($sql1); // count the output amount
    if ($numrows > 0) {
	    while($row1 = mysql_fetch_array($sql1)){ 
		$registration_no=$row1['registration_no'];
		$classes_attended=$row1['attended'];
		echo '<tr>';
echo '<td>'.$serial_no.'</td>';
echo '<td>'.$row1['name'].'</td>';
echo '<td>'.$registration_no.'</td>';
echo "<td><input type='text' name='classes_attended' id='classes_attended'/></td>";
echo "<td><input type='text' name='midterm' id='midterm'/></td>";
echo "<td><input type='text' name='endterm' id='endterm'/></td>";
echo "<td><input type='text' name='grade' id='grade'></td>";
echo '<td>'.$classes_attended.'<td>'; 
echo '</tr>';
	   $serial_no=$serial_no+1;
   }
   // echo '<tr>';
   // echo '<td>&nbsp;</td>';
   // echo '<td>&nbsp;</td>';
   // echo '<td>&nbsp;</td>';
   // echo '<td>'..'</td>';
   // echo '<td>'..'</td>';
   // echo '<td>'..'</td>';
   // echo '<td>'..'</td>';
   // echo '<td></td>';
   // echo '</tr>';
   echo "</tbody></table>"; 
}
}
if(isset($_POST['update']))
{
//	$targetID = $_GET['pid'];

include "connect.php";
//$attended = mysql_real_escape_string($_POST['classes_attended']);
$targetID = mysql_real_escape_string($_POST['targetID']);
//$update = mysql_real_escape_string($_POST['update']);
//$registration_no = mysql_real_escape_string($_POST['registration_no']);
//$targetID = $_GET['pid'];
    $sql5 = mysql_query("SELECT * FROM subject WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
	$row4=mysql_fetch_assoc($sql5);
$id=$row4['id'];
	$subject_code=$row4['subject_code'];
	$batch_from=$row4["batch_from"];
$batch_to=$row4["batch_to"];
$class=$row4["class"];
$section=$row4["section"];

	$tablename = $id."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
	//$classes_attended=$_POST['classes_attended'];
	//$registration_no=$_POST['registration_no'];
	$classes=$_POST['classes'];
foreach($classes as $name=>$registration_no){
echo $registration_no.'->'.$classes;
  // $index = current($_POST);
	// $sql9=mysql_query("SELECT * FROM `". $tablename ."` WHERE registration_no='$index'")or die("Error: ". mysql_error()); 
// $classes_attended=$r['attendence'];
// $classes_attended=$classes_attended+$classes_attended;
// $sql2=mysql_query("UPDATE `". $tablename ."` SET attendence='$classes_attended' WHERE registration_no='$registration_no' ")or die("Error: ". mysql_error()); 
}
exit();
}
?>
<form action="faculty_subject_info.php" enctype="multiple/form-data" name="myform1" id="myform1" method="post">

   <table cellpadding='1' cellspacing='1' border='1' style='color:black;'>
  <tr><th width='64'> <input name='classes_attended[]' type='hidden' value='<?php echo $classes_attended; ?>' />
  </th>
   <th width='145'><input name='registration_no[]' type='hidden' value='<?php echo $registration_no;   ?>' />
  </th>
   <th width='168'> <input name='targetID' type='hidden' value='<?php echo $targetID; ?>' />
  </th>
<th width='191'> <input type='submit' name='update' id='update' value='Update'></th>
  <th width='194'> <input type='submit' name='update2' id='update2' value='Update'></th>
   <th width='191'> <input type='submit' name='update3' id='update3' value='Update'></th>
  <th width='195'>  <input type='submit' name='update4' id='update4' value='Update'></th>
  <th width='170'> &nbsp;</th>
  </tr></table>
   </form>
</body>
</html>