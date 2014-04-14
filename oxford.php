<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>Vibroarthrography Project</title>

<script type="text/javascript">
var $c =0;
function next(){
    var boxes = document.getElementsByClassName("box");
    $c +=1;
    if($c >= boxes.length) $c = 0;
    for (var $i=0;$i<boxes.length;$i++){
        boxes[$i].style.display  = "none";
    }
    boxes[$c].style.display  = "block";
    return false;
}
function prev(){
    var boxes = document.getElementsByClassName("box");
    $c -=1;
    if($c < 0) $c = (boxes.length-1);   
    for (var $i=0;$i<boxes.length;$i++){
        boxes[$i].style.display  = "none";
    }
        boxes[$c].style.display  = "block";
    return false;   
}
</script>
</head>
<body>
<div id="form">
<h1>Oxford questionary</h1>
<h2>Patient: <?php echo "".$_REQUEST['gender'].", ".$_REQUEST['birthdate']."" ?></h2>
<p>PROBLEMS WITH YOUR KNEE<br />
During the past 4 weeks...</p>

    <!-- question 1 -->
    <div id="box" class="box">
    How would you describe the pain you usually have from your knee?</p>
    <form action="">
    <input type="radio" name="quest1" value="male">None
    <input type="radio" name="quest1" value="female">Very mild
    <input type="radio" name="quest1" value="male">Mild
    <input type="radio" name="quest1" value="male">Moderate
    <input type="radio" name="quest1" value="male">Severe
    </form>
    </div>
    
    <!-- question 2 -->
    <div id="box" class="box">
    Have you had any trouble with washing and drying yourself (all over) because of your knee?</p>
    <form action="">
    <input type="radio" name="quest2" value="male">No trouble at all 
    <input type="radio" name="quest2" value="female">Very little trouble
    <input type="radio" name="quest2" value="male">Moderate trouble
    <input type="radio" name="quest2" value="female">Extreme difficulty	
    <input type="radio" name="quest2" value="female">Impossible to do
    </form>
    </div>

    <!-- question 3 -->
    <div id="box" class="box">
    Have you had any trouble getting in and out of a car or using public
transport because of your knee? (whichever you tend to use)</p>
    <form action="">
    <input type="radio" name="quest3" value="male">No trouble at all  
    <input type="radio" name="quest3" value="female">Very little trouble
    <input type="radio" name="quest3" value="male">Moderate trouble
    <input type="radio" name="quest3" value="female">Extreme difficulty	
    <input type="radio" name="quest3" value="female">Impossible to do
    </form>
    </div>
    
    <!-- question 4 -->
    <div id="box" class="box">
    For how long have you been able to walk before pain from your knee
becomes severe? (with or without a stick)</p>
    <form action="">
    <input type="radio" name="quest4" value="male">No pain/More than 30 minutes
    <input type="radio" name="quest4" value="female">Female
    <input type="radio" name="quest4" value="male">Male 
    <input type="radio" name="quest4" value="female">Female
    <input type="radio" name="quest4" value="female">Female
    </form>
    </div>
    
    <!-- question 5 -->
    <div id="box" class="box">
    After a meal (sat at a table), how painful has it been for you to stand up
from a chair because of your knee?</p>
    <form action="">
    <input type="radio" name="quest5" value="male">Male 
    <input type="radio" name="quest5" value="female">Female
    <input type="radio" name="quest5" value="male">Male 
    <input type="radio" name="quest5" value="female">Female
    <input type="radio" name="quest5" value="female">Female
    </form>
    </div>

    <!-- question 6 -->
    <div id="box" class="box">
    Have you been limping when walking, because of your knee?</p>
    <form action="">
    <input type="radio" name="quest6" value="male">Male 
    <input type="radio" name="quest6" value="female">Female
    <input type="radio" name="quest6" value="male">Male 
    <input type="radio" name="quest6" value="female">Female
    <input type="radio" name="quest6" value="female">Female
    </form>
    </div>
<a href="#" onClick="return prev();"><img src="icons/prev.png" height="32"/></a>  
&nbsp; <a href="#" onClick="return next();"><img src="icons/next.png" height="32"/></a>

</div>

</body>
</html>