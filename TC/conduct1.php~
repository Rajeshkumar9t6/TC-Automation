<html>
<head>
<title>CONDUCT-ATTENDANCE</title>
<style type="text/css">
#b1{
 height: 40px;
     width: 100px;
      border-radius: 8px;
background-color: #dd0821 ;
border:none;
border-radius: 10px;
}
#b1:hover{
box-shadow: 2px 2px 20px;
}
</style>

<script>
function validateForm() {
    var x = document.forms["myForm"]["re"].value;
    var y = document.forms["myForm"]["ano"].value;

var rad = document.getElementsByName("r1");
var ck1=rad[0].checked;
var ck2=rad[0].checked;
    if (x == "" || ck1 == false) {
        alert("Select Button and Enter REGno/ADno");
        return false;
    }
   
}

</script>
</head>
<body background="img/bc1.jpg" >
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>

<center><img src="img/logo.jpg" alt="logo" height="180" width="1200"></center>
<center><h2>Enter Regno/Adno to Generate Conduct Certificate</h2></center>
<div id="d1">
<br><br><br><br>
<form name="myForm" method="post" action="conduct.php" align="left" onsubmit="return validateForm()">
<table align="center"> 
<tr><td><input type="radio" name="r1" value="r" checked>Reg-no  </br></br></td><td><input type="text" name="re"></br></br></td></tr>

<tr><td><input type="radio" name="r1" value="a">Admission-no  </br></br></td><td><input type="text" name="ano"></br></br></td></tr>
</table>
<center><input type="submit" id="b1" value="Generate">&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" id="b1" value="HOME" /></center>

</form>
</div>
<footer><h3 align="right"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3></footer>
</body>
<?php } ?>
</html>
