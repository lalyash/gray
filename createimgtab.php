<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$con = mysqli_connect("localhost","root","","csdt");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
//inserting Record to the database

$sql="CREATE TABLE images2(id INT(10) AUTO_INCREMENT PRIMARY KEY,imagename LONGBLOB)";
if($con->query($sql)==TRUE){
echo "Data saved successfully";
}
else{
echo "Error creating database: " . $con->error;
}
$con->close();
?>
</body>
</html>
