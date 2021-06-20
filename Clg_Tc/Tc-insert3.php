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
<tr><td>TC-no</br></br></td><td><input type="text" name="tcno"></br></br></td></tr>
<tr><td>Admission no</br></br></td><td><input type="text" name="adno"></br></br></td></tr>
<tr><td>Student Name</br></br></td><td><input type="text" name="stname"></br></br></td></tr>
<tr><td>Father/Mother name</br></br></td><td><input type="text" name="fmname"></br></br></td></tr>
<tr><td>Nationality</br></br></td><td><input type="text" value="INDIAN" name="nat"></br></br></td></tr>
<tr><td>Religion</br></br></td><td><input type="text" name="rleg"></br></br></td></tr>

<tr><td><strong>Caste</strong></br></br></td><td>
<select name="caste" >
							<option value="bc">BC</option>
							<option value="bcm">BCM</option>
							<option value="mbc">MBC</option>
							<option value="sc">SC</option>
							<option value="st">ST</option>
							<option value="sca">SCA</option>
							<option value="oc">OC</option>
							<option value="dnc">DNC</option>
						</select></br></br></td></tr>
<tr><td>Community</br></br></td><td><input type="text" name="com"></br></br></td></tr>
<tr><td>Date of birth</br></br></td><td><input type="date" name="dob"></br></br></td></tr>
<tr><td><strong>Gender</strong></br></br></td><td></br></br></td></tr>
<tr><td></td><td><input type="radio" name="gen" value="MALE">MALE</td></tr>
<tr><td></br></br></td><td><input type="radio" name="gen" value="FEMALE">FEMALE</br></br></td></tr>
<tr><td>Date of admission</br></br></td><td><input type="date" name="doas"></br></br></td></tr> 
<tr><td>Semester</br></br></td><td><select name="sem" >
						
							<option value="I">I</option>
							<option value="II">II</option>
							<option value="III">III</option>
							<option value="IV">IV</option>
							<option value="V">V</option>
							<option value="VI">VI</option>
							<option value="VII">VII</option>
							<option value="VIII">VIII</option>

						</select></br></br></td></tr>
<tr><td>Department</br></br></td><td><select name="dept">
						<option value="COMPUTER SCIENCE AND ENGINEERING">CSE</option>
							<option value="ELECTRONICS AND COMMUNICATION ENGINEERING">ECE</option>
							<option value="ELECTRICAL AND ELECTRONICS ENGINEERING">EEE</option>
							<option value="CIVIL ENGINEERIMG">CIVIL</option>
							<option value="MECHANICAL ENGINEERNG">MECH</option>
							<option value="APPLIED ELECTRONICS">APPLIED ELECTRONICS</option>

							<option value="VLSI - DESIGN">VLSI - DESIGN</option>
							<option value="POWER ELECTRONICS AND DRIVES">POWER ELECTRONICS AND DRIVES</option>
							<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
						</select></br></br></td></tr>
<tr><td>Whether Qualified for higher class</br></br></td><td><select name="quali" >
							<option value="REFER MARKSHEET">REFER THE MARKSHEETS</option>
							<option value="DISCONTINUED">DISCONTINUED</option>
							
							</select></br></br></td></tr>

<tr><td>Last date of college attended by student</br></br></td><td><input type="date" name="ldate"></br></br></td></tr>
<tr><td>Date of application for Transfer Certificate</br></br></td><td><input type="date" name="tcdate"></br></br></td></tr>
<tr><td>Date </br></br></td><td><input type="date" name="fdate"></br></br></td></tr>

</table>
<br><center><input type="submit" id="b2" value="Insert">&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" id="b2" value="HOME" /></center>
</form>
<h3 align="right"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3>
</body>
<?php } ?>
</html>

