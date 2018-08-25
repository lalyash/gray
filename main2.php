<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
*{ margin:0px; padding:0px}
#navbar{
overflow:hidden;
background:#FFFFFF;
}
#navbar a{
text-decoration:none;
color:#FFFFFF;
float:left;
}
#drpdwn{
float:left;
}
.bt1{
color:#FFFFFF;
width:100%;
height:100%;
text-align:center;
border-radius:15px;
font:Georgia, "Times New Roman", Times, serif;
font-size:15px;
background:#330066;
}
#drpcnt{
float:left;
display:none;
position:fixed;
width:18%;
}
#drpcnt a{
padding-left:90px;
display:block;
float:none;
color:#FFFFFF;
width:100%;
text-decoration:none;
padding:5px;
}
#drpcnt a:hover{
background:#CCCCCC;
}
#drpdwn:hover #drpcnt{
display:block;
}
#im{
height:10px;
}
.frm1{

display:none;
position:absolute;
    background-color:#FFFFFF;
	opacity:.90;
  
	width:100%;
	
	height:100%;
    z-index: 99999;
	margin-top:-1200px;
	overflow:hidden;
	}
	#frm11{
width:50%;
height:300px;
margin:12% 15% 25% 25%;
border-radius:5px;
border:5px solid #0033CC;
border-style:outset;
padding-top:40px;
padding-left:140px;
}
#drpcnt1{
float:left;
display:none;
position:fixed;
width:20%;
margin-left:10%;
margin-top:-30px;
}
#drpcnt1 a{
display:block;
float:none;
color:#FFFFFF;
font:oblique;
}
#drpcnt1 a:hover{
background:#CCCCCC;
}
#drpdwn1:hover #drpcnt1{
display:block;
width:20%;
}
ul{
list-style-type:none;
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<div style="border:2px solid red;width:100%;height:75px;text-align:center;font-size:38px;background:#000000;color:#FFFFFF;font:'Times New Roman', Times, serif">
The Gray Machine</br>
<i style="font-size:15px;margin-left:255px">Shop & sell</i>
</div>
<div id="navbar" style="width:100%;height:40px">
<div id="drpdwn" style="width:25%;height:40px">
<button class="bt1" id="btn1">Desktops<i class="fa fa-caret-down"></i></button>
<div id="drpcnt">
<ul>
<li>
<a href="#">Led Dektops</a>
</li>
<li>
<a href="#">Lcd Desktops</a>
</li>
<li id="drpdwn1" style="width:50%;height:75px">
<a href="#">Accesories<i class="fa fa-caret-right"></i></a>
<div id="drpcnt1">
<a href="#">CPU</a>
<a href="#">UPS</a>
</div>
</li>
<li style="margin-top:-50px">
<a href="#">Monitors</a>
</li>

</ul></div>
</div>

<div id="drpdwn" style="width:25%;height:40px">
 <button class="bt1" id="btn1">Laptops<i class="fa fa-caret-down"></i></button>
<div id="drpcnt">
<ul>
<li>
<a href="yoga.php">Yoga Laptops</a>
</li>
<li>
<a href="dcl.php">Desktop-Converitble Laptops</a>
</li>
<li id="drpdwn1" style="width:50%;height:75px">
<a href="adjust.php">Adjustible Laptops<i class="fa fa-caret-right"></i></a>
<div id="drpcnt1">
<a href="2in1.php">2-in-1laptops</a>
<a href="3in1.php">3-in-1 laptops</a>
</div>
</li>
<li style="margin-top:-30px">
<a href="thinkpad.php">ThinkPads</a>
</li>
<li><a href="nextgen.php">Next-Gen Laptops</a>
</li>
</ul></div>
</div>
<div id="drpdwn" style="width:25%;height:40px">
 <button class="bt1" id="btn1">Accesories<i class="fa fa-caret-down"></i></button>
<div id="drpcnt">
<ul>
<li>
<a href="#">Chargers</a>
</li>
<li>
<a href="#">Motherboard</a>
</li>
<li id="drpdwn1" style="width:50%;height:75px">
<a href="#">Antivirus<i class="fa fa-caret-right"></i></a>
<div id="drpcnt1">
<a href="#">Kapersky Antivirus</a>
<a href="#">QuickHeal Antivirus</a>
</div>
</li>
<li style="margin-top:-50px">
<a href="#">Monitors</a>
</li>
<li><a href="#">Keybords</a>
</li>
<li><a href="#">Detachable Mouse</a>
</li>
</ul></div>
</div>

<div id="drpdwn" style="width:25%;height:40px">
 <form action="#" method="post">
 <input type="submit" class="bt1" id="btn1" name="logout1" value="logout" style="height:40px"/>
</form>
<?php
session_start();
if(isset($_POST['logout1'])){
header("Location:main.php");
if(isset($_SESSION['username1']) && isset($_SESSION['password1'])){
unset($_SESSION['username1']);
unset($_SESSION['password1']);
header("Location:main.php");
exit;
}
}
?>
</div>
</div>
<div>
</div>
<div style="width:70%;height:540px">
<img class="mySlides" src="pic1.jpg" style="width:100%;height:540px">
  <img class="mySlides" src="pic2.jpeg" style="width:100%;height:540px" >
  <img class="mySlides" src="pic3.jpeg" style="width:100%;height:540px">
  <img class="mySlides" src="pic4.jpeg" style="width:100%;height:540px">
</div>
<script>
var slideIndex = 0;

showDivs();

function showDivs() {
var i;
var x = document.getElementsByClassName("mySlides");
for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
      slideIndex++;
	    if (slideIndex > x.length) {slideIndex = 1}    
  x[slideIndex-1].style.display ="block"; 
  setTimeout(showDivs,2000);
}
</script>
<div style="margin-left:70%;margin-top:-540px;height:540px;width:30%">
<div style="width:100%;height:300px;border:2px solid red">
<img src="laptop_banner.png"  style="width:100%;height:300px" alt="imag not avail"/>
<marquee scrollamount="1" direction="right" style="margin-top:-280px;color:#000">Offer will be valid for today only<font color="#FF0000">*</font></marquee>
</div>
<img src="intel-prices.png" style="width:100%;height:240px" />

</div>
<div id="buy" style="width:100%;height:180px;border:2px solid red">
<button id="buybtn" style="width:100%;height:50px">BUY    <font size="+2">-------></font></button>
<?php
$i=0;
$con = mysqli_connect("localhost","root","","csdt");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1="SELECT * FROM buy4 ";
$result=$con->query($sql1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
$imgn=$row['imagename'];
$link=$row['data'];
$without_extension = substr($link, 0, strrpos($link, "."));
echo'<a href="'.$without_extension.'.php"><img src="images/'.$imgn.'" height="100px" width="100px"></a>';
 } 
}
else {
 echo "0 results";
}
$con->close();

?>



</div>
<div id="buy" style="width:100%;height:180px;border:2px solid red">
<button id="buybtn" style="width:100%;height:50px">Sell   <font size="+2">-------></font></button>
<?php
$i=0;
$con = mysqli_connect("localhost","root","","csdt");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
$sql1="SELECT * FROM buy4 ";
$result=$con->query($sql1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
$imgn=$row['imagename'];
$link=$row['data'];
$without_extension = substr($link, 0, strrpos($link, "."));
echo'<a href="'.$without_extension.'.php"><img src="images/'.$imgn.'" height="100px" width="100px"></a>';
 } 
}
else {
 echo "0 results";
}
$con->close();
?>
<script>


</script>



</div>
<div style="width:100%;height:250px;background:#999999">
<div style="width:35%;height:100%">
<ul id="u1" style="padding:20%">
    <li><a href="#" style="text-decoration:none;font-size:18px;color:#FFFFFF;font-style:italic">Services</a></li>
    <li><a href="#" style="text-decoration:none;font-size:20px;color:#FFFFFF;font-style:italic">Wanna call us?</a></li>
	  <li><button onClick="frm()" style="text-decoration:none;font-size:18px;color:#FFFFFF;font-style:italic">Enquiry Here!</button></li>
    <li><a href="#" style="text-decoration:none;font-size:20px;color:#FFFFFF;font-style:italic">Report an issue</a></li>

</ul>
</div>
<div style="height:100%;margin-left:35%;margin-top:-250px">
<ul id="u2"style="padding:10%;margin-left:265px">
    <li><a href="#" style="text-decoration:none;font-size:18px;color:#FFFFFF;font-style:italic">Offices</a></li>
    <li><a href="#" onclick="alert('Dial: \n police:100 \n hospital:108 ')" style="text-decoration:none;font-size:20px;color:#FFFFFF;font-style:italic">Emergency numbers</a></li>
	  <li><a href="#" style="text-decoration:none;font-size:18px;color:#FFFFFF;font-style:italic">Rise against injustice campaign</a></li>
    <li><a href="#" style="text-decoration:none;font-size:20px;color:#FFFFFF;font-style:italic">Help?</a></li>
    <li><a href="admin.php" style="text-decoration:none;font-size:20px;color:#FFFFFF;font-style:italic">Admin only</a></li>
</ul>
</div>

</div>




  
<div id="frm1" class="frm1">
<div id="im">
<button onclick="clos()" style="margin-left:1250px;margin-top:180px;border:2px solid red"><img src="cross.jpg" style="width:35px;height:35px"/></button>
</div>
<form id="frm11" method="post" action="check.php">Username:<input type="text" name="name1" /></br></br></br>
Password:&nbsp;<input type="password" name="pass1" /></br></br></br>
<input type="submit" value="Login" /></br>
<a href="forgot.php">forgot password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
new user?<a href="signup.php">Signup</a>
</form>
</div>
<div>
<a href="fileupld.php">Admin</a>
</div>

</body>
</html>
