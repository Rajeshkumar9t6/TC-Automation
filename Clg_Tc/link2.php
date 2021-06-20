
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
}
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
$str="insert into tc_data values('','$regno','$tcno','$adno','$sname','$fname','$nat','$rle','$caste','$com','$dob','$gen','$doa','$sem','$dept','$quali','$ldate','$tcdate','$fdate')";
$result = mysql_query($str,$con);
 if ($result) { 
echo "<script type=\"text/javascript\">window.alert('Data Inserted successfully');
window.location.href = 'Tc-insert3.php';</script>"; }
else
{
echo "<script type=\"text/javascript\">window.alert('Error on iserting data');
window.location.href = 'Tc-insert3.php';</script>"; 
}
}
?>
