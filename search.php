<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>Vibroarthrography Project</title>
<script language="javascript">
function SelectRedirect(){
// ON selection of section this function will work
//alert( document.getElementById('s1').value);

switch(document.getElementById('s1').value)
{
case "Oxford":
window.location="oxford.php";
break;

case "Ousnam":
window.location="ousnam.php";
break;
}// end of switch 
}
</script>
</head>
<body>
<form id="form">
<h1>The patient search</h1>
<?php
 $con = mysql_connect ("localhost", "root", "root");
 mysql_select_db ("mydb", $con);
 
 $firstname = mysql_real_escape_string($_REQUEST['firstname']);
 $lastname = mysql_real_escape_string($_REQUEST['lastname']);
 $birthdate = mysql_real_escape_string($_REQUEST['birthdate']);
 $gender = mysql_real_escape_string($_REQUEST['gender']);
 
if (!$con)
 { 
    die ("Could not connect: " . mysql_error());
 } 
    $sql = mysql_query("SELECT * FROM Patients where firstname like '$firstname' union SELECT * FROM Patients where firstname like '$lastname'") or die
    (mysql_error());

    
while ($row = mysql_fetch_array($sql))
{ 
	  echo '<h1>Choosen patient data</h1>';
	  //salutation
	  if ($_REQUEST['gender'] == 'male')
	  {
		echo '<h2> Mr. '.$row['lastname'].'</h2>';
	  }
		echo '<h1> Ms. '.$row['lastname'].'</h1>';

      echo '<p>First name: ' .$row['firstname'];
      echo '<br /> Last name: ' .$row['lastname'];
      echo '<br /> Birthdate: '.$row['birthdate'];
      echo '<br /> Gender: '.$_REQUEST['gender'];
      echo '</p>';
      echo "<p>Please choose the questionary :</p>";
      echo '<SELECT id="s1" NAME="section" onChange="+SelectRedirect();">';
      echo '<Option value="">Select Questionary</option>
      <Option value="Oxford">Oxford</option>
      <Option value="Ousnam">Ousnam</option>
      </SELECT>';
      echo "<SELECT id="+s1+" NAME="+section+" onChange="+SelectRedirect();+">
      <Option value="+">Select Questionary</option>
      <Option value="+Oxford+">Oxford</option>
      <Option value="+Ousnam+">Ousnam</option>
      </SELECT>";
 }
      echo "<p>The patient not found<br />Please check the input data or create a new patient</p>";
      echo '<FORM>';
      //echo '<INPUT Type="button" id="button" VALUE="Back" onClick="history.go(-1);return true;">';
      echo '<a href="patients.php"><input type="button" value="Back" /></a>';
      echo '<a href="create.php"><input type="button" value="Create" /></a>';
      echo '</FORM>';

 ?> 
<?php 
$con = mysql_connect ("localhost", "root", "root");
mysql_select_db ("VAG", $con);

$birthdate = mysql_real_escape_string($_REQUEST['birthdate']);
$gender = mysql_real_escape_string($_REQUEST['gender']);

if (!$con)
{
	die ("Could not connect: " . mysql_error());
}
//$sql = mysql_query("SELECT * FROM Patients where md5hash like '$firstname' union SELECT * FROM Patients where firstname like '$lastname'") or die
//(mysql_error());
?>
</form>
</body> 
</html>