<?php 
session_start();
if(!isset($_SESSION["username"])){
header("location:officelogin.php");
exit();
}
?>

<?php
 error_reporting(E_ALL);
 ini_set('display_errors','1');
?>


<?php 
// Delete Item Question to Admin, and Delete Product if they choose
if (isset($_GET['deleteid'])) {
$let=$_GET['deleteid'];
include "connect.php";
	$sql = mysql_query("SELECT * FROM student_info WHERE id='$let' LIMIT 1");
	while($row=mysql_fetch_array($sql))
	{
	$registration_no=$row['registration_no'];
	}
	echo 'Do you really want to delete student with Registration Number ' . $registration_no . '? <a href="student_list.php?yesdelete=' . $_GET['deleteid'] . '">Yes</a> | <a href="student_list.php">No</a>';
	exit();
}
//else {// header("location: student_list.php");}
if (isset($_GET['yesdelete'])) {
	// remove item from system and delete its picture
	// delete from database
	$id_to_delete = $_GET['yesdelete'];
	include "connect.php";
	$sql = mysql_query("DELETE FROM student_info WHERE id='$id_to_delete' LIMIT 1") or die (mysql_error());
	// unlink the image from server
	 // Remove The Pic -------------------------------------------
    // $pictodelete = ("student_images/$id_to_delete.jpg");
    // if (file_exists($pictodelete)) {
       		    // unlink($pictodelete);
    // }
	header("location: student_edit.php"); 
    exit();
}
?>
<?php
 include "connect.php";
$student_list = "";
$sql=mysql_query("SELECT * FROM student_info ORDER BY date_added DESC");
$productcount=mysql_num_rows($sql);
if($productcount>0){
while($row=mysql_fetch_array($sql)){
$id=$row["id"];
$registration_no=$row["registration_no"];
$sfname=$row["sfname"];
$sfname=$row["sfname"];
$sfname=$row["sfname"];
$date_added=strftime("%b %d, %y", strtotime($row["date_added"]));
$student_list.="Registration Number : $registration_no - <strong>$name</strong> - &nbsp;&nbsp;<a href='student_edit.php?pid=$id'>edit</a> &bull; <a href='student_list.php?deleteid=$id'>Delete</a></br>";
}
}else{
$student_list='You have no student in the database';
}
?>
<HTML>
<BODY>
<div style="margin-left:24px;">
<h2>Student List</h2>
<?php echo $student_list;?>
</div>
</BODY>
</HTML>