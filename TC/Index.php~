<html>
<head>
<title>
Login page
</title>
</head>
<?php 
session_start();
?>
<body background="img/bg5.jpg">
<center>
<img src="img/logo.jpg" alt="logo" height="280" width="1200"> </center>
<center><h1 style="font-family:Comic Sans Ms; text-align='center'; font-size:20pt; color:#0000FF; background-color:#00FFFF; border-radius:20px;">
Sasurie Vidhyabhavan Login Page for TC
</h1></center>
<table align="center" border="0" bgcolor="#00FF00" height="200px" width="350px" style="border-radius:10px; box-shadow:2px 4px 32px;">
<form name="login" method="post" action = "<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
<tr></tr>
<h3><tr><td align="center">Username &nbsp;&nbsp;<input style="width:150px; height:30px; border:none; border-radius:4px;" type="text" name="userid"/><br/></td></tr></h3>
<tr><td align="center">Password &nbsp;&nbsp;<input style="width:150px; height:30px; border:none; border-radius:4px;" type="password" name="pswrd"/></td></tr>
<tr><td align="center">Faculty &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="width:150px; height:30px; border:none; border-radius:4px;" type="text" name="faculty" required/></td></tr>
<tr><td align="center"><input style="background-color:#006600; width:100px; height:40px; font-size:20px;border:none; border-radius:10px;" type="submit" value="Login" name="login"/>
<input style="background-color:#006600; width:100px; height:40px; font-size:20px;border:none; border-radius:10px;" type="reset" value="Cancel"/></td></tr>
<tr></tr>
</form>
</table>

   <?php
          
           if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['login']) && !empty($_POST['userid']) 
               && !empty($_POST['pswrd'])) {
				
               if ($_POST['userid'] == 'sasurie' && 
                  $_POST['pswrd'] == 'sasurie@123') {
               
                  $_SESSION['timeout'] = time();
                 
                   $_SESSION["pass"]=$_POST['pswrd'];
				   $_SESSION["user"]=$_POST['userid'];
                  echo 'You have entered valid use name and password';
			
		 $faculty=$_POST['faculty'];
		 $date = date_default_timezone_set('Asia/Kolkata');
		 $dt=date("d-m-Y");
		 $tim=date("h:i:sa");
			$dttim=$dt.' '.$tim;

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

$str="insert into login values ('','$faculty','$dttim','')";

$result = mysql_query($str,$con);

			header("location:first.php");
         
               }else {
                 // $msg1 = 'Wrong username or password';
                  echo "<script type=\"text/javascript\">window.alert('Wrong username or password');
window.location.href = 'Index.php';</script>";
               }
            }
            else 
               //$msg2="Put Valid Password";
            echo "<script type=\"text/javascript\">window.alert('Put Valid Password');
window.location.href = 'Index.php';</script>";
			}
         ?>

<footer><h3 align="right"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3></footer>
</body>
</html>
