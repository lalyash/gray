<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<title>Untitled Document</title>
</head>
<body>
<div style="height:70px;width:100%;background:#333333;float:left"><font color="#FFFFFF" size="+3">Gray Machines&nbsp;</font>
<form action="cart.php" method="post">
<input type="submit" value="Cart" name="collection" style="border-radius:5px;margin-left:80%;width:90px"/>
</form>
<?php
session_start();
if(isset($_SESSION['username1']) && isset($_SESSION['password1'])){
echo "<form action='logout.php' method='post'>";
echo "<input type='submit' value='Logout' name='logout1' style='border-radius:5px;margin-left:90%;width:90px;margin-top:-22px'/>";
echo "</form>";
}
else
{
echo "<div id='drpdwn' style='width:25%;height:40px'>";
 echo "<button class='bt1' id='btn1' onclick='frm()'>Login </button>";

echo "</div>";
}
?>
</div>
<h1><font color="#CCCCCC"><?php echo $_GET['type'];?></font></h1>
<div style="width:30%;height:300px">
<?php
$dett=$_GET["det"];
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno()){
echo "Failed to connect to database ".mysqli_connect_error();
}
$sql="SELECT productid,quantity,price,name FROM product WHERE name='$dett'";
$result=$con->query($sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$prdctid=$row['productid'];
$itmname=$row['name'];
$quan=$row['quantity'];
$rate=$row['price'];
echo '<img src="totalpdt/'.$prdctid.'">';

}
}
else 
echo "0 results";
$con->close();
?>
</div>
<div style="width:60% ;height:300px ; margin-left:50%;margin-top:-300px">
<h1><font color="#333333"><?php echo $itmname ?></font></h1>
<h2><font color="#333333"><?php echo "price ".$rate ?></font></h2>
<?php 
if( $quan<=0 ){
echo "<b>Sorry !Stocks Unavailable</b>.";
}
else{
if( $quan >0 && $quan <=5){
echo "<b>Hurry</b> !only".$quan ."quantity left".'<br>';
 echo "<form action='#' method='post'>";
echo "<input type='submit' value='addtocart' name='cart1' />";
echo "</form>";
}

}
if(isset($_POST['cart1'])){
session_start();
if(isset($_SESSION['username1']) && isset($_SESSION['password1'])){
$fname= $_SESSION['username1'];
$pas=$_SESSION['password1'];
$con = mysqli_connect("localhost","root","","csdt");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//inserting Record to the database

$sql="INSERT INTO detail(username,password,productid1,quantity) VALUES('$fname','$pas','$itmname','1')";
if($con->query($sql)==TRUE){
header("Location:cart.php?val=$itmname");
exit;
}
else{
echo "Error creating database: " . $con->error;
}
$con->close();
}
else{
echo "<div id='frm1' class='frm1'>";
echo "<div id='im'>";
echo "<button onclick='clos()' style='margin-left:1250px;margin-top:180px;border:2px solid red'><img src='cross.jpg' style='width:35px;height:35px'/></button>";
echo "</div>";
echo "<form id='frm11' method='post' action='check.php'>";
echo "Username:<input type='text' name='name1' /></br></br></br>";
echo "Password:&nbsp;<input type='password' name='pass1'/></br></br></br>";
echo "<input type='submit' value='Login' /></br>";
echo "<a href='forgot.php'>forgot password?</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
new user?<a href='signup.php'>Signup</a>";
echo "</form>";
}
}
?>
<script>
function frm(){
document.getElementById('frm1').style.display="block";
window.scrollTo(40,40);
}
function clos(){
document.getElementById('frm1').style.display="none";
}
</script>
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
</body>
</html>
