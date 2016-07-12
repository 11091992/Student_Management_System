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
        <li><?php echo $class.'-'.$section; ?><?php echo $name; ?><a href="logout1.php">Logout</a></li>
             
      </ul>
    </div>
  </div>
<div id="main">	
<?php 
// Delete Item Question to Admin, and Delete Product if they choose
include "connect.php";
if (isset($_GET['deleteid'])) {
$let=$_GET['deleteid'];
	$sql = mysql_query("SELECT * FROM subject WHERE id='$let' LIMIT 1");
	while($row=mysql_fetch_array($sql))
	{
	$name=$row['name'];
	echo 'Do you really want to delete subject ' . $name . '? <a href="subject_added.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a> | <a href="subject_added.php">No</a>';
	}
	exit();
}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	include "connect.php";
	$sql8=mysql_query("SELECT * FROM subject WHERE id='$id_to_delete' LIMIT 1") or die(mysql_error());
	while($t=mysql_fetch_array($sql8))
	{
	$id=$t['id'];
	$subject_code=$t['subject_code'];
	$class=$t['class'];
	$section=$t['section'];
	$batch_from=$t['batch_from'];
	$batch_to=$t['batch_to'];
	$table=$id."-".$subject_code."-".$class."-".$section."-".$batch_from."-".$batch_to;
		$sql9="DROP TABLE `".$table."`";
	mysql_query($sql9) or die (mysql_error());
	}
	$sql = mysql_query("DELETE FROM subject WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	header("location: subject_added.php"); 
	echo $table;

    exit();
}       
?>


<?php
 include "connect.php";
$subject_added = "";
$sql=mysql_query("SELECT * FROM subject ORDER BY date_added DESC") or die (mysql_error());
$productcount=mysql_num_rows($sql);
if($productcount>0){
while($row=mysql_fetch_array($sql)){
$id=$row["id"];
$total_lectures=$row["total_lectures"];
$credits=$row["credits"];
$name=$row["name"];
$batch_from=$row["batch_from"];
$batch_to=$row["batch_to"];
$section=$row["section"];
$class=$row["class"];
$semester=$row["semester"];
$employee_id=$row["employee_id"];
$subject_code=$row["subject_code"];
$date_added=strftime("%b %d, %y", strtotime($row["date_added"]));
$subject_added.="Class: <strong>$class</strong> - <strong>$section</strong>&nbsp;&nbsp;Subject Code : <strong>$subject_code</strong> - <strong>$name</strong> - &nbsp;&nbsp;<a href='subject_edit.php?pid=$id'>edit</a> &bull; <a href='subject_added.php?deleteid=$id'>Delete</a></br>";
}
}else{
$subject_added='You have no subjects in the database';
}
?>
<h2>Subject List</h2>
<?php echo $subject_added;?>
</div>		
</body>
</html>