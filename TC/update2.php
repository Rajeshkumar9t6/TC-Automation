<!DOCTYPE HTML>
<head>
<title>UPDATE-PAGE</title>
<style type="text/css">
#b1{
 height: 40px;
     width: 100px;
      border-radius: 8px;
background-color:#42f483;
border:none;
border-radius: 10px;
}
#b1:hover{
box-shadow: 2px 2px 20px;
}
</style>
</head>
<body>
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>
<center><img src="img/logo.jpg" alt="logo" height="180" width="1200"></center>
<center><h2>TC-UPDATE PAGE</h2></center>
<?php
header('Content-Type:text/html;charset=utf-8');
 
$reg1=$_POST['re'];
$ano=$_POST['ano'];
$ch=$_POST['r1'];

$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$con = mysql_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
//echo "Connected successfully";
 

$db=mysql_select_db("test",$con)or die(mysql_error());
if($ch=="r")
{
$str="SELECT * FROM tc where reg='$reg1' ";
}

if($ch=="a")
{
$str="SELECT * FROM tc where adno='$ano' ";
}

$result = mysql_query($str,$con);

while($row=mysql_fetch_array($result)){

$v1=$row['reg'];
$v2=$row['cno'];
$tmr=$row['tmr'];
$v3=$row['sno'];
$v4=$row['adno'];
$v5=$row['stname'];
$v6=$row['fmname'];
$v7=$row['nat'];
$v8=$row['rleg'];
$v9=$row['caste'];

$v10=$row['gen'];
$v11=$row['blg'];
$v12=$row['dob'];

$v13=$row['pmark'];
$v14=$row['doas'];

$v15=$row['sta'];
$v16=$row['sol'];

$v18=$row['scholarship'];
$v19=$row['medical'];
$v20=$row['dol'];

$v22=$row['dotbyp'];
$v23=$row['dotc'];
$v24=$row['cos'];
$v25=$row['ayear'];
$v26=$row['sst'];
$v27=$row['flang'];
$v28=$row['medium'];
$v29=$row['sec'];
$v30=$row['attend'];
$v31=$row['upcount'];
$v32=$row['twork'];
$quali=$row['quali'];
$sub=$row['sub'];
$emis=$row['emis'];
}
?>

    <form method="post" action="uplink.php">
     <table align="center">

<tr><td>Reg-no</br></br></td><td><input type="text" name="reg" value="<?php echo $v1; ?>"></br></br></td></tr>
<tr><td>Certificate-no</br></br></td><td><input type="text" name="cno" value="<?php echo $v2; ?>"></br></br></td></tr>
<tr><td>TMR-Code</br></br></td><td><input type="text" name="tmr" value="<?php echo $tmr; ?>"></br></br></td></tr>

<tr><td>Serial no</br></br></td><td><input type="text" name="sno" value="<?php echo $v3; ?>"></br></br></td></tr>
<tr><td>Admission no</br></br></td><td><input type="text" name="adno" value="<?php echo $v4; ?>"></br></br></td></tr>
<tr><td>Emis no</br></br></td><td><input type="text" name="emis" value="<?php echo $emis; ?>"></br></br></td></tr>
<tr><td>Student Name</br></br></td><td><input type="text" name="stname" value="<?php echo $v5; ?>"></br></br></td></tr>
<tr><td>Father/Mother name</br></br></td><td><input type="text" name="fmname" value="<?php echo $v6; ?>"></br></br></td></tr>
<tr><td>Nationality</br></br></td><td><input type="text" name="nat" value="<?php echo $v7; ?>"></br></br></td></tr>
<tr><td>Religion</br></br></td><td><input type="text" name="rleg" value="<?php echo $v8; ?>"></br></br></td></tr>



<tr><td>Caste</td><td><input type="text" name="caste" value="<?php echo $v9; ?>"></td></tr>

<tr><td>Gender</td><td><input type="text" name="gen" value="<?php echo $v10; ?>"></td></tr>

<tr><td>Blood Group</br></br></td><td><input type="text" name="blg" value="<?php echo $v11; ?>"></br></br></td></tr>
<tr><td>Date of birth</br></br></td><td><input type="date" name="dob" value="<?php echo $v12; ?>"></br></br></td></tr>
<tr><td>Personal marks of identification</br></br></td><td><input type="text" name="pmark" value="<?php echo $v13; ?>"></br></br></td></tr>
<tr><td>Date of admission</br></br></td><td><input type="date" name="doas" value="<?php echo $v14; ?>"></br></br></td></tr>  <tr><td>Standard of admission<br><br></td><td><input type="text" name="sta"value="<?php echo $v15; ?>"></br></br></td></tr>
<tr><td>Standard of student at the time of leaving</br></br></td><td><input type="text" name="sol" value="<?php echo $v16; ?>"></br></br></td></tr>
<tr><td>Section of student at the time of leaving</br></br></td><td><input type="text" name="sec" value="<?php echo $v29; ?>"></br></br></td></tr>
<tr><td>Cource of student</br></br></td><td><input type="text" name="sub" value="<?php echo $sub; ?>"></br></br></td></tr>
<tr><td>Whether Qualified for higher standard</br></br></td><td><input type="text" name="quali" value="<?php echo $quali; ?>"></br></br></td></tr>

<tr><td>About Scholarship</br></br></td><td><input type="text" name="scholarship" value="<?php echo $v18; ?>"></br></br></td></tr>
<tr><td>About Medical</br></br></td><td><input type="text" name="medical" value="<?php echo $v19; ?>"></br></br></td></tr>
<tr><td>Date of student leaving from school</br></br></td><td><input type="date" name="dol" value="<?php echo $v20; ?>"></br></br></td></tr>

<tr><td>Date of Transfer Certificate By Parent/Guardian</br></br></td><td><input type="date" name="dotbyp" value="<?php echo $v22; ?>"></br></br></td></tr>
<tr><td>Date of Transfer Certificate</br></br></td><td><input type="date" name="dotc" value="<?php echo $v23; ?>"></br></br></td></tr>
<tr><td>Course of Study</br></br></td><td><input type="text" name="cos" value="<?php echo $v24; ?>"></br></br></td></tr>
<tr><td>Academic year</br></br></td><td><input type="text" name="ayear" value="<?php echo $v25; ?>"></br></br></td></tr>
<tr><td>Standard(s) Studied </br></br></td><td><input type="text" name="sst" value="<?php echo $v26; ?>"></br></br></td></tr>
<tr><td>First Language</br></br></td><td><input type="text" name="lang" value="<?php echo $v27; ?>"></br></br></td></tr>
<tr><td>Medium of instruction</td><td><input type="text" name="medium" value="<?php echo $v28; ?>"></br></br></td></tr>
<tr><td>Attendance in Number</td><td><input type="text" name="attend" value="<?php echo $v30; ?>"></br></br></td></tr>
<tr><td>Total Working days</td><td><input type="text" name="twork" value="<?php echo $v32; ?>"></br></br></td></tr>
<input type="hidden" name="upcount" value="<?php echo $v31+1; ?>">
</table>
<br><center><input type="submit" id="b1" value="Update">&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" id="b1" value="HOME" /></center>
</form>

</body>
<?php } ?>
</html>
