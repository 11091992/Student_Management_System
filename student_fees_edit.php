<?php 
session_start();
if(!isset($_SESSION["username"])){
header("location:officelogin.php");
exit();
}
?>

<?php
include "connect.php";
 if(isset($_POST['save']))	 
 {  
 $pid = mysql_real_escape_string($_POST['thisID']);
	$rollno=mysql_real_escape_string($_POST['rollno']);
	$sname = mysql_real_escape_string($_POST['sname']);
	//$school=mysql_real_escape_string($_POST['school']);
	$substatus=mysql_real_escape_string($_POST['substatus']);
	$adm_status=mysql_real_escape_string($_POST['adm_status']);
	$session=mysql_real_escape_string($_POST['session']);
	$admn_under=mysql_real_escape_string($_POST['admn_under']);
	//$programme=mysql_real_escape_string($_POST['programme']);
	$fincome=mysql_real_escape_string($_POST['fincome']);
	$fname=mysql_real_escape_string($_POST['fname']);
	$feecat=mysql_real_escape_string($_POST['feecat']);
	$account_id=mysql_real_escape_string($_POST['account_id']);
	$catquota=mysql_real_escape_string($_POST['catquota']);
	$subcatquota=mysql_real_escape_string($_POST['subcatquota']);
	$currsem=mysql_real_escape_string($_POST['currsem']);
	$receipt_no=mysql_real_escape_string($_POST['receipt_no']);
	$fyref_no=mysql_real_escape_string($_POST['fyref_no']);
	$get_adj_amt=mysql_real_escape_string($_POST['get_adj_amt']);
	$dues_upto=mysql_real_escape_string($_POST['dues_upto']);
	$receipt_date=mysql_real_escape_string($_POST['receipt_date']);
	$get_reg_amt=mysql_real_escape_string($_POST['get_reg_amt']);
	$mode=mysql_real_escape_string($_POST['mode']);
	$bank=mysql_real_escape_string($_POST['bank']);
	$cash_dd_no=mysql_real_escape_string($_POST['cash_dd_no']);
	$cash_dd_date=mysql_real_escape_string($_POST['cash_dd_date']);
	$pay_at=mysql_real_escape_string($_POST['pay_at']);
	$amt=mysql_real_escape_string($_POST['amt']);
	$mode1=mysql_real_escape_string($_POST['mode1']);
	$bank1=mysql_real_escape_string($_POST['bank1']);
	$cash_dd_no1=mysql_real_escape_string($_POST['cash_dd_no1']);
	$cash_dd_date1=mysql_real_escape_string($_POST['cash_dd_date1']);
	$pay_at1=mysql_real_escape_string($_POST['pay_at1']);
	$amt1=mysql_real_escape_string($_POST['amt1']);
	$cash1=mysql_real_escape_string($_POST['cash1']);
	$bank2=mysql_real_escape_string($_POST['bank2']);
	$cash_bank=mysql_real_escape_string($_POST['cash_bank']);
	$to_be_rece=mysql_real_escape_string($_POST['to_be_rece']);
	$total_amt=mysql_real_escape_string($_POST['total_amt']);
	$fees_date=mysql_real_escape_string($_POST['fees_date']);
	$fees_tution=mysql_real_escape_string($_POST['fees_tution']);
	$fees_due=mysql_real_escape_string($_POST['fees_due']);
	$fees_receive=mysql_real_escape_string($_POST['fees_receive']);
	$fees_balance=mysql_real_escape_string($_POST['fees_balance']);
	$fees_date1=mysql_real_escape_string($_POST['fees_date1']);
	$fees_library=mysql_real_escape_string($_POST['fees_library']);
	$fees_due1=mysql_real_escape_string($_POST['fees_due1']);
	$fees_receive1=mysql_real_escape_string($_POST['fees_receive1']);
	$fees_balance1=mysql_real_escape_string($_POST['fees_balance1']);
	$total_due=mysql_real_escape_string($_POST['total_due']);
	$total_received=mysql_real_escape_string($_POST['total_received']);
	$total_balance=mysql_real_escape_string($_POST['total_balance']);
	//$total_balance=mysql_real_escape_string($_POST['total_balance']);
	$total_adjustable=mysql_real_escape_string($_POST['total_adjustable']);
	$remark=mysql_real_escape_string($_POST['remark']);
	$receipt=mysql_real_escape_string($_POST['receipt']);
 include "connect.php";
	$sql1=mysql_query("SELECT * FROM student_info WHERE id='$pid' LIMIT 1" ) or die(mysql_error());
	
 $productmatch=mysql_num_rows($sql1);
 if($productmatch>0){
	 $row = mysql_fetch_array($sql1);
			$id=$row['id'];
            $admno=$row['admno'];
			$school=$row['school'];
			$programme=$row['programme'];
			$registration_no=$row['registration_no'];

	$sql = mysql_query("UPDATE student_fees SET sname='$sname',school='$school',programme='$programme',substatus='$substatus',adm_status='$adm_status',fincome='$fincome',
	fname='$fname',session='$session',admn_under='$admn_under',feecat='$feecat',account_id='$account_id',
	catquota='$catquota',subcatquota='$subcatquota',currsem='$currsem',receipt_no='$receipt_no',fyref_no='$fyref_no',get_adj_amt='$get_adj_amt',dues_upto='$dues_upto',
	receipt_date='$receipt_date',get_reg_amt='$get_reg_amt',mode='$mode',bank='$bank',cash_dd_no='$cash_dd_no',cash_dd_date='$cash_dd_date',pay_at='$pay_at',amt='$amt',
	mode1='$mode1',bank1='$bank1',cash_dd_no1='$cash_dd_no1',cash_dd_date1='$cash_dd_date1',pay_at1='$pay_at1',cash1='$cash1',bank2='$bank2',cash_bank='$cash_bank',
	to_be_rece='$to_be_rece',total_amt='$total_amt',amt1='$amt1',fees_date='$fees_date',fees_tution='$fees_tution',fees_due='$fees_due',fees_receive='$fees_receive',fees_balance='$fees_balance',
	fees_date1='$fees_date1',fees_library='$fees_library',fees_due1='$fees_due1',fees_receive1='$fees_receive1',fees_balance1='$fees_balance1',total_due='$total_due',
	total_received='$total_received',total_balance='$total_balance',total_adjustable='$total_adjustable',remark='$remark',receipt='$receipt' WHERE id='$pid'")or die(mysql_error());
//echo 'hello';
	echo "<script type='text/javascript'>alert('submitted successfully!')</script>";
 //header("location:student_display.php"); 
    exit();
}	
echo "Add student details first.";
}
?>
<?php 
// Gather this product's full information for inserting automatically into the edit form below on page
include "connect.php";
if (isset($_GET['pid'])) {
	$targetID = $_GET['pid'];
    $sql = mysql_query("SELECT * FROM student_fees WHERE id='$targetID' LIMIT 1")or die("Error: ". mysql_error());
    $productCount = mysql_num_rows($sql); // count the output amount
    if ($productCount > 0) {
	   $row = mysql_fetch_array($sql); 
  		 $sname=$row['sname'];
		 //$smname=$row['smname'];
		 //$slname=$row['slname'];
	//$school=$row['school'];
	$substatus=$row['substatus'];
	$adm_status=$row['adm_status'];
	$session=$row['session'];
	$admn_under=$row['admn_under'];
	//$programme=$row['programme'];
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
	$amt1=$row['amt1'];
	$cash1=$row['cash1'];
	$bank2=$row['bank2'];
	$cash_bank=$row['cash_bank'];
	$to_be_rece=$row['to_be_rece'];
	$total_amt=$row['total_amt'];
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
    }
	else {
	    echo "Sorry, this student does not exist.";
		exit();
    }
}
?>
<html>
<head>

<script type="text/javascript">
 function receipt(val)
{
    if(val == 'Cancel')
	{ 
	document.getElementById('can').setAttribute('style','visibility:visible');
	document.getElementById('not').setAttribute('style','visibility:hidden');
	}
    else
	if(val=='Not_Cancel')
	{
		document.getElementById('can').setAttribute('style','visibility:visible');
		document.getElementById('not').setAttribute('style','visibility:hidden');
        
	}
}

</script>
   <script src="datetimepicker_css.js"></script>
<title>ICT</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
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


<form action="student_fees_edit.php?pid=<?php echo $targetID;?>" enctype="multipart/form-data" name="myForm" id="myform" method="post">
<h1>Fee Receipt</h1>

<table width="90%" border="0" cellspacing="5" cellpadding="6">
<tr>
<td>Student Name</td>
<td><input type="text" name="sname" id="sname" size="15" value="<?php echo $sname; ?>"/></td>
<td>Roll No.</td>
<td><input type="text" name="rollno" id="rollno" size="15" value="<?php echo $rollno; ?>"/></td>
</tr>

<tr>
<td>Adm Status</td>
<td><input type="text" name="adm_status" id="adm_status" size="15" value="<?php echo $adm_status; ?>"/></td>
<td>Sub Status</td>
<td><input type="text" name="substatus" id="substatus" size="15" value="<?php echo $substatus; ?>"/></td>

</tr>

<tr>
<td>Session</td>
<td><input type="text" name="session" id="session" size="15" value="<?php echo $session; ?>"/></td>
<td>Adm Under</td>
<td><input type="text" name="admn_under" id="admn_under" size="15" value="<?php echo $admn_under; ?>"/></td>
</tr>

<tr>
<td>Father's Name</td>
<td><input type="text" name="fname" id="fname" size="15" value="<?php echo $fname; ?>"/></td>
<td>Monthly Income</td>
<td><input type="text" name="fincome" id="fincome" size="15" value="<?php echo $fincome; ?>"/></td>
</tr>

<tr>
<td>Fee Category</td>
<td><input type="text" name="feecat" id="feecat" size="15" value="<?php echo $feecat; ?>"/></td>
</tr>

<tr>
<td>Account I.D.</td>
<td><input type="text" name="account_id" id="account_id" size="15" value="<?php echo $account_id; ?>"/></td>
<td>Semester</td>
<td><input type="text" name="currsem" id="currsem" size="15" value="<?php echo $currsem; ?>"/></td>
</tr>

<tr>
<td>Quota</td>
<td><input type="text" name="catquota" id="catquota" size="15" value="<?php echo $catquota; ?>"/></td>
<td>Sub Quota</td>
<td><input type="text" name="subcatquota" id="subcatquota" size="15" value="<?php echo $subcatquota; ?>"/></td>
</tr>
</table>

<br>
<hr/>
<br><br>

<table width="90%" border="0" cellspacing="5" cellpadding="6">
<tr>
<td>Receipt No.</td>
<td><input type="text" name="receipt_no" id="receipt_no" size="15" value="<?php echo $receipt_no; ?>"/></td>
<td>FY Ref No.</td>
<td><input type="text" name="fyref_no" id="fyref_no" size="15" value="<?php echo $fyref_no; ?>"/></td>
<td>Get Adj.Amt.</td>
<td><input type="text" name="get_adj_amt" id="get_adj_amt" size="15" value="<?php echo $get_adj_amt; ?>"/></td></tr>
<tr>
<td>Dues Upto</td>
<td><input type="text" name="dues_upto" id="dues_upto" size="15" value="<?php echo $dues_upto; ?>"/></td>
<td>Receipt Date</td>
<td><input type="text" name="receipt_date" id="receipt_date" size="15" value="<?php echo $receipt_date; ?>"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('receipt_date')" style="cursor:pointer"/></td>
<td>Get Reg. Amt.</td>
<td><input type="text" name="get_reg_amt" id="get_reg_amt" size="15" value="<?php echo $get_reg_amt; ?>"/></td>
</tr>
</table>

<br><br>
<hr/>
<h1>Payment Detail</h1>
<br><br>
<table width="90%" border="0" cellspacing="5" cellpadding="6">
<tr>
<td>S.No.</td>
<td>Mode</td>
<td>Bank Name</td>
<td>Cash/DD No.</td>
<td>Cash/DD Date</td>
<td>Payable At</td>
<td>Amount</td>
</tr>
<tr>
<td>1.</td>
<td><select name="mode" id="mode">
<option value="<?php echo $mode; ?>"size="20"><?php echo $mode; ?></option>
<option value="cash">Cash </option>
<option value="other">Other </option>
</select></td>	
<td><input type="text" name="bank" id="bank" size="15" value="<?php echo $bank; ?>"/></td>
<td><input type="text" name="cash_dd_no" id="cash_dd_no" size="15" value="<?php echo $cash_dd_no; ?>"/></td>
<td><input type="text" name="cash_dd_date" id="cash_dd_date" size="15" value="<?php echo $cash_dd_date; ?>"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('cash_dd_date')" style="cursor:pointer"/></td>
<td><input type="text" name="pay_at" id="pay_at" size="15" value="<?php echo $pay_at; ?>"/></td>
<td><input type="text" name="amt" id="amt" size="15" value="<?php echo $amt; ?>"/></td>
</tr>
<tr>
<td>2.</td>
<td><select name="mode1" id="mode1">
<option value="<?php echo $mode1; ?>"size="20"><?php echo $mode1; ?></option>
<option value="draft">Draft</option>
<option value="other1">Other</option>
</select></td>	
<td><input type="text" name="bank1" id="bank1" size="15" value="<?php echo $bank1; ?>"/></td>
<td><input type="text" name="cash_dd_no1" id="cash_dd_no1" size="15" value="<?php echo $cash_dd_no1; ?>"/></td>
<td><input type="text" name="cash_dd_date1" id="cash_dd_date1" size="15" value="<?php echo $cash_dd_date1; ?>"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('cash_dd_date1')" style="cursor:pointer"/></td>
<td><input type="text" name="pay_at1" id="pay_at1" size="15" value="<?php echo $pay_at1; ?>"/></td>
<td><input type="text" name="amt1" id="amt1" size="15" value="<?php echo $amt1; ?>"/></td>
</tr>
</table>
<br><br>
<hr/>
<h1>Amount to be recieved from</h1>
<br><br>
<div float="left-side">
<table>
<tr>
<td>S.No.</td>
<td>To be recieved from</td>
<td>Ref No</td>
<td>Amount</td>
</tr>
</table>
</div>

<div float="right-side ">
<table>
<tr>
<td>Cash</td>
<td><input type="text" name="cash1" id="cash1" size="15" value="<?php echo $cash1; ?>"/></td>
</tr>
<tr>
<td>Bank</td>
<td><input type="text" name="bank2" id="bank2" size="15" value="<?php echo $bank2; ?>"/></td>
</tr>
<tr>
<td>(Cash+Bank)</td>
<td><input type="text" name="cash_bank" id="cash_bank" size="15" value="<?php echo $cash_bank; ?>"/></td>
</tr>
<tr>
<td>To be Rece.</td>
<td><input type="text" name="to_be_rece" id="to_be_rece" size="15" value="<?php echo $to_be_rece; ?>"/></td>
</tr>
<tr>
<td>Total Amount</td>
<td><input type="text" name="total_amt" id="total_amt" size="15" value="<?php echo $total_amt; ?>"/></td>
</tr>
</table>
</div>

<br><br>
<hr>

<h1>Dues data</h1>
<br>
<br>
<table width="90%" border="0" cellspacing="5" cellpadding="6">
<tr>	
<td width="20%"><font size='4' style="font-style: bold;">Due Date</font></td>
<td width="20%"><font size='4' style="font-style: bold;">Name</font></td>	 
<td width="20%"><font size='4' style="font-style: bold;">Dues</font></td>
<td width="20%"><font size='4' style="font-style: bold;">Received</font></td>	 
<td width="20%"><font size='4' style="font-style: bold;">Balance</font></td>	
</tr>
<tr>
<td width="20%"><input type="text" name="fees_date" id="fees_date" size="15"  value="<?php echo $fees_date; ?>"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('fees_date')" style="cursor:pointer"/></td>
<td width="20%"><input type="text" name="fees_tution" id="fees_tution" size="15"  value="<?php echo $fees_tution; ?>"/></td>
<td width="20%"><input type="text" name="fees_due" id="fees_due" size="15" value="<?php echo $fees_due; ?>"/></td>	 
<td width="20%"><input type="text" name="fees_receive" id="fees_receive" size="15" value="<?php echo $fees_receive; ?>"/></td>
<td width="20%"><input type="text" name="fees_balance" id="fees_balance" size="15" value="<?php echo $fees_balance; ?>"/></td>	 	
</tr>
<tr>
<td width="20%"><input type="text" name="fees_date1" id="fees_date1" size="15" value="<?php echo $fees_date1; ?>"/><img src="images2/cal.gif" onclick="javascript:NewCssCal('fees_date1')" style="cursor:pointer"/></td>
<td width="20%"><input type="text" name="fees_library" id="fees_library" size="15" value="<?php echo $fees_library; ?>"/></td>
<td width="20%"><input type="text" name="fees_due1" id="fees_due1" size="15" value="<?php echo $fees_due1; ?>"/></td>	 
<td width="20%"><input type="text" name="fees_receive1" id="fees_receive1" size="15" value="<?php echo $fees_receive1; ?>"/></td>
<td width="20%"><input type="text" name="fees_balance1" id="fees_balance1" size="15" value="<?php echo $fees_balance1; ?>"/></td>	 	
</tr>
</table>

<br><br>
<hr>
<br>
<table width="90%" border="0" cellspacing="5" cellpadding="6">
<tr>
<td width="20%"><font size='4' style="font-style: bold;">Total Dues</font></td>
<td width="20%"><font size='4' style="font-style: bold;">Total Received</font></td>	 
<td width="20%"><font size='4' style="font-style: bold;">Total Balance</font></td>
<td width="20%"><font size='4' style="font-style: bold;">Total Adjustable</font></td>	 	
</tr>
<tr>
<td width="20%"><input type="text" name="total_due" id="total_due" size="15" value="<?php echo $total_due; ?>"/></td>
<td width="20%"><input type="text" name="total_received" id="total_received" size="15" value="<?php echo $total_received; ?>"/></td>
<td width="20%"><input type="text" name="total_balance" id="total_balance" size="15" value="<?php echo $total_balance; ?>"/></td>	 
<td width="20%"><input type="text" name="total_adjustable" id="total_adjustable" size="15" value="<?php echo $total_adjustable; ?>"/></td>
</tr>
<tr><td>
<font size='4' style="font-style: bold;">Remark</td><td><textarea name="remark" id="remark" rows="2" cols="40"><?php echo $remark; ?></textarea></font></td>
<tr><td>
<font size='4' style="font-style: bold;">Receipt</font></td><td>
<input type="radio" name="receipt" id="receipt" <?php if (isset($receipt) && $receipt=="Cancel") echo "checked";?> value="Cancel" class="choice"
       onClick="receipt(this.value)"/>Cancel

<input type="radio" name="receipt" id="receipt" <?php if (isset($receipt) && $receipt=="Not_Cancel") echo "checked";?> value="Not_Cancel" class="choice"
       onClick="receipt(this.value)"/>Continue</td><td>
</div>
<div name="can" id="can" value="can" style="visibility:hidden" >
<font size='3' style="font-style: bold;">Receipt Canceled</font>
</div>
<div name="not" id="not" value="not" style="visibility:hidden" >
<font size='3' style="font-style: bold;">Receipt Not Canceled</font>
</div></td>
</tr>
<tr>
<td><input type="hidden" name="thisID" value="<?php echo $targetID; ?>"><input type="submit" value="Save" name="save" ></td></tr></table>
</form>
</body>
</html>