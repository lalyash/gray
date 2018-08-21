<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<body>
<h1><font color="#CCCCCC">Printers</font></h1>

<?php
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno()){
echo "Failed to connect to database ".mysqli_connect_error();
}
$sql="SELECT * FROM printrr2";
$result=$con->query($sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$prdctid=$row['productid'];
$itmname=$row['name'];
echo '<img src="images2/'.$prdctid.'" height="100px" width="100px">'.'<br>';
echo '<a href="description.php?det='.$itmname.'">'.$itmname.'</a>'.'<br>';

}
}
else
echo "0 results";

$con->close();
?>

</body>
</html>
