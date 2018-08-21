<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img2" />
Quantity:<input type="text" name="quan" />
Price per item:<input type="text" name="pric" />
name of product :<input type="text" name="itemname" />
<input type="submit" value="printerUpload" name="sub2" />
</form>
<?php
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno())
{
echo"Failed to connect to mysql:".mysqli_connect_error();
}
if(isset($_POST['sub2'])){
$fname2=$_FILES['img2']['name'];
$fdata2=$_FILES['img2']['tmp_name'];
$folder2="images2/";
$folder3="totalpdt/";
$quant=$_POST['quan'];
$pri=$_POST['pric'];
$nam=$_POST['itemname'];
move_uploaded_file($fdata2,$folder2.$fname2);
$sql2="INSERT INTO printrr2(productid,quantity,price,name) values('$fname2','$quant','$pri','$nam')";
if ($con->query($sql2) === TRUE) {

    echo "image uploaded successfully";
} else {
    echo "Error creating database: " . $con->error;
}
}
?>
<?php
$sql3="SELECT * FROM printrr2";
$result2=$con->query($sql3);
if(mysqli_num_rows($result2)>0){
while($row2=mysqli_fetch_assoc($result2)){
$prdctid=$row2['productid'];
$quanty=$row2['quantity'];
echo '<img src="images2/'.$prdctid.'" height="100px" width="100px">'.'<br>';
}
}
else
echo "0 results";
$con->close();

?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img2" />
Quantity:<input type="text" name="quan" />
Price per item:<input type="text" name="pric" />
name of product :<input type="text" name="itemname" />
<input type="submit" value="hard-diskUpload" name="sub3" />
</form>
<?php
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno())
{
echo"Failed to connect to mysql:".mysqli_connect_error();
}
if(isset($_POST['sub3'])){
$fname2=$_FILES['img2']['name'];
$fdata2=$_FILES['img2']['tmp_name'];
$folder2="images3/";
$folder3="totalpdt/";
$quant=$_POST['quan'];
$pri=$_POST['pric'];
$nam=$_POST['itemname'];
copy($fdata2,$folder3.$fname2);
move_uploaded_file($fdata2,$folder2.$fname2);
$sql2="INSERT INTO harddisk(productid,quantity,price,name) values('$fname2','$quant','$pri','$nam')";
if ($con->query($sql2) === TRUE) {

    echo "image uploaded successfully";
} else {
    echo "Error creating database: " . $con->error;
}

$sql2="INSERT INTO product(productid,quantity,price,name) values('$fname2','$quant','$pri','$nam')";
if ($con->query($sql2) === TRUE) {

    echo "image uploaded successfully";
} else {
    echo "Error creating database: " . $con->error;
}
}
?>
<?php
$sql3="SELECT * FROM harddisk";
$result2=$con->query($sql3);
if(mysqli_num_rows($result2)>0){
while($row2=mysqli_fetch_assoc($result2)){
$prdctid=$row2['productid'];
$quanty=$row2['quantity'];
echo '<img src="images3/'.$prdctid.'" height="100px" width="100px">'.'<br>';
}
}
else
echo "0 results";
$con->close();
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img2" />
Quantity:<input type="text" name="quan" />
Price per item:<input type="text" name="pric" />
name of product :<input type="text" name="itemname" />
<input type="submit" value="desktop-Upload" name="sub4" />
</form>
<?php
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno())
{
echo"Failed to connect to mysql:".mysqli_connect_error();
}
if(isset($_POST['sub4'])){
$fname2=$_FILES['img2']['name'];
$fdata2=$_FILES['img2']['tmp_name'];
$folder2="images4/";
$folder3="totalpdt/";
$quant=$_POST['quan'];
$pri=$_POST['pric'];
$nam=$_POST['itemname'];
move_uploaded_file($fdata2,$folder2.$fname2);
$sql2="INSERT INTO desktop(productid,quantity,price,name) values('$fname2','$quant','$pri','$nam')";
if ($con->query($sql2) === TRUE) {

    echo "image uploaded successfully";
} else {
    echo "Error creating database: " . $con->error;
}
move_uploaded_file($fdata2,$folder3.$fname2);
$sql2="INSERT INTO product(productid,quantity,price,name) values('$fname2','$quant','$pri','$nam')";
if ($con->query($sql2) === TRUE) {

    echo "image uploaded successfully";
} else {
    echo "Error creating database: " . $con->error;
}
}
?>
<?php
$sql3="SELECT * FROM desktop";
$result2=$con->query($sql3);
if(mysqli_num_rows($result2)>0){
while($row2=mysqli_fetch_assoc($result2)){
$prdctid=$row2['productid'];
$quanty=$row2['quantity'];
echo '<img src="images4/'.$prdctid.'" height="100px" width="100px">'.'<br>';
}
}
else
echo "0 results";
$con->close();
?>
<form action="" method="post" enctype="multipart/form-data">
<input type="file" name="img" />
<input type="submit" value="Upload" name="sub" />
</form>
<?php

$con = mysqli_connect("localhost","root","","csdt");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
if(isset($_POST['sub'])){ 
$fname=$_FILES['img']['name'];
$fdata=$_FILES['img']['tmp_name'];
$folder="images/";
move_uploaded_file($fdata,$folder.$fname);

$sql="INSERT INTO buy4(imagename,data) values('$fname','$fname')";
if ($con->query($sql) === TRUE) {

    echo "image uploaded successfully";
} else {
    echo "Error creating database: " . $con->error;
}
}
?>
<?php

$sql1="SELECT imagename FROM buy4";
$result=$con->query($sql1);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
while($row = mysqli_fetch_assoc($result)) {
$imgn=$row['imagename'];
echo '<img src="images/'.$imgn.'" height="100px" width="100px">'.'<br>';
 } 
}
else {
 echo "0 results";
}
$con->close();

?>
</body>
</html>