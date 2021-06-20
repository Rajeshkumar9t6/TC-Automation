<html>
<head>
<title>TC-INSERT</title>
<style type="text/css">
#b2{
 height: 40px;
     width: 100px;
      border-radius: 8px;
background-color:#f32012   ;
border:none;
border-radius: 20px;
font-style:inherit;
}
#b2:hover{
box-shadow: 2px 2px 20px;
}</style>
</head>
<body bgcolor="#8cf2ec">
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>

<form method="post" action="link2.php">
<table align="center">

<tr><td>Reg-no</br></br></td><td><input type="text" name="reg"></br></br></td></tr>
<tr><td>Certificate-no</br></br></td><td><input type="text" name="cno"></br></br></td></tr>
<tr><td>TMR-Code</br></br></td><td><input type="text" name="tmr"></br></br></td></tr>

<tr><td>Serial no</br></br></td><td><input type="text" name="sno"></br></br></td></tr>
<tr><td>Admission no</br></br></td><td><input type="text" name="adno"></br></br></td></tr>
<tr><td>Emis no</br></br></td><td><input type="text" name="emis"></br></br></td></tr>
<tr><td>Student Name</br></br></td><td><input type="text" name="stname"></br></br></td></tr>
<tr><td>Father/Mother name</br></br></td><td><input type="text" name="fmname"></br></br></td></tr>
<tr><td>Nationality</br></br></td><td><input type="text" name="nat"></br></br></td></tr>
<tr><td>Religion</br></br></td><td><input type="text" name="rleg"></br></br></td></tr>

<tr><td><strong>Caste</strong></br></br></td><td>
<select name="caste" >
							<option value="bc">BC</option>
							<option value="bcm">BCM</option>
							<option value="mbc">MBC</option>
							<option value="sc">SC</option>
							<option value="st">ST</option>
							<option value="sca">SCA</option>
							<option value="dnc">DNC</option>
							<option value="other">Other</option>
						</select></br></br></td></tr>


<tr><td><strong>Gender</strong></br></br></td><td></br></br></td></tr>
<tr><td></td><td><input type="radio" name="gen" value="MALE">MALE</td></tr>
<tr><td></br></br></td><td><input type="radio" name="gen" value="FEMALE">FEMALE</br></br></td></tr>

<tr><td>Blood Group</br></br></td><td><input type="text" name="blg"></br></br></td></tr>
<tr><td>Date of birth</br></br></td><td><input type="date" name="dob"></br></br></td></tr>
<tr><td>Personal marks of identification</br></br></td><td><input type="text" name="pmark"></br></br></td></tr>
<tr><td>Date of admission</br></br></td><td><input type="date" name="doas"></br></br></td></tr>  <tr><td>Standard of admission<br><br></td><td><input type="text" name="sta"></br></br></td></tr>
<tr><td>Standard of student at the time of leaving</br></br></td><td><select name="sol" >
							<option value="LKG">LKG</option>
							<option value="UKG">UKG</option>
							<option value="I">I</option>
							<option value="II">II</option>
							<option value="III">III</option>
							<option value="IV">IV</option>
							<option value="V">V</option>
							<option value="VI">VI</option>
							<option value="VII">VII</option>
							<option value="VIII">VIII</option>
							<option value="IX">IX</option>
							<option value="X">X</option>
							<option value="XI">XI</option>
							<option value="XII">XII</option>

						</select></br></br></td></tr>
<tr><td>Section of student at the time of leaving</br></br></td><td><input type="text" name="sec"></br></br></td></tr>

<tr><td>Course of student</br></br></td><td><select name="sub" >
							<option value=" PHYSICS, CHEMISTRY, COMPUTER SCIENCE, MATHEMATICS">COMPUTER SCIENCE</option>
							<option value="PHYSICS, CHEMISTRY, BIOLOGY, MATHEMATICS">BIOLOGY</option>
						    <option value=" COMPUTER SCIENCE, ECONOMICS, COMMERCE, ACCOUNTANCY">ARTS-1</option>
						    <option value="ECONOMICS, COMMERCE, ACCOUNTANCY, BUSINESS MATHS">ARTS-2</option>
							</select></br></br></td></tr>

<tr><td>Whether Qualified for higher standard</br></br></td><td><select name="quali" >
							<option value="REFER THE MARKSHEET">REFER THE MARKSHEET</option>
							<option value="PROMOTED">PROMOTED</option>
							<option value="DISCONTINUED">DISCONTINUED</option>
							</select></br></br></td></tr>
<tr><td>About Scholarship</br></br></td><td><input type="text" name="scholarship" value="N/A"></br></br></td></tr>
<tr><td>About Medical</br></br></td><td><input type="text" name="medical" value="N/A"></br></br></td></tr>
<tr><td>Date of student leaving from school</br></br></td><td><input type="date" name="dol"></br></br></td></tr>

<tr><td>Date of Transfer Certificate By Parent/Guardian</br></br></td><td><input type="date" name="dotbyp"></br></br></td></tr>
<tr><td>Date of Transfer Certificate</br></br></td><td><input type="date" name="dotc"></br></br></td></tr>
<tr><td>Course of Study</br></br></td><td><input type="text" name="cos"></br></br></td></tr>
<tr><td>Academic year</br></br></td><td><input type="text" name="ayear"></br></br></td></tr>
<tr><td>Standard(s) Studied </br></br></td><td><input type="text" name="sst"></br></br></td></tr>
<tr><td>First Language</br></br></td><td><input type="text" name="lang"></br></br></td></tr>
<tr><td>Medium of instruction</td><td><input type="text" name="medium"></br></br></td></tr>
<tr><td>Attendance in Number</td><td><input type="text" name="attend"></br></br></td></tr>
<tr><td>Total Workingday in Number</td><td><input type="text" name="twork"></br></br></td></tr>
</table>
<br><center><input type="submit" id="b2" value="Insert">&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" id="b2" value="HOME" /></center>
</form>
<h3 align="right"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3>
</body>
<?php } ?>
</html>

