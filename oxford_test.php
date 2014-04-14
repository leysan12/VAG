<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" 
    "http://www.w3.org/TR/html4/loose.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<!--defining used css file-->
  <link rel="stylesheet" type="text/css" href="main.css">
<title>Vibroarthrography Project</title>
<script type="text/javascript">
          $('#slider').rhinoslider({
              controlsPlayPause: false,
              showControls: 'always',
              showBullets: 'always',
controlsMousewheel: false,
prevText: 'Back',
              slidePrevDirection: 'toRight',
slideNextDirection: 'toLeft'
          });
          vars.buttons.next.click(function(){
              $(".rhino-next").hide();
              $('.form-submit').show();
              $(".rhino-prev").show();

              if($slider.find('.rhino-active').index() != ($slider.find('.rhino-item').length -1)){
                  next($slider,settings);
              }
              if($slider.find('.rhino-active').index() == ($slider.find('.rhino-item').length -2)){
                  $('.form-submit').html("Submit");

              }

              if(settings.autoPlay){
                  pause();
              }
          });
          var info = ["PERSONAL DETAILS","ACCOUNT DETAILS","CONTACT DETAILS"];
          var images = ["personal-details-icon.png","account-details.png","contact-details.png"];

                        $('.rhino-bullet').each(function(index){
                            var link_text = $(this).html();
              var description = $("#rhino-item"+(link_text-1)).attr("data");

                            $(this).html('<p style="margin: 0pt; font-size: 13px; font-weight: bold;"><img src="./img/'+images[index]+'"></p><p class="bullet-desc">'+info[index]+'</p></a>');
                        });
          </script>

</head>

<h1>Oxford questionary</h1>

<div id="wrapper">


            <form action="" >

                <div id="slider">
                    <div class="form-step" >

                        <div class="row">
                            <div class="form-left">First Name *</div>
                            <div class="form-right"><input type="text" id="fname" name="fname" class="form-input" /></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">Last Name *</div>
                            <div class="form-right"><input type="text" id="lname" name="lname" class="form-input" /></div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">Gender *</div>
                            <div class="form-right">
                                <select id="gender" name="gender">
                                    <option value="0">Select</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">Address</div>
                            <div class="form-right"><input type="text" id="address" name="address" class="form-input" /></div>
                            <div class="form-error"></div>
                        </div>

                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left">Username *</div>
                            <div class="form-right"><input type="text" id="username" name="username" class="form-input" /></div>
<div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">Password *</div>
                            <div class="form-right"><input type="text" id="pass" name="pass" class="form-input" /></div>
<div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">Confirm Password *</div>
                            <div class="form-right"><input type="text" id="cpass" name="cpass" class="form-input" /></div>
<div class="form-error"></div>
                        </div>
                    </div>
                    <div class="form-step" >
                        <div class="row">
                            <div class="form-left">Email *</div>
                            <div class="form-right"><input type="text" id="email" name="email" class="form-input" /></div>
<div class="form-error"></div>
                        </div>
                        <div class="row">
                            <div class="form-left">Mobile No</div>
                            <div class="form-right"><input type="text" id="mobile" name="mobile" class="form-input" /></div>
<div class="form-error"></div>
                        </div>
                    </div>
                </div>
            </form>
        </div>


</body>
</html>