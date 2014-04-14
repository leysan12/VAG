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
<FORM><INPUT Type="button" id="button" VALUE="Back" onClick="history.go(-1);return true;"></FORM>       

<?php
?>

<script type="text/javascript">
//trying to show questions step by step
var step = 1;
var total = 4;
$(function(){
$('#customise > div').hide();
$('#step'+step).show();
$('#nextStep').click(function(){
    $('#step'+step).hide();
    step += 1;
    if(step > total)
    {
       step = 1;    
    }
    $('#step'+step).show();
});
    $('#previousStep').click(function(){
    $('#step'+step).hide();
    step -= 1;
    if(step == 0)
    {
       step = total;       
    }
    $('#step'+step).show();
});
});
</script>

</body>
</html>