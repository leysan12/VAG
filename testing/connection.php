<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>The name of this device/app</title>
</head>
<body>
<?php 

session_start();
$_SESSION['username'] = $username;

$username = $_POST['username']; 
$password = $_POST['password']; 

if ($username=="new")
{
  if ($password=="123")
  {
    include 'patients.php';
  }
  else
  {
     include '401.html';
  }
} 
else
{
  include '401.html';
}

?>
</body>
</html>