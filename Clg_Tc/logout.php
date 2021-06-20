<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start();
error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){

$date = date_default_timezone_set('Asia/Kolkata');
		 $dt=date("d-m-Y");
		 $tim=date("h:i:sa");
			$ldt=$dt.' '.$tim;

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

/*$str="mysql_query('SELECT * FROM login ORDER BY sno DESC LIMIT 1')";
$result = mysql_query($str,$con);
while ($row = mysql_fetch_assoc($str)) {
  $sno= $row['sno']; 
}*/

$str1="UPDATE login SET logout='$ldt' ORDER BY sno DESC LIMIT 1";

$result1 = mysql_query($str1,$con);

}
session_destroy() ;

header("location:Index.php");
?>
</body>
</html>
