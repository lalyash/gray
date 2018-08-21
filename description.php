<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style>
*{ margin:0px; padding:0px}
</style>
<title>Untitled Document</title>
</head>
<body>
<div style="height:70px;width:100%;background:#333333;float:left"><font color="#FFFFFF" size="+3">Gray Machines&nbsp;</font>
<form action="cart.php" method="post">
<input type="submit" value="Cart" name="collection" style="border-radius:5px;margin-left:60%;width:90px"/>
</form>
<form action="logout.php" method="post">
<input type="submit" value="Logout" name="logout1" style="border-radius:5px;margin-left:90%;width:90px"/>
</form>
</div>
<h1><font color="#CCCCCC"><?php echo $_GET['type'];?></font></h1>
<div style="width:30%;height:300px">
<?php
$dett=$_GET["det"];
echo "this is".$dett."<br>";
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
<div style="width:60% ;height:300px ; margin-left:30%;margin-top:-300px">
<h1><font color="#333333"><?php echo $itmname ?></font></h1>
<h2><font color="#333333"><?php echo "price ".$rate ?></font></h2>
<?php 
if( $quan==0){
echo" Sorry !Stocks Unavailable.";
}
else{
if( $quan >0 && $quan <=5){
echo "Hurry !only".$quan ."quantity left".'<br>';
}

}
 ?>
 <form action="#" method="post">
<input type="submit" value="addtocart" name="cart1" />
</form>
<?php
if(isset($_POST['cart1'])){
header("Location:cart.php?val=$itmname");
exit;
}
?>
</div>
</body>
</html>
