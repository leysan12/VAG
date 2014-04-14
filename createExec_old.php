<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
<link rel="stylesheet" type="text/css" href="main.css">
<title>Vibroarthrography Project</title>

<script language="javascript">
function SelectRedirect(){                  //ON selection of section this function will work
alert( document.getElementById('s1').value);
switch(document.getElementById('s1').value)
  {
  case "Oxford scores":
  window.location="oxford.php";
  break;
 
  case "Ousnam test":
  window.location="ousnam.php";
  break;
  }                                         // end of switch 
}
</script>
</head>

<body>
<div id="form">
<h1>Created patient: <?php echo "".$_REQUEST['firstname'].", ".$_REQUEST['lastname']."" ?></h1>
<?php      
$con = mysql_connect ("localhost", "root", "root", "mydb");             //connect to mydb db (firstname, lastname)
if (!$con)
{
	die ("Could not connect: " . mysql_error());                //If connection doesn't works - alert
}
echo "Connection with <b>mydb</b> established<br/>";

$firstname = mysql_real_escape_string($_REQUEST['firstname']);  //take an input data
$lastname = mysql_real_escape_string($_REQUEST['lastname']);
$birthdate = mysql_real_escape_string($_REQUEST['birthdate']);
$birthdate = date('Y-m-d', strtotime($birthdate));              //converting birthdate
$gender = mysql_real_escape_string($_REQUEST['gender']);

$salt = "aB1cD2eF3G";                                           //salted and hashed name
$hashed = md5($salt.$lastname);

$sql="INSERT INTO Patients (firstname, lastname, birthdate, md5) VALUES ('$firstname','$lastname', '$birthdate', '$hashed')";

mysqli_close($con);                                   //close mydb to open another db connection                      

/*
$con=mysqli_connect("localhost","root","root","VAG"); //conncet db VAG

if (mysqli_connect_errno())                           // Check connection
{
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$birthdate = mysql_real_escape_string($_REQUEST['birthdate']);   //input date to the db date format
$birthdate = date('Y-m-d', strtotime($birthdate));

	  if ($_REQUEST['gender'] == 'male')                        //gender string to int for DB
	  {
		$gender = "0";
	  }
	  elseif ($_REQUEST['gender'] == 'female')
	  {
	  	$gender = "1";
	  }

$salt = "aB1cD2eF3G";                                          //salted and hashed name
$hashed = md5($salt.$lastname);

//to check existence!

/*$sql="INSERT INTO Patients (md5hash, birthdate, female)
VALUES ('$hashed', '$birthdate', '$gender')";                 //insert Patients' data to the open db table

if (!mysqli_query($con,$sql))
{
	die('Error: ' . mysqli_error($con)); 
}
*/
$con = mysql_connect ("localhost", "root", "root");           //again, establish connection with VAG db
mysql_select_db ("VAG", $con);

$sql = mysql_query("SELECT idPatients, birthdate, female FROM Patients where md5hash like '$hashed'") or die
(mysql_error());                                              //take id, birthdate and gender from VAG to pass further to the questionary

while ($row = mysql_fetch_array($sql))
{
	echo "<p>Choosen patient data: <br /> Birthdate:".$row ['birthdate'].",<br />ID :".$row['idPatients'];"</p>";
}

mysqli_close($con);
?>
<p>Please choose the questionary :</p>
<a href="oxford.php" target="_blank"><button>Oxford</button></a> <a href="ousnam.php" target="_blank"><button>Ousnam</button></a>

<!-- trial of the list
<p>Please choose the questionary :</p>
<SELECT id="s1" NAME="section" onChange="SelectRedirect();">
<Option value="">Select Questionary</option>
<Option value="Oxford">Oxford</option>
<Option value="Ousnam">Ousnam</option>
</SELECT> -->
</div>
</body>
</html>