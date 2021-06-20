<!DOCTYPE HTML>
<head>
<title>TC-SASURIE VIDHYA BAVAN</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">

@font-face{
font-family: "Bamini Tamil";
src: url("www.kvijayanand.zzl.org/font/bamini.ttf");
}


#printableArea{
size:29cm 21cm 7cm; margin:0px;
}

#printableArea2{
size:29cm 21cm 7cm; margin:0px;
}

@page{size:29cm 21cm 7cm; margin:0px;
}

#t1{
border-style:solid;
border-width:3px;
font-size:9.5px;
margin-left:10px;
margin-right:10px;
margin-top:40px;
margin-bottom:10px;

font-family: "Bamini Tamil",Times,serif;
}



#t2{
border-style:solid;
border-width:3px;
font-size:9.5px;
margin-left:10px;
margin-right:10px;
margin-top:0px;
margin-bottom:10px;

font-family: "Bamini Tamil",Times,serif;
}

hr{
border-style:solid;
border-width:1px;
}


#t3{
border-style:solid;
border-width:1px;
border-right:0px;
border-left:0px;
}

#t4{
margin-right:0; margin-left:auto;
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
<body >
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

?>
<?php
while($row=mysql_fetch_array($result)){

$r=$row['reg'];
$cn=$row['cno'];
$tmr=$row['tmr'];

$s=$row['sno'];
$a=$row['adno'];
$st=$row['stname'];
$fm=$row['fmname'];
$nat=$row['nat'];
$rel=$row['rleg'];
$c=$row['caste'];

$gen=$row['gen'];
$blg=$row['blg'];
$dob=date($row['dob']);
$d3=strtotime($dob);
$d1=date("Y",$d3);
$d2=date("j",$d3);
$d4=date("F",$d3);
$d5=$d2."-".date("m",$d3)."-".$d1;
$pmark=$row['pmark'];
$doas=date($row['doas']);
$d7=strtotime($doas);
$d8=date("Y",$d7);
$d9=date("j",$d7);
$d10=date("F",$d7);
$d11=$d9."-".date("m",$d7)."-".$d8;

$sta=$row['sta'];
$sol=$row['sol'];

$schol=$row['scholarship'];
$med=$row['medical'];
$dol=$row['dol'];
$dol2=strtotime($dol);



$dotbyp=$row['dotbyp'];
$dotbyp2=strtotime($dotbyp);

$dotc=$row['dotc'];
$dotc2=strtotime($dotc);

$cos=$row['cos'];
$ayear=$row['ayear'];
$sst=$row['sst'];
$lang=$row['flang'];
$medium=$row['medium'];
$dcount=$row['dcount'];
$quali=$row['quali'];
$sub=$row['sub'];
$emis=$row['emis'];
if($dcount>=3)
{
$duplicate="**(Re printed copy)**";
}
else
{
$duplicate="";
}

$ones = array(
 "",
 " One",
 " Two",
 " Three",
 " Four",
 " Five",
 " Six",
 " seven",
 " eight",
 " nine",
 " ten",
 " eleven",
 " twelve",
 " thirteen",
 " fourteen",
 " fifteen",
 " sixteen",
 " Seventeen",
 " eighteen",
 " nineteen"
);
 
$tens = array(
 "",
 "",
 " Twenty",
 " Thirty",
 " forty",
 " fifty",
 " sixty",
 " Seventy",
 " eighty",
 " ninety"
);
 
$triplets = array(
 "",
 " Thousand",
 " million",
 " billion",
 " trillion",
 " quadrillion",
 " quintillion",
 " sextillion",
 " septillion",
 " octillion",
 " nonillion"
);
 
 // recursive fn, converts three digits per pass
function convertTri($num, $tri) {
  global $ones, $tens, $triplets;
 
  // chunk the number, ...rxyy
  $r = (int) ($num / 1000);
  $x = ($num / 100) % 10;
  $y = $num % 100;
 
  // init the output string
  $str = "";
 
  // do hundreds
  if ($x > 0)
   $str = $ones[$x] . " hundred";
 
  // do ones and tens
  if ($y < 20)
   $str .= $ones[$y];
  else
   $str .= $tens[(int) ($y / 10)] . $ones[$y % 10];
 
  // add triplet modifier only if there
  // is some output to be modified...
  if ($str != "")
   $str .= $triplets[$tri];
 
  // continue recursing?
  if ($r > 0)
   return convertTri($r, $tri+1).$str;
  else
   return $str;
 }
 
// returns the number as an anglicized string
function convertNum($num) {
 $num = (int) $num;    // make sure it's an integer
 
 if ($num < 0)
  return "negative".convertTri(-$num, 0);
 
 if ($num == 0)
  return "zero";
 
 return convertTri($num, 0);
}
 
 // Returns an integer in -10^9 .. 10^9
 // with log distribution
 function makeLogRand() {
  $sign = mt_rand(0,1)*2 - 1;
  $val = randThousand() * 1000000
   + randThousand() * 1000
   + randThousand();
  $scale = mt_rand(-9,0);
 
  return $sign * (int) ($val * pow(10.0, $scale));
 }
 
// example of usage






} ?>


<div id="printableArea">
<div id="t1">

<table  style="width: 100%;" align="center" >
<tr><td>

<table align="left"><h5>
<tr><td><font size="1.99">Register No</font></td>       <td><strong>:</strong></td><td><font size="1.99"><?php echo $r; ?></font></td></tr>								 
<tr> <td><font size="1.99">Certificate No</font></td>   <td><strong>:</strong></td><td><font size="1.99"><?php echo $cn; ?></font></td><tr>									  
<tr><td><font size="1.99">Month & Year</font></td>     <td><strong>:</strong></td><td><font size="1.99"><?php echo strtoupper(date('M-Y')) ?></font></td></tr>	
				        			
<tr><td><font size="1.99">T.M.R Code</font></td>       <td><strong>:</strong></td><td><font size="1.99"><?php echo $tmr; ?></font></td></tr>												
<tr><td><font size="1.99">Date</font></td>             <td><strong>:</strong></td><td><font size="1.99"><?php echo date("d-m-y") ?></font></td>
<td><font size="1.99">EMIS No:<?php echo $emis; ?></font></td>
</tr></h5> </table></td>

<td><table   align="right"><tr>
 <td> <img src="img/logo.jpg" alt="logo" height="75" width="350"><br><center>GOVERNMENT OF TAMILNADU-DEPARTMENT OF SCHOOL EDUCATION<br><b>TRANSFER CERTIFICATE</b><br>(Recognised by the Director of Metriculation Schools,Chennai)</center> 
</td></tr></table>
</td></tr></table>
<hr>
 
<table style="width: 100%;" align="center">
<tr> <td><b>வரிசை&nbsp;எண்</b><font size="1.99"> Serial No<strong>:</strong><?php echo $s; ?></font></td> <td></td><td><b>சேர்க்கை எண் </b><font size="1.99"> Admission No<strong>:</strong><?php echo $a; ?></font></td> </tr>
<tr> <td ><font size="1.99">01 a)</font> <b>பள்ளியின் பெயர்</b>&nbsp; &nbsp; <font size="1.99"> (Name of the school)</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99">SASURIE VIDHYA BHAVAN MAT.HR.SEC.SCHOOL</font>
</td> </tr>
<tr> <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">b)</font><b>கல்வி மாவட்டத்தின் பெயர்</b><br><font size="1.99">&nbsp;&nbsp; &nbsp;&nbsp;(Name of the the Educational District) </font></td> <td>&nbsp; &nbsp;<strong>:</strong>&nbsp; &nbsp;</td><td><font size="1.99">TIRUPUR </font></td ></tr>
<tr> <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">c)</font><b>வருவாய் மாவட்டத்தின் பெயர் </b><br><font size="1.99">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Name of the Revenue District)</font></td> <td>&nbsp; &nbsp;<strong>:</strong>&nbsp; &nbsp;</td><td><font size="1.99">TIRUPUR</font></td></tr>
<tr> <td ><font size="1.99">02 </font><b>மாணவர் பெயர்(தனித்தனி எழுத்துக்களில்)</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Name of the Puipl (in BLOCKLETTERS)</font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td><td><font size="1.99"><?php echo strtoupper($st); ?></font></td> </tr>

<tr> <td ><font size="1.99">03 </font><b>தந்தை அல்லது தாயாரின் பெயர்</b><br><font size="1.99">&nbsp;&nbsp; &nbsp;(Name of the Father or Mother)</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($fm); ?></font></td> </tr>

<tr> <td><font size="1.99">04 </font><b>தேசிய இனம், சமயம் மற்றும் சாதி</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">(Nationality,Religion and Caste)</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($nat) ." - " . strtoupper($rel) . " - "; ?></font></td> </tr>

<tr> <td ><font size="1.99">05 </font><b>இனம்</b><font size="1.99"> Community</font><br>&nbsp;&nbsp; &nbsp;&nbsp;<b>அவன்/ அவள் பின்வரும் ஐந்து பிரிவுகளில் எவையேனும் <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ஒன்றைச் சார்ந்தவரா ?</b><br>&nbsp; &nbsp;&nbsp;<font size="1.99">Whether he/ she belongs to </font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp; </td> <td><font size="1.99">REFER COMMUNITY CERTIFICATE<br>ISSUED BY THE REVENUE AUTHORITIES</font></td> </tr>

<tr> <td >&nbsp; &nbsp;&nbsp;   <font size="1.99">a)</font><b>ஆதிதிராவிடர் அல்லது பழங்குடியினர்</b><br>&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; <font size="1.99">Aadidravidar (Scheduled Caste) or (Scheduled Trible) </font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php if($c=="sc" || $c=="st" || $c=="sca"){echo "YES, " .strtoupper($c);} ?></font></td> </tr>

<tr> <td >&nbsp; &nbsp;&nbsp;   <font size="1.99">b)</font><b>பின்தங்கிய வகுப்பு </b><font size="1.99"> (Backward Class) </font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php if($c=="bc" || $c=="bcm"){echo "YES, " .strtoupper($c);} if($c=="other"){echo "NO, " .strtoupper($c);} ?></font></td> </tr>

<tr> <td >&nbsp; &nbsp;&nbsp;   <font size="1.99">c)</font><b>மிகவும் பின்தங்கிய வகுப்பு </b><font size="1.99"> (Most Backward Class)</font>  </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php if($c=="mbc"){echo "YES, " .strtoupper($c);} ?></font></td> </tr>

<tr> <td >&nbsp; &nbsp;&nbsp;   <font size="1.99">d)</font><b>ஆதிதிராவிடர் இனத்திலிருந்து கிறித்துவ மதத்திற்கு <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;மாறியவர் அல்லது </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp; <font size="1.99">(Converted to Christianity from Scheduled Caste)</font>  </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"></font></td> </tr>

<tr> <td >&nbsp; &nbsp;&nbsp;   <font size="1.99">e)</font><b>அட்டவணையிலிருந்து நீக்கப்பட்ட இனம் </b><br>&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;<font size="1.99">(Denotified Communities)</font><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<b>மாணவர் /மாணவியர் மேற்குறிப்பிட்ட ஐந்து பிரிவுகளில் <br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;எதாவது ஒன்றைச் சார்ந்தவராக இருந்தால் அந்தப் <br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;பிரிவுக்கு எதிரே ஆம் என்று எழுத வேண்டும் </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">If the pupil belongs to any one of the five categories</font><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">mentoined above, write "YES" against the relavent column</font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php if($c=="dnc"){echo "YES, " .strtoupper($c);} ?></font></td> </tr>

<tr> <td ><font size="1.99">06 </font><b>பாலினம் </b>&nbsp; &nbsp;&nbsp;<font size="1.99">Gender</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($gen); ?></font></td> </tr>

<tr> <td ><font size="1.99">07 </font><b>இரத்த வகை </b>&nbsp; &nbsp;&nbsp;<font size="1.99">Blood Group</font>  </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($blg); ?></font></td> </tr>

<tr> <td ><font size="1.99">08 </font><b>பிறந்த தேதி (எண்ணிலும்,எழுத்திலும்) <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(மாணவர் சேர்க்கைப் பதிவேட்டில் உள்ளபடி)</b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Date of birth as entered in the Admission Register <br> &nbsp;&nbsp;&nbsp;&nbsp;(in figures and words) </font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo $d5; echo "<br>".strtoupper(convertNum($d2))." ".strtoupper($d4)." ".strtoupper(convertNum($d1));?></font></td> </tr>

<tr> <td ><font size="1.99">09 </font><b>உடலில் அமைந்த அடையாளக் குறிகள் </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">(Personal Marks Of Identification)</font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($pmark); ?></font></td> </tr>

<tr> <td ><font size="1.99">10 a)</font><b>பள்ளியில் சேர்க்கப்பட்ட தேதி மற்றும் வகுப்பு (வருடத்தை <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;எழுத்தால் எழுதவும் )</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Date of admission and standard in which he / she <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;admitted(the year to be entered in words)</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo $d11 ."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".strtoupper($sta)."<br>".strtoupper(convertNum($d8)) ; ?></font></td> </tr>

<tr> <td ><font size="1.99">&nbsp;&nbsp;&nbsp; b)</font><b>தேர்ந்தெடுக்கப்பட்ட பாடப்பிரிவு அதாவது <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;பொதுக்கல்வி அல்லது தொழிற்கல்வி </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">The course offered, i.e. General Education or <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vocal Education</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99">GENERAL EDUCATION</font></td> </tr>

<tr> <td ><font size="1.99">&nbsp;&nbsp;&nbsp; c)</font><b>பொதுக்கல்வியாயின் பகுதி III தொகுதி (அ) ல் <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; தேர்ந்தெடுத்த விருப்பப்பாடங்கள்  மற்றும் போதன மொழி </b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">In the Case of General Education the subjects offered under <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;part III Group-A and medium of Instruction.</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($sub); ?></font></td> </tr>


</table><br>
</div>


<br><br><br><br>
<div id=t2>

<table>
<tr> <td ><font size="1.99">11 </font><b>மாணவர் பள்ளியை விட்டு நீங்கும் காலத்தில்  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;பயின்று வந்த வகுப்பு (எழுத்தில்)</b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Standard in which the pupil was studing at time <br> &nbsp;&nbsp;&nbsp;&nbsp;of leaving (in words) </font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($sol); ?></font></td> </tr>

<tr> <td ><font size="1.99">12 </font><b>மேல் வகுப்பிற்கு உயர்வு பெறத் தகுதி பெற்றவரா ? </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">(Whether qualified for promotion to higher <br> &nbsp;&nbsp;&nbsp;&nbsp;standard?)</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($quali); ?> </font></td> </tr>
<tr> <td ><font size="1.99">13 </font><b>மாணவர் படிப்புதவித்தொகை அல்லது கல்விச்<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;சலுகை எதுவும் பெற்றவரா?<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(அதன் விவரத்தை குறிப்பிடுக )</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Whether the puipl was in receipt of any schlorship <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;or any educational concessions<br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;(Nature of the Schlorship to be Specified)</font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($schol); ?></font></td></tr>

<tr> <td ><font size="1.99">14 </font><b>மாணவர் கல்வியாண்டில் மருத்துவ ஆய்விற்குச் <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;சென்றாரா (முதல் தடவை அல்லது அதற்கு மேல் <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;குறிப்பிட்டு எழுதவும்)</b><br>&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Whether the people has undergone medical <br> &nbsp;&nbsp;&nbsp;&nbsp; Inspection if any, during the academic year(First or<br> &nbsp;&nbsp;&nbsp;&nbsp; repeat to be specified)</font> </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp; </td><td><font size="1.99"><?php echo strtoupper($med); ?></font></td> </tr>

<tr> <td ><font size="1.99">15 </font><b>மாணவர் பள்ளியை விட்டு விலகிய நாள் </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp<font size="1.99">Date on which the puipl actually left the school</font>  </td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo date('d-m-y',$dol2); ?></font></td> </tr>

<tr> <td ><font size="1.99">16 </font><b>மாணவரின் ஒழுக்கமும் பண்பும் </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">The puipl's conduct and character</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"></font></td> </tr>

<tr> <td ><font size="1.99">17 </font><b>பெற்றோர் அல்லது பாதுகாவலர் மாணவரின் மாற்றுச்  <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbspசான்றிதழ் கோரி விண்ணப்பித்த நாள் </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp<font size="1.99">Date in which application for Transfer Certificate was<br> &nbsp;&nbsp;&nbsp;&nbsp;made on behalf of the puipl by the parent or guardian</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo date('d-m-y',$dotbyp2); ?></font></td> </tr>

<tr> <td ><font size="1.99">18 </font><b>மாற்றுச் சான்றிதழின் நாள்  </b><br>&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">Date of the Transfer Certificate</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo date('d-m-y',$dotc2); ?></font></td> </tr>
<tr> <td ><font size="1.99">19 </font><b>படிப்புக் காலம் </b>&nbsp; &nbsp;&nbsp;&nbsp;<font size="1.99">Course of Study</font></td> <td>&nbsp; &nbsp;<strong>:</strong> &nbsp; &nbsp;</td> <td><font size="1.99"><?php echo strtoupper($cos); ?></font></td></tr>
</table><br>

<table id="t3" border="1" cellpadding="0" cellspacing="0"  style="width: 100%">
<tr><td align="center"><b> பள்ளியின் பெயர்  </b><br><font size="1.99">Name of the school</font></td><td align="center"><b>கல்வி ஆண்டு  </b><br><font size="1.99">Academic Year(s)</font></td><td align="center"><b>படித்த வகுப்பு </b><br><font size="1.99">Standard(s) Studied</font></td><td align="center"><b>முதல் மொழி </b><br><font size="1.99">First Language</font></td><td align="center"><b>பயிற்றுமொழி  </font></b><br><font size="1.99">Medium of Instruction</font></td></tr>

<tr><td><font size="1.99">&nbsp;&nbsp;Sasurie Vidhya Bhavan Mat.<br>&nbsp;&nbsp;Hr.Sec.School,<br>&nbsp;&nbsp;Uthukuli Main Road,<br>&nbsp;&nbsp;Mannarai,<br>&nbsp;&nbsp;Tirpur-641 607<br><br><br></font></td><td align="center"><font size="1.99"><?php echo strtoupper($ayear); ?></font></td><td align="center"><font size="1.99"><?php echo strtoupper($sst); ?></font></td><td  align="center"><font size="1.99"><?php echo strtoupper($lang); ?></font></td><td align="center"><font size="1.99"><?php echo strtoupper($medium); ?></font></td></tr>
</table> <br><br><br><br>
<table width=100%>
<tr><td>
<table align="">
<tr><td><b>&nbsp;&nbsp;&nbsp;&nbsp;பள்ளி முதல்வரின் கையொப்பம்  <br>&nbsp;&nbsp;&nbsp;&nbsp;(நாள் மற்றும் பள்ளி முத்திரையுடன் ) </b><br>&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99"><font size="1.99">Signature of the Principal with date and school seal&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo strtoupper($duplicate); ?></font> </font></td></tr>
</table></td>
</tr>

</table>
<hr>
<br>
<table align="center">
<tr><td><b>குறிப்பு</b><font size="1.99">/Note <strong>:-</strong></font></td><td></td></tr>
<tr><td><font size="1.99">1</font>&nbsp;&nbsp;&nbsp;<b>இச்சான்றிதழில் அழித்தல்கள் மற்றும் நம்பகமற்ற அல்லது மோசடியான திருத்தங்கள் செய்வது <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
சான்றிதழை ரத்து செய்ய வழி வகுப்பதாகும்.</b><br><font size="1.99">&nbsp;&nbsp;&nbsp;&nbsp;Erasures and unauthenticated of fradulent alterations in the certificate will lead to its cancellation</font></td></tr>
<tr><td><font size="1.99">2</font><b>&nbsp;&nbsp;&nbsp;&nbsp;பள்ளி முதல்வரால் மையினால் கையொப்பமிட வேண்டும் பதிவு செய்யப்பட்ட விவரங்கள் சரியானவை <br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;என்பதற்கு அவரே பொறுப்பானவர்.</b><br><font size="1.99">&nbsp;&nbsp;&nbsp;&nbsp;Should be signedin ink by the Head of the institution who will be held responsible for the correctness of<br>&nbsp;&nbsp;&nbsp;&nbsp;the entries</font></td></tr>
<tr><td><font size="1.99">3</font><b>&nbsp;&nbsp;&nbsp;&nbsp;பெற்றோர் அல்லது பாதுகாவலர் அளிக்கும் உறுதிமொழி </b><font size="1.99">Declaration by the parent or Guardian</font><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<b>மேலே  2 முதல்  8 வரையிலுள்ள இனங்களுக்கெனப் பதிவு செய்யப்பட்டுள்ள விவரங்கள் சரியானவை <br>
&nbsp; 	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;என்றும் எதிர்காலத்தில் அவற்றில் மாற்றம் எதுவும் கேட்கமாட்டேன் என்று உறுதியளிக்கின்றேன்.</b><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<font size="1.99">I hearby that the particulars recorded against the items 2 to 8 are correct and that no change will be<br>&nbsp;&nbsp;&nbsp;&nbsp;demanded by me in future<br> </font></td></tr>
</table><br><br>
<table width=100%>
<tr><td><table align="left"><tr><td><b>மாணவ/மாணவியர் கையொப்பம்</b><br><font size="1.99">STUDENT'S SIGNATURE</font></td></tr></table></td>
<td><table align="right"><tr><td><b>பெற்றோர் அல்லது பாதுகாவலர் கையொப்பம்</b><br><font size="1.99">SIGNATURE OF THE PARENT/GUARDIAN</font></td></tr></table></td>

</tr>
</table>

</div>
</div>
<form id="f1" method="post" action="disp.php" >
<input type="hidden" name="dcount" value="<?php echo $dcount; ?>">
<input type="hidden" name="reg" value="<?php echo $r; ?>">
<center><input type="button" class="b1"  value="print" onclick="printDiv('printableArea');document.getElementById('f1').submit();"/>&nbsp;&nbsp;</form><input type="button" onClick="location.href='first.php';" class="b1" value="HOME" /></center>

</body>
<?php } ?>
</html>



<script type="text/javascript">
function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents
    

}


</script>


