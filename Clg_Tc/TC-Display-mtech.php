<html>
<head>
<title>TC-Display</title>
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
margin-left:40px;
margin-right:10px;
margin-top:0px;
margin-bottom:10px;
padding-left:53px;
padding-right:10px;

}

#d2{
border-style:solid;
border-width:3px;

margin-left:60px;
margin-right:20px;
margin-top:0px;
margin-bottom:10px;
padding-left:60px;
padding-right:10px;

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
}


</style>
</head>
<body>

<?php

session_start(); 
 error_reporting(0);
  $pass=$_SESSION["pass"];
   $user=$_SESSION["user"];
 
 
  if($user== "sasurie" && $pass=="sasurie@123"){
  
header('Content-Type:text/html;charset=utf-8');
 
$reg1=$_POST['re'];

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

$str="SELECT * FROM tc_data where regno='$reg1' ";

$result = mysql_query($str,$con);

while($row=mysql_fetch_array($result)){

$regno=$row['regno'];
$tcno=$row['tcno'];
$adno=$row['adno'];
$sname=$row['sname'];
$fname=$row['fname'];
$nat=$row['nat'];
$rel=$row['rel'];
$caste=$row['caste'];

$com=$row['com'];
$dob=$row['dob'];
$dob2=strtotime($dob);
$gen=$row['gen'];

$doa=$row['doa'];
$doa2=strtotime($doa);
$sem=$row['sem'];

$dept=$row['dept'];
$quali=$row['quali'];

$ldate=$row['ldate'];
$ldate2=strtotime($ldate);
$tcdate=$row['tcdate'];
$tcdate2=strtotime($tcdate);
$fdate=$row['fdate'];
$fdate2=strtotime($fdate);

}
?>




<div id="printableArea">

<div id="d1">
<br><br><br><br><br><br>
<table>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>

<tr><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tcno; ?></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $adno ; ?></h4></td></tr>

<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($sname); ?></h4></td></tr>

<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($fname); ?></h4></td></tr>

<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($nat); ?> / <?php echo strtoupper($rel); ?></h4></td></tr>

<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($com); ?> / <?php echo strtoupper($caste); ?></h4></td></tr>
<tr><td></td><td></td></tr>


<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('d-m-Y',$dob2); ?></h4></td></tr>
<tr><td></td><td></td></tr>
<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($gen); ?></h4></td></tr>
<tr><td></td><td></td></tr>
<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('d-m-Y',$doa2); ?></h4></td></tr>
<tr><td></td><td></td></tr>
<tr><td></td><td></td></tr>

<tr><td><h4></h4></td><td><h6>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo strtoupper($sem); ?>&nbsp;&nbsp;SEMESTER&nbsp;&nbsp;,&nbsp;&nbsp;M . TECH . ,<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($dept); ?></h6></td></tr>
<tr><td></td><td></td></tr>

<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($quali); ?></h4><br></td></tr>

<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('d-m-Y',$ldate2); ?></h4></td></tr>
<tr><td></td><td></td></tr>
<tr><td><h4></h4></td><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('d-m-Y',$tcdate2); ?></h4></td></tr>

<tr><td><h4></h4></td><td><h4></h4><br><br><br></td></tr>

<tr><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;Vijayamangalam</h4></td></tr>

<tr><td><h4>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo date('d-m-Y',$fdate2); ?></h4></td></tr>

</table>
</div>

</div>
<center><input type="button" class="b1" onClick="printDiv('printableArea')" value="print"/>&nbsp;&nbsp;<input type="button" onClick="location.href='first.php';" class="b1" value="HOME" /></center>

<?php } ?>
</body>

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
