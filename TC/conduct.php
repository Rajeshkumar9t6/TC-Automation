<html>
<head>
<title>CONDUCT-ATTENDANCE</title>
<style type="text/css">

#printableArea{
size:29cm 21cm 7cm; margin:0px;
}

@page{size:29cm 21cm 7cm; margin:0px;
}

#b1{
 height: 40px;
     width: 100px;
      border-radius: 8px;
background-color: #4eea4a ;
}

#d1{
border-style:solid;
border-width:3px;

margin-left:40px;
margin-right:40px;
margin-top:0px;
margin-bottom:10px;
padding-left:40px;
padding-right:40px;

}

#d2{
border-style:solid;
border-width:3px;

margin-left:40px;
margin-right:40px;
margin-top:0px;
margin-bottom:10px;
padding-left:40px;
padding-right:40px;

}
.b1{
height: 40px;
     width: 100px;
      border-radius: 12px;
background-color: #5f9de8  ;
border:none;
border-radius: 10px;
}
.b1:hover{
box-shadow: 2px 2px 20px;
}</style>
</head>
<body>
<?php session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  

?>

<?php
header('Content-Type:text/html;charset=utf-8');
 
$reg1=$_POST['re'];

$ano=$_POST['ano'];
$ch=$_POST['r1'];

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
if($ch=="r")
{
$str="SELECT * FROM tc where reg='$reg1' ";
}

if($ch=="a")
{
$str="SELECT * FROM tc where adno='$ano' ";
}

$result = mysql_query($str,$con);

 /*if ($result) { echo "done</br>";}
else
//echo "problem";*/


while($row=mysql_fetch_array($result)){

$sn=$row['stname'];
$fn=$row['fmname'];
$std=$row['sol'];
$ayear=$row['ayear'];
$sec=$row['sec'];
$twork=$row['twork'];
$attend=$row['attend'];
$per=($attend/$twork)*100;


}

?>

<br><br>
<div id="printableArea">
<br>
<div id="d1">
<br><br>
<center><img src="img/logo.jpg" alt="logo" height="150" width="550"></center>
<center><h2>CONDUCT CERTIFICATE</h2></center>
<br>

<h4> This is to certify that Master / Selvi &nbsp;&nbsp;&nbsp; <?php echo strtoupper($sn); ?> &nbsp;&nbsp;&nbsp;  Son / Daughter of &nbsp;&nbsp;&nbsp; <?php echo strtoupper($fn); ?> &nbsp;&nbsp;&nbsp; studied <?php echo strtoupper($std); ?> Standard <?php echo strtoupper($sec); ?> Section During this period His / Her conduct was</h4>

<br><br>
<table width="100%">
<tr><td><h4>Place &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; TIRUPUR</h4></td></tr>
<tr><td><h4>DATE &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo date("d-m-y") ?></h4></td><td align="right"><h4>PRINCIPAL</h4></td></tr>
</table>

</div>

<br>
<div id="d2">
<br>
<center><img src="img/logo.jpg" alt="logo" height="150" width="550"></center>
<center><h2>ATTENDANCE CERTIFICATE</h2></center>
<br>

<h4> This is to certify that Master / Selvi &nbsp;&nbsp;&nbsp; <?php echo strtoupper($sn); ?> &nbsp;&nbsp;&nbsp;  Son / Daughter of &nbsp;&nbsp;&nbsp; <?php echo strtoupper($fn); ?> &nbsp;&nbsp;&nbsp; studied <?php echo strtoupper($std); ?> Standard <?php echo strtoupper($sec); ?> Section had attended the school for &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; days out of &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp;&nbsp;&nbsp; working days during the academic year &nbsp;&nbsp;&nbsp;20&nbsp;&nbsp;&nbsp;&nbsp;  -&nbsp;&nbsp;20&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp; His / Her percentage of attendance was &nbsp;&nbsp;&nbsp;  &nbsp; </h4>

<br>
<table width="100%">
<tr><td><h4>Place &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp; TIRUPUR</h4></td></tr>
<tr><td><h4>DATE &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;<?php echo date("d-m-y") ?></h4></td><td align="right"><h4>PRINCIPAL</h4></td></tr>
</table>

</div>
</div>
<center><input type="button" class="b1" onClick="printDiv('printableArea')" value="print"/>&nbsp;&nbsp;<input type="button" onClick="location.href='conduct1.php';" class="b1" value=" NEW" />&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" class="b1" value="HOME" /></center>
</body>
<?php } ?>
</html>

<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
