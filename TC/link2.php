
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>




 <?php
if (isset($_POST)) {
$regno=$_POST['reg'];
$cno=$_POST['cno'];
$tmr=$_POST['tmr'];
$sno=$_POST['sno'];
$adno=$_POST['adno'];
$stname=$_POST['stname'];
$fmname=$_POST['fmname'];
$nat=$_POST['nat'];
$rleg=$_POST['rleg'];
$caste=$_POST['caste'];

$gen=$_POST['gen'];
$blg=$_POST['blg'];
$dob=$_POST['dob'];
$pmark=$_POST['pmark'];
$doas=$_POST['doas'];
$sta=$_POST['sta'];
$sol=$_POST['sol'];
$quali=$_POST['quali'];

$scholarship=$_POST['scholarship'];
$medical=$_POST['medical'];
$dol=$_POST['dol'];

$dotbyp=$_POST['dotbyp'];
$dotc=$_POST['dotc'];
$cos=$_POST['cos'];
$ayear=$_POST['ayear'];
$sst=$_POST['sst'];
$lang=$_POST['lang'];
$medium=$_POST['medium'];
$sec=$_POST['sec'];
$attend=$_POST['attend'];
$upcount=0;
$dcount=0;
$twork=$_POST['twork'];
$sub=$_POST['sub'];
$emis=$_POST['emis'];
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
 
$db=mysql_select_db("test",$con)or die(mysql_error());
$str="insert into tc values('','$regno','$cno','$tmr','$sno','$adno','$stname','$fmname','$nat','$rleg','$caste','$gen','$blg','$dob','$pmark','$doas','$sta','$sol','$quali','$scholarship','$medical','$dol','$dotbyp','$dotc','$cos','$ayear','$sst','$lang','$medium','$sec','$attend','$upcount','$dcount','$twork','$sub','$emis')";
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
