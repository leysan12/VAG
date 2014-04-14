<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>Vibroarthrography Project</title>
<script type="text/javascript">
//to do: customize alert css
function validateForm()
{
var x=document.forms["create"]["firstname"].value;
if (x==null || x=="")
  {
  alert("First name must be filled out");
  return false;
  }

var y=document.forms["create"]["lastname"].value;
if (y==null || y=="")
  {
  alert("Last name must be filled out");
  return false;
  }

var z=document.forms["create"]["birthdate"].value;
if (z==null || z=="")
  {
  alert("Birthdate must be filled out");
  return false;
  }
//don't know, doesn't work for gender
//var t=document.forms["create"]["gender"].value;
//if (t==null || t=="")
//  {
//  alert("Please, choose the gender");
//  return false;
//  }
}
</script>

<script type='text/javascript'>

function dmy()
{
var mydate=document.getElementById('birthdate').value;
//alert(mydate);
var yf=mydate.split("-")[0];           
var mf=mydate.split("-")[1];
var df=mydate.split("-")[2];

var b = localStorage.getItem("b");
if(!b) 
{ 
b=[]; 
}
else 
{ 
b=JSON.parse(b); 

}
b.push({df:df,mf:mf,yf:yf});

localStorage.setItem("b", JSON.stringify(b));
}

function showdate() 
{
  var sdate = JSON.parse(localStorage.getItem('b'));
  var a = '';
  if (sdate != null) 
{
    for (var i=0; i<sdate.length; i++) 
{ 
   a += sdate[i]['df'] +'/'+sdate[i]['mf']+'/'+sdate[i]['yf']+'<br>';
}
  } 
else 
{ 
a='No DATA'; 
}
  document.getElementById('conversion').innerHTML = a;  
}
</script>

</head>

<body>
<!-- An input form -->
<div id="form">
<form action="createExec.php" name="create" method="get" onsubmit="return validateForm()">
<h1>Create a new patient</h1>
    <table width="500" border="0" align="center">  
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
            <input name="birthdate" type="date" id="birthdate" name="birthdate" value="";> 
            </th>
        </tr>
        <tr>  
            <th>Gender:
            <input type="radio" name="gender" value="male" />Male
            <input type="radio" name="gender" value="female" />Female
            </th>  
        </tr>
        <tr>
            <td>
            <input name="submit" TYPE="submit" Value="Submit">
            </td>
        </tr>
</table></form> 
<INPUT id=form" Type="button" id="button" VALUE="Back" onClick="history.go(-1);return true;">

</div>
</body>
</html>