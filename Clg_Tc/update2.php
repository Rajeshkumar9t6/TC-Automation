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
<center><img src="img/logo_clg.jpg" alt="logo" height="180" width="1200"></center>
<center><h2>TC-UPDATE PAGE</h2></center>
<?php
header('Content-Type:text/html;charset=utf-8');
 
$reg1=$_POST['re'];

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
 

$db=mysql_select_db("clgtc_db",$con)or die(mysql_error());

$str="SELECT * FROM tc_data where regno='$reg1' ";

$result = mysql_query($str,$con);

while($row=mysql_fetch_array($result)){

$v1=$row['regno'];
$v2=$row['tcno'];
$v4=$row['adno'];
$v5=$row['sname'];
$v6=$row['fname'];
$v7=$row['nat'];
$v8=$row['rel'];
$v9=$row['caste'];

$v10=$row['com'];
$v11=$row['dob'];
$v12=$row['gen'];

$v13=$row['doa'];
$v14=$row['sem'];

$v15=$row['dept'];
$v16=$row['quali'];

$v17=$row['ldate'];
$v18=$row['tcdate'];
$v19=$row['fdate'];

}
?>

    <form method="post" action="uplink.php">
     <table align="center">

<tr><td>Reg-no</br></br></td><td><input type="text" name="reg" value="<?php echo $v1; ?>"></br></br></td></tr>
<tr><td>TC-no</br></br></td><td><input type="text" name="tcno" value="<?php echo $v2; ?>"></br></br></td></tr>
<tr><td>Admission no</br></br></td><td><input type="text" name="adno" value="<?php echo $v4; ?>"></br></br></td></tr>
<tr><td>Student Name</br></br></td><td><input type="text" name="stname" value="<?php echo $v5; ?>"></br></br></td></tr>
<tr><td>Father/Mother name</br></br></td><td><input type="text" name="fmname" value="<?php echo $v6; ?>"></br></br></td></tr>
<tr><td>Nationality</br></br></td><td><input type="text" name="nat" value="<?php echo $v7; ?>"></br></br></td></tr>
<tr><td>Religion</br></br></td><td><input type="text" name="rleg" value="<?php echo $v8; ?>"></br></br></td></tr>
<tr><td>Caste</td><td><input type="text" name="caste" value="<?php echo $v9; ?>"></td></tr>
<tr><td>Community</td><td><input type="text" name="com" value="<?php echo $v10; ?>"></td></tr>
<tr><td>Date of birth</br></br></td><td><input type="date" name="dob" value="<?php echo $v11; ?>"></br></br></td></tr>
<tr><td>Gender</td><td><input type="text" name="gen" value="<?php echo $v12; ?>"></td></tr>

<tr><td>Date of admission</br></br></td><td><input type="date" name="doas" value="<?php echo $v13; ?>"></br></br></td></tr>
<tr><td>Semester</br></br></td><td><input type="text" name="sem" value="<?php echo $v14; ?>"></br></br></td></tr>
<tr><td>Department</br></br></td><td><input type="text" name="dept" value="<?php echo $v15; ?>"></br></br></td></tr>
<tr><td>Whether Qualified for higher standard</br></br></td><td><input type="text" name="quali" value="<?php echo $v16; ?>"></br></br></td></tr>
<tr><td>Last date of college attended by student</br></br></td><td><input type="date" name="ldate" value="<?php echo $v17; ?>"></br></br></td></tr>

<tr><td>Date of application for Transfer Certificate</br></br></td><td><input type="date" name="tcdate" value="<?php echo $v18; ?>"></br></br></td></tr>
<tr><td>Date</br></br></td><td><input type="date" name="fdate" value="<?php echo $v19; ?>"></br></br></td></tr>

</table>
<br><center><input type="submit" id="b1" value="Update">&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" id="b1" value="HOME" /></center>
</form>

</body>
<?php } ?>
</html>
