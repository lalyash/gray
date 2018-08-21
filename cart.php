<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
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
<?php
session_start();
if($_SESSION['login']=="ok"){
$det=$_GET['val'];
echo $det;
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno()){
echo "Failed to connect to database ".mysqli_connect_error();
}
$sql="SELECT productid,quantity,price,name FROM printrr2 WHERE name='$det'";
$result=$con->query($sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$prdctid=$row['productid'];
$itmname=$row['name'];
$quan=$row['quantity'];
$rate=$row['price'];
echo '<img src="images2/'.$prdctid.'">';

}
}
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
