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
        <li><a href="faculty.php">HOME</a></li>
        
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
<form action="faculty_update_attendence.php" enctype="multiple/form-data" name="myform1" id="myform1" method="post">
<table cellpadding='1' cellspacing='1' border='1' style='color:black;'><tbody>
<tr><th width='50'>Serial Number</th>

<th width=200>registration_no</th>
<th width=200>attendence</th>
<th width=200>midsem</th>
<th width=200>endsem</th>
<th width=200>grade</th>
</tr>
<?php $serial_no=1; 
 $numrows = mysql_num_rows($sql1); // count the output amount
    if ($numrows > 0) {
	    while($row1 = mysql_fetch_array($sql1)){ 
		$registration_no=$row1['registration_no'];
		$attendence=$row1['attendence'];
		$midsem=$row1['midsem'];
		$endsem=$row1['endsem'];
		$sfname=$row1['sfname'];
		$smname=$row1['smname'];
		$slname=$row1['slname'];
		$grade=$row1['grade'];
		?>
		<tr>
<td><?php echo $serial_no; ?></td>
<!--<td><?php //echo $sfname."&nbsp;".$smname."&nbsp;".$slname; ?></td>-->
<td><?php echo $registration_no;?></td>
<td><?php echo $attendence; ?></td>
<td><?php echo $midsem; ?></td>
<td><?php echo $endsem; ?></td>
<td><?php echo $grade; ?></td>
</tr>
	 <?php  $serial_no=$serial_no+1;
   }
   }
  }
  else 
  echo "Student is not present";
  ?>
</tbody></table>
<input name='targetID' type='hidden' value='<?php echo $targetID; ?>' />
  </form>
</div>
</div>
</body>
</html>