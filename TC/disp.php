<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>
 <?php
if (isset($_POST)) {
$dcount=$_POST['dcount'];
$regno=$_POST['reg'];
$dis_count=$dcount+1;
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

$str="update tc set dcount='$dis_count' where reg=$regno";

$result = mysql_query($str,$con);
if ($result) { 
echo "<script type=\"text/javascript\">window.alert('TC Printed successfully');
window.location.href = 'first.php';</script>"; }
}
?>
