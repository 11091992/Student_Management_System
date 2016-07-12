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
                 
      </ul>
    </div>
  </div>
<div id="main">	


<?php 
// Delete Item Question to Admin, and Delete Product if they choose
if (isset($_GET['deleteid'])) {
$let=$_GET['deleteid'];
include "connect.php";
	$sql = mysql_query("SELECT * FROM faculty_info WHERE id='$let' LIMIT 1");
	while($row=mysql_fetch_array($sql))
	{
	$employee_id=$row['employee_id'];
	
	echo 'Do you really want to delete faculty with Registration Number ' . $employee_id . '? <a href="faculty_added.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a> | <a href="faculty_added.php">No</a>';
	}exit();
}
//else {// header("location: faculty_list.php");}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	include "connect.php";
	$sql = mysql_query("DELETE FROM faculty_info WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	// unlink the image from server
	 // Remove The Pic -------------------------------------------
    // $pictodelete = ("faculty_images/$id_to_delete.jpg");
    // if (file_exists($pictodelete)) {
       		    // unlink($pictodelete);
    // }
	header("location: faculty_added.php"); 
    exit();
}
?>
 <?php
 include "connect.php";
$faculty_added = "";
$sql=mysql_query("SELECT * FROM faculty_info ORDER BY date_added DESC");
$productcount=mysql_num_rows($sql);
if($productcount>0){
while($row=mysql_fetch_array($sql)){
$id=$row["id"];
$employee_id=$row["employee_id"];
$name=$row["name"];
$date_added=strftime("%b %d, %y", strtotime($row["date_added"]));
$faculty_added.="Employee ID : $employee_id - <strong>$name</strong> - &nbsp;&nbsp;<a href='faculty_edit.php?pid=$id'>edit</a> &bull; <a href='faculty_added.php?deleteid=$id'>Delete</a></br>";
}
}else{
$faculty_added='You have no faculty in the database';
}?>

<html>
<body>
<div style="margin-left:24px;">
<h2>faculty List</h2>
<?php echo $faculty_added;?>
<div>
</div>
</body>
</html>