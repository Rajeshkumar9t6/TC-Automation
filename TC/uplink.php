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
$caste2=strtolower($caste);

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
$upcount=$_POST['upcount'];
$twork=$_POST['twork'];
$sub=$_POST['sub'];
$emis=$_POST['emis'];
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
 
$db=mysql_select_db("test",$con)or die(mysql_error());
if($upcount<=10)
{
$str="update tc set cno='$cno',tmr='$tmr',sno='$sno',adno='$adno',stname='$stname',fmname='$fmname',nat='$nat',rleg='$rleg',caste='$caste2',gen='$gen',blg='$blg',dob='$dob',pmark='$pmark',doas='$doas',sta='$sta',sol='$sol',quali='$quali',scholarship='$scholarship',medical='$medical',dol='$dol',dotbyp='$dotbyp',dotc='$dotc',cos='$cos',ayear='$ayear',sst='$sst',flang='$lang',medium='$medium',sec='$sec',attend='$attend',upcount='$upcount',twork='$twork',sub='$sub',emis='$emis' where reg=$regno";
}
else
{
echo "<script type=\"text/javascript\">window.alert('Data already modified 10 times you cannot update again');
window.location.href = 'upview.php';</script>"; 
}
$result = mysql_query($str,$con);
 if ($result) { 
echo "<script type=\"text/javascript\">window.alert('Data updated successfully');
window.location.href = 'upview.php';</script>"; }
else
echo "<script type=\"text/javascript\">window.alert('Error on update');
window.location.href = '/update2.php';</script>"; ;
}
?>
