<?php 

if (!session_id() && !headers_sent()) {
   session_start();
}  

	if(isset($_POST['Submit'])){
		$logins = array('admin' => 'admin','username1' => 'password1','username2' => 'password2');
		$Username = isset($_POST['Username']) ? $_POST['Username'] : '';
		$Password = isset($_POST['Password']) ? $_POST['Password'] : '';		
		if (isset($logins[$Username]) && $logins[$Username] == $Password){
			$_SESSION['UserData']['Username']=$logins[$Username];
			header("location:home");
			exit;
		} else {
			 echo '<meta http-equiv="refresh" content="0;url=mobile-site_10.html" />';
		}
	}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#" class="loading">

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
<meta http-equiv="X-UA-Compatible" content="IE=9" /> 
<meta name="format-detection" content="telephone=no" /> 
<meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> 
<meta http-equiv="cache-control" content="no-store" /> 
<meta http-equiv="X-UA-Compatible" content="IE=edge" /> 
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> 
<meta name="author" content="MyW3schools" /> 
<link rel="shortcut icon" href="img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> 
<title>Login | MyW3schools.com</title> 
<meta name="distribution" content="web" /> 
<style> .boxed { margin-top: 1em; margin-bottom: 1em; border: 1px solid #eddab7; padding: 1ex 1em; } .shaded { color: inherit; background-color: white; } 
</style> 
<meta name="distribution" content="web" /> 
<link rel='stylesheet' id='google-fonts-css' href='css/font.css' type='text/css' media='all' /> 

<link rel='stylesheet' id='font-awesome-min-css' href='css/font-awesome.min.css' type='text/css' media='screen' /> 

<link rel='stylesheet' id='transform-css' href='css/transform.css' type='text/css' media='screen' /> 

<link rel="stylesheet" id='reopen1-css' href="css/reopen1.css" type="text/css" media="screen"> 
<script type="text/javascript" src="js/output.min.js"></script>
<script> var html = document.getElementsByTagName('html')[0]; var removeLoading = function() { setTimeout(function() { html.className = html.className.replace(/loading/, ''); }, 3000); }; removeLoading(); </script>


</head>

<body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> 

<div id="cover-1"> 

<div class="clear">
</div> 

<div id="former-text"> 

<div id="former-text-list" class="bag_24"> 

<div class="property-content-divider">
</div> 

<div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> 

<div class='list-text-cover'> 

<div class="cont_col_1 widget_text secondary_object_category"> 

<div class="textwidget"> 

<p style="color:black; text-align:center; font-size:20px;"> </p> 

<div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> </br> </br> 

<div style="text-align:right"> <canvas id="fly" width="200" height="200"></canvas> 
<script> var fly = document.getElementById("fly");var shade = fly.getContext("2d");var radius = 100;shade.translate(100, 100);radius = radius * 0.9;setInterval(sailcloth, 1000);function sailcloth() { duck(shade, radius); tenting(shade, radius); awning(shade, radius);}function duck(shade, radius) { var grad; shade.beginPath(); shade.arc(0, 0, radius, 0, 2 * Math.PI); shade.fillStyle = 'white'; shade.fill(); grad = shade.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05); grad.addColorStop(0, '#67D2C8'); grad.addColorStop(0.5, '#67D2C8'); grad.addColorStop(1, 'white'); shade.strokeStyle = grad; shade.lineWidth = radius * 0.1; shade.stroke(); shade.beginPath(); shade.arc(0, 0, radius * 0.1, 0, 2 * Math.PI); shade.fillStyle = 'black'; shade.fill();}function tenting(shade, radius) { var ang; var num; shade.font = radius * 0.15 + "px arial"; shade.textBaseline = "middle"; shade.textAlign = "center"; for (num = 1; num < 13; num++) { ang = num * Math.PI / 6; shade.rotate(ang); shade.translate(0, -radius * 0.85); shade.rotate(-ang); shade.fillText(num.toString(), 0, 0); shade.rotate(ang); shade.translate(0, radius * 0.85); shade.rotate(-ang); }}function awning(shade, radius) { var now = new Date(); var hour = now.getHours(); var minute = now.getMinutes(); var second = now.getSeconds(); hour = hour % 12; hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60)); tarpaulin(shade, hour, radius * 0.5, radius * 0.07); minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60)); tarpaulin(shade, minute, radius * 0.8, radius * 0.07); second = (second * Math.PI / 30); tarpaulin(shade, second, radius * 0.9, radius * 0.02);}function tarpaulin(shade, pos, length, width) { shade.beginPath(); shade.lineWidth = width; shade.lineCap = "rectangle"; shade.moveTo(0, 1); shade.rotate(pos); shade.lineTo(0, -length); shade.stroke(); shade.rotate(-pos);} 
</script> 
</div> </br> </br> </br> </br> 

<body onload="qikenq.reset();"> 

<div class="contacten" name="quick_enq_side"> 

<div class="panel panel-default"> 

<div class="panel-heading"> <h3 class="panel-title" style="font-size:20px; color:#3A5580; text-align: left;font-weight:bold;">Login </h3>
</div> 

<div class="panel-body"> 

<form action="#" method="post" name="Login_Form" id="qikenq"> 

<div class="form-field"> 
<input type="text" class="form-control" id="email2" name="Username" placeholder="Please enter the Username *" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required> 
</div> 

<div class="form-field"> 
<input type="password" class="form-control" id="email3" name="Password" placeholder="Password *" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required> 
</div> </br> 
<input name="Submit" class="knob knob-data pointer" type="submit" style="font-size:11pt;color:white;background-color:orange;border:2px solid orange" value="Submit" /> 
<input type="reset" class="knob knob-data pointer" style="font-size:11pt;color:white;background-color:#3A5580;border:2px solid #3A5580;" value="Reset" /> 
</form> 
</div> 
</div> 
</div> 
</body> 
<script> $("form").submit(function(e) { var ref = $(this).find("[required]"); $(ref).each(function() { if ($(this).val() == '') { alert("Please fill out this field"); $(this).focus(); e.preventDefault(); return false; } }); return true; }); 
</script> </br> </br> </br> </br> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 

<div class="clear">
</div> 

<div class="property-content-divider">
</div> 

<div id="former-text" style="background: -webkit-gradient(linear, left top, left bottom, from(#4a8bdc), to(#4fbfe9));"> 

<div id="former-text-list" class="bag_24"> 

<div class="property-content-divider">
</div> 

<div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> 

<div class='list-text-cover'> 

<div class="cont_col_1 widget_text secondary_object_category"> 
</div> 

<div class="contacten" name="quick_enq_side"> </br><center><img src="img/rsb.png" alt="myw3schools.com"> </br>

<div id="clockbox" style="font:14pt Arial; color:white; margin-top: 40px; text-align: center">
</div></center>
<script type="text/javascript">tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");function GetClock(){var d=new Date();var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();if(nyear<1000) nyear+=1900;var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;if(nhour==0){ap=" AM";nhour=12;}else if(nhour<12){ap=" AM";}else if(nhour==12){ap=" PM";}else if(nhour>12){ap=" PM";nhour-=12;}if(nmin<=9) nmin="0"+nmin;if(nsec<=9) nsec="0"+nsec;document.getElementById('clockbox').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" </br></br>"+nhour+":"+nmin+":"+nsec+ap+"";}window.onload=function(){GetClock();setInterval(GetClock,1000);}
</script> 
</div> 
</div> 
</div> 

<div class="property-content-divider">
</div> 
</div> 
</div> 
</div> 

<div class="clear">
</div> 

<div class="clear">
</div> 

<div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> 

<div id="footer" class="bag_24 footer-head"> 

<div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> 

<div id="footer-content" class="grid_20"> 

<div> 

<div class="clear">
</div> 

<div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. 
</div> 
</div> 
</div> 

<div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> 
</div> 
</div> 
</div> 
</div> 
<script type='text/javascript' src='js/output.min1.js'>
</script> 
<script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); 
</script> 
<script src="js/gtag.js?id=UA-131555544-1">
</script> 
<script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); 
</script>
</body>
</html>