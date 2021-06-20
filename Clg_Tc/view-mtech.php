<html>
<head>
<title>TC-GENERATE</title>
<style type="text/css">
#b1{
 height: 40px;
     width: 100px;
      border-radius: 8px;
background-color: #4eea4a;
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
    

    if (x == "") {
        alert("Enter REGno");
        return false;
    }
   
}

</script>

</head>
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>


<body background="img/bc1.jpg" >
<center><img src="img/logo_clg.jpg" alt="logo" height="200" width="900"></center>
<center><h2>Enter Regno for Generate TC</h2></center>
<div id="d1">
<br><br>
<form name="myForm" method="post" action="TC-Display-mtech.php" align="left" onsubmit="return validateForm()">
<table align="center">
<tr><td>Reg-no  </br></br></td><td><input type="text" name="re"></br></br></td></tr>
</table>
<center><input type="submit" id="b1" value="Generate tc">&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" id="b1" value="HOME" /></center>

</form>
</div>
<footer><h3 align="right"><strong>Developed by Sasurie Info-Tech(SIT)</strong></h3></footer>
</body>
<?php }?>
</html>
