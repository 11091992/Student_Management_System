<?php
//error_reporting(E_ALL ^ E_NOTICE);
session_start();
$userid=$_SESSION['userid'];
$registration_no=$_SESSION['registration_no'];
if (!isset($_SESSION["registration_no"])) {
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
        <li><a href="#">Home</a></li>
        <li><?php echo $class.'-'.$section; ?><?php echo $name; ?><a href="logout1.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main">	



<?php
	
require_once 'connect.php';
if($registration_no){
if (isset($_GET['pid'])) {
	echo "<font size='5'></font>";
	$targetID = $_GET['pid'];
	   // $sql = mysql_query("SELECT * FROM student_info WHERE registration_no='$registration_no' LIMIT 1")or die("Error: ". mysql_error());
$q=mysql_query("SELECT * FROM subject WHERE id='$targetID'") or die("Error: ". mysql_error());

while($row1=mysql_fetch_array($q))
{ 
$id=$row1['id'];
$credits=$row1['credits'];
$total_lectures=$row1['total_lectures'];
$subject_name=$row1['name'];
	$subject_code=$row1['subject_code'];
$class=$row1['class']; 
$section=$row1['section'];
$batch_from=$row1['batch_from'];
$batch_to=$row1['batch_to'];
$tablename=$id."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;?>
</br></br><table cellpadding='1' cellspacing='1' border='0' width='100%'><tbody>
<tr>
<td width='30%'>Subject Code</td>
<td><?php echo $subject_code; ?></td>
</tr>
<tr>
<td>Subject Name</td>
<td><?php echo $subject_name; ?></td>
</tr>
<tr>
<td>Credits</td>
<td><?php echo $credits ?></td>
</tr>
<tr>
<td>Total Lectures</td>
<td><?php echo $total_lectures; ?></td>
</tr><?php
$t=mysql_query("SELECT * FROM `". $tablename ."` WHERE registration_no='$registration_no'") or die("Error: ". mysql_error());
$row=mysql_fetch_array($t);

	$lectures_held=$row['lectures_held'];
?>
<tr>
<td>Lectures Held</td>
<td><?php echo $lectures_held; ?></td>	
</tr>
<tr>
<td>Lectures Attended</td>
<td><?php echo $row['attendence']; ?></td>	
</tr>
<tr>
<td>Mid Semester Marks</td>
<td><?php echo $row['midsem']; ?></td>	
</tr>
<tr>
<td>End Semester Marks</td>
<td><?php echo $row['endsem']; ?></td>	
</tr>
<tr>
<td>Grade</td>
<td><?php echo $row['grade']; ?></td>	
</tr>
</tbody></table>
<?php
}
}
}?></div>
</body>
</html>