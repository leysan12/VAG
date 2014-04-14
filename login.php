<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>Login page</title>
</head>
<body>

<h1>Login</h1>

<?php 

$username = $_POST['username']; 
$password = $_POST['password']; 
if (username=="new" || user=="new1") 
{ 
if (password=="123") 
  { 
  //include("login.php"); 
  echo "Username and Password are entered correctly, congrats!"; 
  } 
  else 
  { 
  echo "Username or Password not entered correctly please try again."; 
  } 
}

/*defined('DS') OR die('No direct access allowed.');

$users = array(
 "user" => "userpass"
);

if(isset($_GET['logout'])) {
    $_SESSION['username'] = '';
    header('Location:  ' . $_SERVER['PHP_SELF']);
}

if(isset($_POST['username'])) {
    if($users[$_POST['username']] !== NULL && $users[$_POST['username']] == $_POST['password']) {
  $_SESSION['username'] = $_POST['username'];
  header('Location:  ' . $_SERVER['PHP_SELF']);
    }else {
        //invalid login
  echo "<p>error logging in</p>";
    }
}

echo '<form method="post" action="'.SELF.'">
  <h2>Login</h2>
  <p><label for="username">Username</label> <input type="text" id="username" name="username" value="" /></p>
  <p><label for="password">Password</label> <input type="password" id="password" name="password" value="" /></p>
  <p><input type="submit" name="submit" value="Login" class="button"/></p>
  </form>';
exit; */


?>


</body>
</html>
