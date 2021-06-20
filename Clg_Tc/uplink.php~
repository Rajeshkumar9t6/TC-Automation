<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>
 <?php
if (isset($_POST)) {
$regno=$_POST['reg'];
$tcno=$_POST['tcno'];
$adno=$_POST['adno'];
$sname=$_POST['stname'];
$fname=$_POST['fmname'];
$nat=$_POST['nat'];
$rle=$_POST['rleg'];
$caste=$_POST['caste'];
$com=$_POST['com'];
$gen=$_POST['gen'];

$dob=$_POST['dob'];
$doa=$_POST['doas'];
$sem=$_POST['sem'];
$dept=$_POST['dept'];
$quali=$_POST['quali'];

$ldate=$_POST['ldate'];
$tcdate=$_POST['tcdate'];
$fdate=$_POST['fdate'];
echo $regno;
}

$servername = "localhost";
$username = "root";
$password = "";
//$dbname = "test";

// Create connection
$con = mysql_connect($servername, $username, $password);

// Check connection
if (!$con) {
    die("Connection failed: " . mysql_connect_error());
}
//echo "Connected successfully";
 
$db=mysql_select_db("clgtc_db",$con)or die(mysql_error());

$str="update tc_data set tcno='$tcno',adno='$adno',sname='$sname',fname='$fname',nat='$nat',rel='$rle',caste='$caste',com='$com',dob='$dob',gen='$gen',doa='$doa',sem='$sem',dept='$dept',quali='$quali',ldate='$ldate',tcdate='$tcdate',fdate='$fdate' where regno=$regno";

$result = mysql_query($str,$con);
 if ($result) { 
echo "<script type=\"text/javascript\">window.alert('Data updated successfully');
window.location.href = 'upview.php';</script>"; }
else
echo "<script type=\"text/javascript\">window.alert('Error on update');
window.location.href = 'upview.php';</script>"; ;
}
?>
