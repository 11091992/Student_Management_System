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

<br><br>
<font size="4"><b>Admission </b></font>
<form action="">
<font size="2">Admission No.<input type="text" name="admission no." id="admission no." /></font>
<font size="2">Roll No. <input type="text" name="roll no."  id="roll no."/></font>
<font size="2">Student Name<input type="text" name="Name"  id="Name"/></font>
<font size="2">Status<input type="text" name="Admitted" id="Admitted" /></font>
</form>
<br><br>
<font size="4"><b>Student Qualification</b></font><br>

<font size="3">
Qualification &nbsp; &nbsp;               
Quali. Name               &nbsp; &nbsp; 
College/Institute   &nbsp; &nbsp; 
Roll No.    &nbsp; &nbsp; 
Board/Univ. &nbsp; &nbsp; 
College Type &nbsp; &nbsp; 
Education &nbsp; 
Subject &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Medium &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;
Edu. Status &nbsp; &nbsp; 
Year &nbsp; &nbsp; &nbsp;&nbsp;
Marks Obtained       &nbsp; &nbsp;     

</font><br>            
          
<font size="3"> X</font>      &nbsp; &nbsp;      &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;    &nbsp;
<input type="text"  name="quali name" id="quali name"  size="9" maxlength=4 placeholder="10th"/>
<input type="text" name="college" id="college" size="13" maxlength=10 placeholder="ICSE" />
<input type="text" name="roll no." id="roll no." size="6" maxlength=10 placeholder="" />
<input type="text" name="board" id="board" size="9" maxlength=10 placeholder="ICSE"  />
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Gov." >Government</option> <option value="Private" >Private</option></select> 
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Regular" >Regular</option> <option value="Back" >Back</option></select>
<input type="text"  name="Sub" id="Sub"  size="15" maxlength=20 placeholder="ALL"/>
<input type="text"  name="medium" id="medium"  size="7" maxlength=10 placeholder="English"/>
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Completed">Completed</option><option value="Persuing">Persuing</option></select>
<input type="text" name="year" id="year"  size="4" maxlength=4 placeholder="2009"/>
<input type="text" name="marks" id="marks" size="13" maxlength=6 placeholder="00" />

<br>

<font size="3">   XII</font>   &nbsp; &nbsp;      &nbsp; &nbsp;  &nbsp; &nbsp;  &nbsp;&nbsp; &nbsp; &nbsp;       &nbsp; 
<input type="text"  name="quali name" id="quali name"  size="9" maxlength=4 placeholder="12th"/>
<input type="text" name="college" id="college" size="13" maxlength=10 placeholder="ISE" />
<input type="text" name="roll no." id="roll no." size="6" maxlength=10 placeholder="" />
<input type="text" name="board" id="board" size="9" maxlength=10 placeholder="ISE"  />
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Gov." >Government</option> <option value="Private" >Private</option></select> 
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Regular" >Regular</option> <option value="Back" >Back</option></select>
<input type="text"  name="Sub" id="Sub"  size="15" maxlength=20 placeholder="ALL"/>
<input type="text"  name="medium" id="medium"  size="7" maxlength=10 placeholder="English"/>
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Completed">Completed</option><option value="Persuing">Persuing</option></select>
<input type="text" name="year" id="year"  size="4" maxlength=4 placeholder="2011"/>
<input type="text" name="marks" id="marks" size="13" maxlength=6 placeholder="00" />

<br>

<font size="3">    Diploma </font>      &nbsp; &nbsp;      &nbsp; &nbsp;        &nbsp;    &nbsp;
<input type="text"  name="quali name" id="quali name"  size="9" maxlength=8 placeholder="B.Sc"/>
<input type="text" name="college" id="college" size="13" maxlength=10 placeholder="" />
<input type="text" name="roll no." id="roll no." size="6" maxlength=10 placeholder="" />
<input type="text" name="board" id="board" size="9" maxlength=10 placeholder=""  />
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Gov." >Government</option> <option value="Private" >Private</option></select> 
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Regular" >Regular</option> <option value="Back" >Back</option></select>
<input type="text"  name="Sub" id="Sub"  size="15" maxlength=20 placeholder=""/>
<input type="text"  name="medium" id="medium"  size="7" maxlength=10 placeholder=""/>
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Completed">Completed</option><option value="Persuing">Persuing</option></select>
<input type="text" name="year" id="year"  size="4" maxlength=4 placeholder=""/>
<input type="text" name="marks" id="marks" size="13" maxlength=6 placeholder="00" />

<br>

<font size="3">Graduation</font>      &nbsp; &nbsp;      &nbsp;  &nbsp; 
<input type="text"  name="quali name" id="quali name"  size="9" maxlength=8 placeholder="Graduate"/>
<input type="text" name="college" id="college" size="13" maxlength=10 placeholder="GBU" />
<input type="text" name="roll no." id="roll no." size="6" maxlength=10 placeholder="" />
<input type="text" name="board" id="board" size="9" maxlength=10 placeholder=""  />
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Gov." >Government</option> <option value="Private" >Private</option></select> 
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Regular" >Regular</option> <option value="Back" >Back</option></select>
<input type="text"  name="Sub" id="Sub"  size="15" maxlength=20 placeholder="ALL"/>
<input type="text"  name="medium" id="medium"  size="7" maxlength=10 placeholder="English"/>
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Completed">Completed</option><option value="Persuing">Persuing</option></select>
<input type="text" name="year" id="year"  size="4" maxlength=4 placeholder="2014"/>
<input type="text" name="marks" id="marks" size="13" maxlength=6 placeholder="00" />

<br>

<font size="3">Post Graduation</font>     
<input type="text"  name="quali name" id="quali name"  size="9" maxlength=8 placeholder="B.Tech"/>
<input type="text" name="college" id="college" size="13" maxlength=10 placeholder="" />
<input type="text" name="roll no." id="roll no." size="6" maxlength=10 placeholder="11/ics/001" />
<input type="text" name="board" id="board" size="9" maxlength=10 placeholder=""  />
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Gov." >Government</option> <option value="Private" >Private</option></select> 
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Regular" >Regular</option> <option value="Back" >Back</option></select>
<input type="text"  name="Sub" id="Sub"  size="15" maxlength=20 placeholder="ALL"/>
<input type="text"  name="medium" id="medium"  size="7" maxlength=10 placeholder="English"/>
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="Completed">Completed</option><option value="Persuing">Persuing</option></select>
<input type="text" name="year" id="year"  size="4" maxlength=4 placeholder=""/>
<input type="text" name="marks" id="marks" size="13" maxlength=6 placeholder="00" />

<br><br><br><br>



<font size="4"><b>Student Test Details</b></font>
<font size="3">
<br>

S.No &nbsp;  &nbsp;            
Name              &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Roll No. &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
Gen. Rank/Score     &nbsp;&nbsp;
State Rank/Score    &nbsp;&nbsp;
Quota Rank/Score   &nbsp;&nbsp;
Date &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Center &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Quartile 
Remark

<br>

<font size="3"> 1</font>      &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="text"  name="Name" id=" Name"  size="17" maxlength=25 placeholder="ABCD SINGH"/>
<input type="text" name="roll" id="roll" size="8" maxlength=15 placeholder="11/ics/001" />
<input type="text" name="grank" id="grank" size="13" maxlength=10 placeholder="" />
<input type="text" name="srank" id="srank" size="13" maxlength=10 placeholder=""  />
<input type="text"  name="qrank" id="qrank"  size="13" maxlength=20 placeholder=""/>
<input type="text"  name="date1" id="date1"  size="7" maxlength=10 placeholder=""/>
<input type="text" name="center" id="center" size="13" maxlength=10 placeholder="Noida" />
<select id="dropdown" name="dropdown" onchange="selectDropdown()"><option value="0">0</option><option value="1">1</option><option value="2">2</option><option value="3">3</option></select> &nbsp;&nbsp;
<input type="text" name="remark" id="remark" size="9" maxlength=10 placeholder=""  />
<input type="submit" value="update" name="">
</font>

</div>

</body>
</html>