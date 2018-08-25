<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
*{ margin:0px; padding:0px}
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
</style>
<title>Untitled Document</title>
</head>
<body>
<div style="height:70px;width:100%;background:#333333;float:left"><font color="#FFFFFF" size="+3">Gray Machines&nbsp;</font>
<form action="cart.php" method="post">
<input type="submit" value="Cart" name="collection" style="border-radius:5px;margin-left:80%;width:90px"/>
</form>
<form action="logout.php" method="post">
<input type="submit" value="Logout" name="logout1" style="border-radius:5px;margin-left:90%;width:90px;margin-top:-22px"/>
</form>
</div>
<div style="width:65%;height:1000px;border:2px solid red">
<?php
session_start();
$fname=$_SESSION['username1'];
$pas=$_SESSION['password1'];
if(isset($_SESSION['username1'])&& isset($_SESSION['password1'])){
$total=0;
$det=$_GET['val'];
echo $fname;
echo $pas;
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno()){
echo "Failed to connect to database ".mysqli_connect_error();
}
$sql="SELECT product.productid,product.quantity,detail.productid1,product.price FROM product INNER JOIN detail ON product.name=detail.productid1 WHERE detail.username='$fname' AND detail.password='$pas' AND detail.quantity=1";
$result=$con->query($sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$prdctid=$row['productid'];
$itmname=$row['productid1'];
$quan=$row['quantity'];
$rate=$row['price'];
$total=$total+$rate;
echo '<img src="totalpdt/'.$prdctid.'" height="100px" width="100px">';
echo "<b>name is </b> :".$itmname;
echo "<b>  price is :</b>".$rate.'<br>';
echo '<br>';
}
}
}

else {
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
$con->close();
}

?>
</div>
<div style="border:2px solid #333333;height:300px;width:35%;margin-left:65%;margin-top:-1000px">
<?php
echo "<b>The total amount is:</b>";
echo $total.'<br>';
?>
<form action="#" method="post">
<input type="submit" name="sub3" style="background-color:#FFCC33;color:#000000;width:100%;height:35px;border-radius:15px" value="checkout" />
</form>
</div>
<?php
if(isset($_POST['sub3']))
{
$con = mysqli_connect("localhost","root","","csdt");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//inserting Record to the database
$sql="UPDATE product INNER JOIN detail ON detail.productid1=product.name SET product.quantity=product.quantity-1 WHERE detail.username='$fname' AND detail.password='$pas'";
if($con->query($sql)==TRUE){
$sql2="UPDATE detail SET quantity=0 WHERE username='$fname' AND password='$pas' AND quantity=1";
if($con->query($sql2)==TRUE){
header("Location:confirm.php?order=$total");
exit;
}
}
else{
echo "Error creating database: " . $con->error;
}
$con->close();
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
 </body>
</html>