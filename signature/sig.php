<?php 

session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location: ../login");
	exit;
}
?>

<?php
		$slash = false;
		if($_GET['first']){
			$name = htmlspecialchars($_GET['first']." ".$_GET['last']);	
		}

		if($_GET['position']){
			$position = htmlspecialchars($_GET['position']);
		}

		if($_GET['phone']){
			$work = htmlspecialchars($_GET['phone']);
		}
		if($_GET['email']){
			$cell = htmlspecialchars($_GET['email']);
		}

		$social = false;

		if($_GET['twitter']){
			$twitter = htmlspecialchars($_GET['twitter']);
			$social = true;
		}
		if($_GET['github']){
			$github = htmlspecialchars($_GET['github']);
			$social = true;
		}
		if($_GET['facebook']){
			$facebook = htmlspecialchars($_GET['facebook']);
			$social = true;
		}
		if($_GET['linkedin']){
			$flickr = htmlspecialchars($_GET['linkedin']);
			$social = true;
		}
		if($_GET['instagram']){
			$instagram = htmlspecialchars($_GET['instagram']);
			$social = true;
		}
		if($_GET['website']){
			$foursquare = htmlspecialchars($_GET['website']);
			$social = true;
		}

	?>
	
	
<?php 
if(isset($_POST['submit']))
{
	
	require_once('../phpmailer/class.phpmailer.php');
	
	$mail = new PHPMailer();
    $mail->CharSet =  "utf-8";
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->Username = "info@myw3schools.com";
    $mail->Password = "myw3schools@123";
	$mail->SMTPSecure = "ssl";  
    $mail->Host = "mail.myw3schools.com";
    $mail->Port = "465";
  
    $mail->setFrom('info@myw3schools.com', 'MyW3schools.com');
    $mail->AddAddress($_POST['to'], $_POST['name']);
 
    $mail->Subject  = ($_POST['subject']);
    $mail->IsHTML(true);
    $mail->Body    = '
	<p style="font-weight: 400;"><strong>Hi&nbsp;'.$_POST['name'].',</strong></p>
<p style="font-weight: 400;"><strong>Greetings from&nbsp;myw3schools.com!</strong></p>
</br>
<p style="font-weight: 400;">'.$_POST['comments'].'</p>
</br>
	<p style="font-weight: 400; font-weight:bold; color:#3A5580;">Best Regards,</p>
<p style="font-weight: 400;"><strong>Name: </strong> '.$_GET['first'].' '.$_GET['last'].'</p>
	
	<p style="font-weight: 400;"><strong>Position: </strong>'.$_GET['position'].' </p>
	
	<p style="font-weight: 400;"><strong>Phone: </strong>'.$_GET['phone'].'</p>
	
	<p style="font-weight: 400;"><strong>Email: </strong>'.$_GET['email'].'</p>
	
	<p style="font-weight: 400;"><strong>FIND ME ON:</strong> 
	<a style="text-decoration:none; color:#a5a5a5;" href="'.$twitter.'" target="_blank">TWITTER</a> /  
	<a style="text-decoration:none; color:#a5a5a5;" href="'.$github.'" target="_blank">GITHUB</a> / 
	<a style="text-decoration:none; color:#a5a5a5;" href="'.$facebook.'" target="_blank">FACEBOOK</a> / 
	<a style="text-decoration:none; color:#a5a5a5;" href="'.$flickr.'" target="_blank">LINKEDIN</a> / 
	<a style="text-decoration:none; color:#a5a5a5;" href="'.$instagram.'" target="_blank">INSTAGRAM</a> </p>
	<p style="font-weight: 400;"><strong>Website: </strong> <a href="'.$foursquare.'" target="_blank">'.$foursquare.'</a></p>
	';

	if($mail->Send()){
  
echo '<script>window.location.href = "1";</script>';
}else{
    
	
	 echo '<script>window.location.href = "2";</script>';
	
}     
	unset($mail);

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

<meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> 
<meta property="og:locale" content="en_GB" /> 
<meta property="og:type" content="website" /> 
<meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> 
<meta name="robots" content="noindex, nofollow" /> 

<link rel="shortcut icon" href="../img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> 
<title> Signature Preview | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!
</title> 
<meta name="distribution" content="web" /> 

<link rel='stylesheet' id='google-fonts-css' href='../css/font.css' type='text/css' media='all' /> 

<link rel='stylesheet' id='font-awesome-min-css' href='../css/font-awesome.min.css' type='text/css' media='screen' /> 

<link rel='stylesheet' id='transform-css' href='../css/transform.css' type='text/css' media='screen' /> 

<link rel='stylesheet' id='reopen1-css' href='../css/reopen1.css' type='text/css' media='screen' /> 
<script type="text/javascript" src="../js/output.min.js">
</script>
<script> var html = document.getElementsByTagName('html')[0]; var removeLoading = function() { setTimeout(function() { html.className = html.className.replace(/loading/, ''); }, 3000); }; removeLoading(); </script>

</head>

<body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> 

<div id="cover-1"> 

<div class="clear">
</div> 

<header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> 

<div id="" class="bag over-all-nav"> 

<div class="leftnavi navbar"> 

<div class="nav-collapse"> 
<ul class="nav"> 
<li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;">

<span class="bari"><i class="fa fa-bars"></i>
</span> 

<span class="stripnav dark-xl">&nbsp;&nbsp;
</span></a> </br> 
<ul class="dropdown-menu" role="menu"> 
<li> <a class="pointer" href="../mail" title="Email">Email</a> </li> 
<li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> 
<li> <a class="pointer" href="../bulk_mail/index" title="Bulk Email">Bulk Email</a> </li> 
</ul> </li> 
</ul> 
</div> 
</div> <nav id="rightnav " class="position-navi"> 

<div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../subscriptions/index" title="Subscriptions">

<span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">SUBSCRIPTIONS
</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout">

<span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT
</span> </a> &nbsp; &nbsp;
</div> </nav> 
</div> </header> 

<div id="former-text" > </br> 

<div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas> 
<script> var canvas = document.getElementById("canvas"); var ctx = canvas.getContext("2d"); var radius = 100; ctx.translate(100, 100); radius = radius * 0.9; setInterval(drawClock, 1000); function drawClock() { drawFace(ctx, radius); drawNumbers(ctx, radius); drawTime(ctx, radius); } function drawFace(ctx, radius) { var grad; ctx.beginPath(); ctx.arc(0, 0, radius, 0, 2 * Math.PI); ctx.fillStyle = 'white'; ctx.fill(); grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05); grad.addColorStop(0, '#67D2C8'); grad.addColorStop(0.5, '#67D2C8'); grad.addColorStop(1, 'white'); ctx.strokeStyle = grad; ctx.lineWidth = radius * 0.1; ctx.stroke(); ctx.beginPath(); ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI); ctx.fillStyle = 'black'; ctx.fill(); } function drawNumbers(ctx, radius) { var ang; var num; ctx.font = radius * 0.15 + "px arial"; ctx.textBaseline = "middle"; ctx.textAlign = "center"; for (num = 1; num < 13; num++) { ang = num * Math.PI / 6; ctx.rotate(ang); ctx.translate(0, -radius * 0.85); ctx.rotate(-ang); ctx.fillText(num.toString(), 0, 0); ctx.rotate(ang); ctx.translate(0, radius * 0.85); ctx.rotate(-ang); } } function drawTime(ctx, radius) { var now = new Date(); var hour = now.getHours(); var minute = now.getMinutes(); var second = now.getSeconds(); hour = hour % 12; hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60)); drawHand(ctx, hour, radius * 0.5, radius * 0.07); minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60)); drawHand(ctx, minute, radius * 0.8, radius * 0.07); second = (second * Math.PI / 30); drawHand(ctx, second, radius * 0.9, radius * 0.02); } function drawHand(ctx, pos, length, width) { ctx.beginPath(); ctx.lineWidth = width; ctx.lineCap = "rectangle"; ctx.moveTo(0, 1); ctx.rotate(pos); ctx.lineTo(0, -length); ctx.stroke(); ctx.rotate(-pos); } 
</script> 
</div> </br> </br> 

<div id="former-text-list" class="bag_24"> 

<div class="property-content-divider">
</div> 

<div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> 

<div class='list-text-cover'> 

<div class="cont_col_1 widget_text secondary_object_category"> 

<div class="textwidget"> 

<p style="color:black; text-align:center; font-size:20px;"> </p> 

<div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> 

<div class="contacten" name="quick_enq_side" > 

<div class="panel panel-default"> 

<div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"></h3>
</div> 

<div class="panel-body" style="background-color:white;"></br><center> <img src="../img/rsb.png" alt="myw3schools.com" > </center></br> 

<p style="margin:0; padding:0; letter-spacing:0.1em; line-height:1.5em; font-size:15px; font-family:helvetica, arial, sans serif; font-weight:100; color:#a5a5a5;">



<?php echo '<img src="../img/avatar_sig.png" alt="Email Signature"> </br> <hr> <span style="color:#ff7700;">Name: </span>'. $name;?> </br>  

<?php echo '<span style="color:#ff7700;">Position: </span>'. $position;?>
</p>

<p style="margin:0; padding:0; line-height:1.3em; font-size:15px; letter-spacing:0.1em; font-family:'arial'; font-weight:100; color:#a5a5a5;">

<?php if($work):echo '<span style="color:#ff7700;">Phone: </span>'.$work;endif;?>
<?php if($cell):echo '</br><span style="color:#ff7700;"> Email: </span>'.$cell; endif;?></p>
							
<?php if($social){
									echo '<p style="margin:0; padding:0; letter-spacing:0.1em; line-height:1.5em; font-size:15px; font-family:helvetica, arial, sans serif; font-weight:100; color:#a5a5a5;"><span style="color:#ff7700;">FIND ME ON:</span> ';
								}
								if($twitter){
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$twitter.'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>';
									$slash=true; 
								}
								if($github){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$github.'" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a>';
									$slash=true; 
								}
								if($facebook){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$facebook.'" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>';
									$slash=true; 
								}
								if($flickr){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$flickr.'" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>';
									$slash=true; 
								}
								if($instagram){
									if($slash){
										echo '<span style="color:#ff7700;"> / </span>';
									}
									echo '<a style="text-decoration:none; color:#a5a5a5;" href="'.$instagram.'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>';
									$slash=true; 
								}
								if($foursquare){
									if($slash){
										echo '<span style="color:#ff7700;"> </br> </span>';
									}
									echo '<span style="color:#ff7700;">Website: </span> <a style="text-decoration:none; color:#a5a5a5;" href="'.$foursquare.'" target="_blank">'.$foursquare.'</a>';
									$slash=true; 
								}
								if($social){
									echo '</p>';
								}
							?>					
							
</div></div></div></div></div></div></div></div></div></div><div class="clear"></div><div class="property-content-divider"></div></div><div class="clear"></div><div id="former-text" style="background-color:#eef1f4"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> </div> <div class="drop-accordion"> <div style="text-align: left;"></div> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> <body onload="qikenq.reset();"> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"> </h3></div> <div class="panel-body"> <form action="#" method="post" name="qikenq_side" id="qikenq"> <div class="form-field"> <input type="text" class="form-control" id="email21" name="name" placeholder="Please enter name *" autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="off" required> </div> <div class="form-field"> <input type="email" class="form-control" id="email22" name="to" placeholder="Please enter a valid Email Address *" autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="off" required> </div><div class="form-field"> <input type="text" class="form-control" id="email23" name="subject" placeholder="Please enter a subject line *" autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="off" required> </div><div class="form-field"> <textarea class="form-control" rows="2" id="email24" name="comments" placeholder="Please enter a message *" autocorrect="off" autocapitalize="off" spellcheck="false" autocomplete="off" required></textarea> </div> </br> <input name="submit" class="knob knob-data" type="submit" style="font-size:11pt;color:white;background-color:#ff7a59;border:2px solid #ff7a59;" value="Submit" /> <input type="reset" class="knob knob-data" style="font-size:11pt;color:white;background-color:#3A5580;border:2px solid #3A5580;" value="Reset" /> </form> </div> </div> </div> </body> <script> $("form").submit(function(e) { var ref = $(this).find("[required]"); $(ref).each(function() { if ($(this).val() == '') { alert("Please fill out this field"); $(this).focus(); e.preventDefault(); return false; } }); return true; }); </script> </div> </div> </div> <div class="property-content-divider"></div> </div></div><div class="clear"></div><div class="clear"></div><div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="suggareas"> <p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> </div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div></div><script type='text/javascript' src='../js/output.min1.js'></script><script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } });</script><script src="../js/gtag.js?id=UA-131555544-1"></script><script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1');</script></body></html>