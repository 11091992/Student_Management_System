<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$employee_id=$_SESSION['employee_id'];
if (!isset($_SESSION["employee_id"])) {
    header("location: officelogin.php"); 
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
        <li><a href="#">HOME</a></li>
        
        <li>
    <?php echo $class.'-'.$section; ?><?php echo $name; ?><a href="logout1.php">Logout</a></li>
       
      </ul>
    </div>
  </div>
<div id="main">


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
	
	
$sql1=mysql_query("SELECT * FROM `". $tablename ."`") or die("Error: ". mysql_error());?>
<form action="faculty_update_endsem.php" enctype="multiple/form-data" name="myform1" id="myform1" method="post">
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>
<th width=200>Name</th>
<th width=200>registration_no</th>
<th width=200>endsem</th>
</tr>
<?php $serial_no=1; 
 $numrows = mysql_num_rows($sql1); // count the output amount
    if ($numrows > 0) {
	    while($row1 = mysql_fetch_array($sql1)){ 
		$registration_no=$row1['registration_no'];
		$endsem=$row1['endsem'];?>
		<tr>
<td><?php echo $serial_no; ?></td>
<td><?php echo $row1['name']; ?></td>
<td><?php echo $registration_no;?></td>
<td><input type='text' name="endsem['<?php echo $row1['registration_no'];?>']" id="endsem['<?php echo $row1['registration_no']; ?>']"/></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
  
  ?>
  <tr>
  <th>&nbsp;</th>
  <th>&nbsp;</th>
   <th width='168'> <input name='targetID' type='hidden' value='<?php echo $targetID; ?>' />
  <th width='191'> <input type='submit' name='update' id='update' value='Update'></th>
  </tr>
  </tbody></table> </form>
<?php }
}
if(isset($_POST['update']))
{
if(isset($_POST['endsem'])){
include "connect.php";
$targetID = mysql_real_escape_string($_POST['targetID']);
    $sql5 = mysql_query("SELECT * FROM subject WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
	$row4=mysql_fetch_assoc($sql5);
$id=$row4['id'];
	$subject_code=$row4['subject_code'];
	$batch_from=$row4["batch_from"];
$batch_to=$row4["batch_to"];
$class=$row4["class"];
$section=$row4["section"];

	$tablename = $id."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
foreach ($_POST['endsem'] as $_id=>$_value)
{
echo $_id.'-'.$_value;
$query=mysql_query("UPDATE `". $tablename ."` SET endsem='$_value' WHERE registration_no=$_id")or die("Error: ". mysql_error());
}
header("location: faculty.php"); 
echo "Updated";
exit();
}
}
?>
</div>
</div>
</body>
</html>

