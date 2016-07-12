<?php 
session_start();
if (!isset($_SESSION["username"])) {
    header("location: officelogin.php"); 
    exit();
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
<title>ICT</title>
<script>
function myFunction() {
    window.print();
}
</script>
</head>
<body>

<div id="wrap">
  <div id="top">
    <div class="rights"> </div>
    <div id="search"> </div>
    <div class="lefts">
      <h1>Student Details</h1>
     
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


<div style="margin-left:-130px;">

<form method="POST" action="student_info.php" target="_balnk">
<button onclick="myFunction()">Print this page</button>
<?php if(empty($same_page)): ?>
   <input type="hidden" name="same-page" value="1"/>
   <input id="export-btn" type="submit" value="Export as Excel"/>
 </form>
<?php endif; ?>

<?php
	include "connect.php";
$r=mysql_query("SELECT * FROM student_fees");?>
<table cellpadding='1' cellspacing='5' border='1'><tbody>
<tr>
<td><b>S.No.</b></td>
<td><b>Registration No.</b></td>
<td><b>Admission No.</td>
<td><b>Roll No.</td>
<td><b>Name</td>
<td><b>Programme</td>
<td><b>School</td>
<td><b>Admission Status</td>
<td><b>Sub Status</td>
<td><b>Session</td>
<td><b>Admission Under</td>
<td><b>Feecat</td>
<td><b>Account ID</td>
<td><b>Father Income</td>
<td><b>Father Name</td>
<td><b>Category Quota</td>
<td><b>Subcategory Quota</td>
<td><b>Current Semester</td>
<td><b>Receipt Number</td>
<td><b>Fyref Number</td>
<td><b>Adjustable Amount</td>
<td><b>Dues Upto</td>
<td><b>Receipt Date</td>
<td><b>Get Reg Amount</td>
<td><b>Mode</td>
<td><b>Bank</td>
<td><b>Cash DD Number</td>
<td><b>Cash DD Date</td>
<td><b>Pay At</td>
<td><b>Amount</td>
<td><b>Mode1</td>
<td><b>Bank1</td>
<td><b>Cash DD Number1</td>
<td><b>Cash DD Date1</td>
<td><b>pay At1</td>
<td><b>Cash1</td>
<td><b>Bank2</td>
<td><b>Cash Bank</td>
<td><b>to Be RECE</td>
<td><b>Total Amount</td>
<td><b>Amount1</td>
<td><b>FeesDate</td>
<td><b>Fees tuition</td>
<td><b>Fees Due</td>
<td><b>Fees Receive</td>
<td><b>Fees Balance</td>
<td><b>Fees Date1</td>
<td><b>Fees Library</td>
<td><b>Fees Due1</td>
<td><b>Fees Receive1</td>
<td><b>Fees Balance1</td>
<td><b>Total Due</td>
<td><b>Total Received</td>
<td><b>Total Balance</td>
<td><b>Total Adjustable</td>
<td><b>Remark</td>
<td><b>Receipt</td>
</tr>
<?php
$serial_no=1; 
$productCount = mysql_num_rows($r); // count the output amount
if ($productCount > 0) {
while($row=mysql_fetch_array($r)){
$registration_no=$row['registration_no'];	
$sname=$row['sname'];
$admno=$row['admno'];
$rollno=$row['rollno'];
$programme=$row['programme'];
	$school=$row['school'];
	$adm_status=$row['adm_status'];
$substatus=$row['substatus'];
	$session=$row['session'];
	$admn_under=$row['admn_under'];
	$feecat=$row['feecat'];
	$account_id=$row['account_id'];
	$fincome=$row['fincome'];
	$fname=$row['fname'];
	$catquota=$row['catquota'];
	$subcatquota=$row['subcatquota'];
	$currsem=$row['currsem'];
	$receipt_no=$row['receipt_no'];
	$fyref_no=$row['fyref_no'];
	$get_adj_amt=$row['get_adj_amt'];
	$dues_upto=$row['dues_upto'];
	$receipt_date=$row['receipt_date'];
	$get_reg_amt=$row['get_reg_amt'];
	$mode=$row['mode'];
	$bank=$row['bank'];
	$cash_dd_no=$row['cash_dd_no'];
	$cash_dd_date=$row['cash_dd_date'];
	$pay_at=$row['pay_at'];
	$amt=$row['amt'];
	$mode1=$row['mode1'];
	$bank1=$row['bank1'];
	$cash_dd_no1=$row['cash_dd_no1'];
	$cash_dd_date1=$row['cash_dd_date1'];
	$pay_at1=$row['pay_at1'];
	$cash1=$row['cash1'];
	$bank2=$row['bank2'];
	$cash_bank=$row['cash_bank'];
	$to_be_rece=$row['to_be_rece'];
	$total_amt=$row['total_amt'];
	$amt1=$row['amt1'];
	$fees_date=$row['fees_date'];
	$fees_tution=$row['fees_tution'];
	$fees_due=$row['fees_due'];
	$fees_receive=$row['fees_receive'];
	$fees_balance=$row['fees_balance'];
	$fees_date1=$row['fees_date1'];
	$fees_library=$row['fees_library'];
	$fees_due1=$row['fees_due1'];
	$fees_receive1=$row['fees_receive1'];
	$fees_balance1=$row['fees_balance1'];
	$total_due=$row['total_due'];
	$total_received=$row['total_received'];
	$total_balance=$row['total_balance'];
	$total_adjustable=$row['total_adjustable'];
	$remark=$row['remark'];
	$receipt=$row['receipt']; 
    
$same_page = $_POST['same-page'];
if(!empty($same_page) && $same_page == 1) {
  $filename = 'Sample Table';
  header('Content-type: application/vnd.xls');
  header('Content-Disposition: attachment; filename="'.$filename.'.xls"');
}?>
<tr>
<td><?php echo $serial_no; ?></td>
<td><?php echo $registration_no; ?></td>
<td><?php echo $admno; ?></td>
<td><?php echo $rollno; ?></td>
<td><?php echo $sname; ?></td>
<td><?php echo $programme; ?></td>
<td><?php echo $school; ?></td>
<td><?php echo $adm_status; ?></td>
<td><?php echo $substatus; ?></td>
<td><?php echo $session; ?></td>
<td><?php echo 	$admn_under; ?></td>
<td><?php echo 	$feecat; ?></td>
	<td><?php echo $account_id; ?></td>
	<td><?php echo $fincome; ?></td>
	<td><?php echo $fname; ?></td>
	<td><?php echo $catquota; ?></td>
	<td><?php echo $subcatquota; ?></td>
	<td><?php echo $currsem; ?></td>
	<td><?php echo $receipt_no; ?></td>
	<td><?php echo $fyref_no; ?></td>
	<td><?php echo $get_adj_amt; ?></td>
	<td><?php echo $dues_upto; ?></td>
	<td><?php echo $receipt_date; ?></td>
	<td><?php echo $get_reg_amt; ?></td>
	<td><?php echo $mode; ?></td>
	<td><?php echo $bank; ?></td>
	<td><?php echo $cash_dd_no; ?></td>
	<td><?php echo $cash_dd_date; ?></td>
	<td><?php echo $pay_at; ?></td>
	<td><?php echo $amt; ?></td>
	<td><?php echo $mode1; ?></td>
	<td><?php echo $bank1; ?></td>
	<td><?php echo $cash_dd_no1; ?></td>
	<td><?php echo $cash_dd_date1; ?></td>
	<td><?php echo $pay_at1; ?></td>
	<td><?php echo $cash1; ?></td>
	<td><?php echo $bank2; ?></td>
	<td><?php echo $cash_bank; ?></td>
	<td><?php echo $to_be_rece; ?></td>
	<td><?php echo $total_amt; ?></td>
	<td><?php echo $amt1; ?></td>
	<td><?php echo $fees_date; ?></td>
	<td><?php echo $fees_tution; ?></td>
	<td><?php echo $fees_due; ?></td>
	<td><?php echo $fees_receive; ?></td>
	<td><?php echo $fees_balance; ?></td>
	<td><?php echo $fees_date1; ?></td>
	<td><?php echo $fees_library; ?></td>
	<td><?php echo $fees_due1; ?></td>
	<td><?php echo $fees_receive1; ?></td>
	<td><?php echo $fees_balance1; ?></td>
	<td><?php echo $total_due; ?></td>
	<td><?php echo $total_received; ?></td>
	<td><?php echo $total_balance; ?></td>
<td><?php echo $total_adjustable; ?></td>
		<td><?php echo $remark; ?></td>
		<td><?php echo $receipt; ?></td> 
    
</tr><?php  $serial_no=$serial_no+1;
}
}
?></tbody></table><?php exit();
 ?>
</div>
</body>
</html>

