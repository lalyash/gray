<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>
<?php
$name=$_POST['name1'];
$pass=$_POST['pass1'];
$con=mysqli_connect("localhost","root","","csdt");
if(mysqli_connect_errno()){
echo "Failed to connect to database ".mysqli_connect_error();
}
$sql="SELECT username,password FROM details WHERE username='$name' AND password='$pass'";
$result=$con->query($sql);
if(mysqli_num_rows($result)>0){
while($row=mysqli_fetch_assoc($result)){
$personname=$row['username'];
$passwrd=$row['password'];
session_start();
$_SESSION['login']="ok";
header("Location:description.php");
exit;
}
}
else 
echo "0 results";
$con->close();
?>
<body>
</body>
</html>
