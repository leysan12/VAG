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
//this will append conditions to query..change this $_GET fileds according to ur form credentials and u can use "=" instead of LIKE if u want exct match from ur table
$cond_string = "";
if(!empty($_GET['firstname']))
{
    $cond_string .= " AND firstname LIKE '%".$_GET['firstname']."%'";
}

if(!empty($_GET['lastname']))
{
    $cond_string .= " AND lastname LIKE '%".$_GET['lastname']."%'";
}
if(!empty($_GET['EMAILID ']))
{
    $cond_string .= " AND EMAILID  LIKE '%".$_GET['EMAILID']."%'";  
}
if(!empty($_GET['EMPLID']))
{
    $cond_string .= " AND EMPLID LIKE '%".$_GET['EMPLID']."%'";
}
//here ur query goes..change in query according to ur need
$query ="SELECT  * FROM OPERATOR WHERE 1=1 '.$cond_string.'";
?>

<div id="form">
<p>Then show the patient according to the idPatient.<br />
Here show the result search
</p>
<p>Please, choose the quest</p>
<input id="button" type="button" value="Oxford" onclick="window.open('oxford.php', '_self')"/>
<input id="button" type="button" value="Ousnam" onclick="window.open('ousnam.php', '_self')"/>
</div>

</body>
</html>