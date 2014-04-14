<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>Vibroarthrography Project</title>
</head>
<body>
<div id="form">
<form action="search.php" name="frm" method="GET"> 
 <?php
session_start();
$_SESSION['username'] = $username;
echo "<h1>Welcome, ".$_SESSION['username']."</h1>";
?>
    <table width="500" border="0" align="center">  
        <tr>
        <th>Please, choose or create the patient</th>
        </tr>
        <tr>  
            <th>First Name:
            <input name="firstname" type="text" id="firstname" value="";>
            </th> 
        </tr>
        <tr>  
            <th>Last Name:
            <input name="lastname" type="text" id="lastname" value="";> 
            </th>
        </tr>
        <tr> 
            <th>Birthdate:
            <input name="birthdate" type="date" id="birthdate" value="";> 
            </th>
        </tr>
        <tr>  
            <th>Gender:
            <label for="male"><input type="radio" name="gender" value="male" />Male</label>
            <label for="female"><input type="radio" name="gender" value="female" />Female</label>
            </th>  
        </tr>
        <tr>
            <td>
            <input type="submit" value="Search">
            </td>
        </tr>
</table>  
</form>
</div>
</body>
</html>