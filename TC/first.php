<html>
<head>
<title>TC-INDEX</title>
<style type="text/css">

.b1{
 height: 50px;
     width: 120%;
      border-radius: 8px;
background-color:#33FFFF;
border:none;
border-radius: 20px;
font-style:inherit;
}
.b1:hover{
box-shadow: 2px 2px 20px;
}

</style>
</head>
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>

<body background="img/bg6.jpg">
<center><img src="img/logo.jpg" alt="logo" height="200" width="900"></center>
<div id="d1">
<br><br>
<b>
<form action="logout.php" method="post">
<div align="right"><b><input style="background-color:#ffffff; box-shadow:2px 2px 12px; border:none; border-radius:10px; font-size:18px; width:100; height:40;" type="submit" value="logout"></b></form></div>
<table align="center">
<form>
<tr><td > <input type="button" onClick="location.href='view.php';" class="b1" value="GENERATE TC" /></br></br></td></tr>
<tr><td > <input type="button" onClick="location.href='view2.php';" class="b1" value="GENERATE TC 12th" /></br></br></td></tr>
<tr><td> <input type="button" onClick="location.href='Tc-insert3.php';" class="b1" value="INSERT DATA" /></br></br></td></tr>
<tr><td> <input type="button" onClick="location.href='upview.php';" class="b1" value="EDIT DATA" /></br></br></td></tr>
<tr><td> <input type="button" onClick="location.href='conduct1.php';" class="b1" value="CONDUCT AND ATTENDANCE" /></br></br></td></tr>
<tr><td></td></tr>
</form>
</table></b>
<footer><h3 align="left"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3></footer>
</div>
<?php }

else 
echo "not valid enter";
 ?>

</body>
</html>
