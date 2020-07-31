<?php 

session_start();

if(!isset($_SESSION['UserData']['Username'])){
	header("location: ../login");
	exit;
}

?>


<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#" class="loading"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <link rel="shortcut icon" href="../img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Bulk Email | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <style> .custom-file-input::-webkit-file-upload-button { visibility: hidden; } .file-upload { position: relative; display: inline-block; } .file-upload__label { display: block; padding: 1em 5em; color: #fff; background: #428bca; border-radius: .4em; transition: background .3s; &:hover { cursor: pointer; background: #000; } } .file-upload__input { position: absolute; left: 0; top: 0; right: 0; bottom: 0; font-size: 1; width: 0; height: 100%; opacity: 0; } .boxed { margin-top: 1em; margin-bottom: 1em; border: 1px solid #eddab7; padding: 1ex 1em; } .shaded { color: inherit; background-color: #f5ecdb; } </style> <link rel='stylesheet' id='google-fonts-css' href='../css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='../css/font-awesome.min.css' type='text/css' media='screen' /> <link rel='stylesheet' id='transform-css' href='../css/transform.css' type='text/css' media='screen' /> <link rel='stylesheet' id='reopen1-css' href='../css/reopen1.css' type='text/css' media='screen' /> <script type="text/javascript" src="../js/output.min.js"></script><script> var html = document.getElementsByTagName('html')[0]; var removeLoading = function() { setTimeout(function() { html.className = html.className.replace(/loading/, ''); }, 3000); }; removeLoading(); </script></head><body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div class="clear"></div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;&nbsp; </span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" href="../mail" title="Email">Email</a> </li> <li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> <li> <a class="pointer" href="index" title="Bulk Email">Bulk Email</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../subscriptions/index" title="Subscriptions"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">SUBSCRIPTIONS</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header><div id="former-text"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> <div class="textwidget"> <p style="color:black; text-align:center; font-size:20px;"> </p> <div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5> </br> <div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas> <script> var canvas = document.getElementById("canvas"); var ctx = canvas.getContext("2d"); var radius = 100; ctx.translate(100, 100); radius = radius * 0.9; setInterval(drawClock, 1000); function drawClock() { drawFace(ctx, radius); drawNumbers(ctx, radius); drawTime(ctx, radius); } function drawFace(ctx, radius) { var grad; ctx.beginPath(); ctx.arc(0, 0, radius, 0, 2 * Math.PI); ctx.fillStyle = 'white'; ctx.fill(); grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05); grad.addColorStop(0, '#67D2C8'); grad.addColorStop(0.5, '#67D2C8'); grad.addColorStop(1, 'white'); ctx.strokeStyle = grad; ctx.lineWidth = radius * 0.1; ctx.stroke(); ctx.beginPath(); ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI); ctx.fillStyle = 'black'; ctx.fill(); } function drawNumbers(ctx, radius) { var ang; var num; ctx.font = radius * 0.15 + "px arial"; ctx.textBaseline = "middle"; ctx.textAlign = "center"; for (num = 1; num < 13; num++) { ang = num * Math.PI / 6; ctx.rotate(ang); ctx.translate(0, -radius * 0.85); ctx.rotate(-ang); ctx.fillText(num.toString(), 0, 0); ctx.rotate(ang); ctx.translate(0, radius * 0.85); ctx.rotate(-ang); } } function drawTime(ctx, radius) { var now = new Date(); var hour = now.getHours(); var minute = now.getMinutes(); var second = now.getSeconds(); hour = hour % 12; hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60)); drawHand(ctx, hour, radius * 0.5, radius * 0.07); minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60)); drawHand(ctx, minute, radius * 0.8, radius * 0.07); second = (second * Math.PI / 30); drawHand(ctx, second, radius * 0.9, radius * 0.02); } function drawHand(ctx, pos, length, width) { ctx.beginPath(); ctx.lineWidth = width; ctx.lineCap = "rectangle"; ctx.moveTo(0, 1); ctx.rotate(pos); ctx.lineTo(0, -length); ctx.stroke(); ctx.rotate(-pos); } </script> </div> </br> </br> <body onload="qikenq.reset();"> <div class="contacten" name="quick_enq_side"> <div class="panel panel-default"> <div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"></h3></div> <div class="panel-body"> <form enctype="multipart/form-data" name="qikenq_side" id="qikenq" action="" method="POST"> <p style='color:gray; font-weight:bold;text-align:center;'>&nbsp;&nbsp;</p> </br> <p style='text-align:center;'><img src="../img/img16.png" alt="upload file" height="100" width="100"></p> </br> 
<div class="file-upload"> 
<label for="upload" class="file-upload__label">Choose File 
</label> 
<input id="upload" class="file-upload__input" type="file" name="csv_data"> 
</div> 
<br /> 
<br /> 
<input type="submit" class="knob knob-data pointer" style="font-size:11pt;color:white;background-color:#ff7a59; border:2px solid #ff7a59;" title="Upload CSV File" id="csv_upload" value="Upload CSV file" disabled></input> <a class="knob knob-data pointer" style="padding:6px 6px;font-size:11pt;color:white;background-color:#3A5580;border:2px solid #3A5580;" href="../home.php" title="Cancel">&nbsp;&nbsp;cancel&nbsp;&nbsp;</a> 
</form> </br> </br> 
<script> $(document).ready(function() { $('input:file').change(function() { if ($(this).val()) { $('input:submit').attr('disabled', false); } }); }); 
</script> 
</div> 
</div> 
</div> 
</body> 
</div> <?php $ext_error = ""; $data = ""; $csv_data = array(); if (isset($_FILES) && (bool) $_FILES) { $allowedExtentsoins = "csv"; $file_name = $_FILES['csv_data']['name']; $temp_name = $_FILES['csv_data']['tmp_name']; $path_part = pathinfo($file_name); $ext = $path_part['extension']; if ($ext != $allowedExtentsoins) { echo '

<div class="boxed shaded">

<p style="font-size:15px; text-align:center;color:black"><strong>Wrong File Format.</strong> Allowed: CSV.</p> 
</div>'; echo '
<meta http-equiv="refresh" content="3;url=index.php" />'; $ext_error = TRUE; } else { $ext_error = FALSE; } if ($ext_error == FALSE) { echo '</br>'; echo '

<p style ="text-align:center; color:black; font-size:16px; font-weight:bold;">File upload was successful </p>'; echo '</br>'; $file_path = dirname(__FILE__) . "/uploads/" . $path_part['basename']; move_uploaded_file($temp_name, $file_path); $file = new SplFileObject($file_path); $file->setFlags(SplFileObject::READ_CSV); foreach ($file as $row) { $csv_data[] = array_filter($row); } $csv_data = array_filter($csv_data); $data = htmlspecialchars(json_encode($csv_data)); ?> 

<div id="wrapper"> 

<body onload="qikenq.reset();"> 

<div class="contacten" name="quick_enq_side"> 

<div class="panel panel-default"> 

<div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;">Please enter the message </h3>
</div> 

<div class="panel-body"> 

<form action="Mail.php" method="post" name="qikenq_side" id="qikenq"> 

<div class="form-field"> 
<input type="hidden" name="uploaded_file_path" value="<?php echo $file_path; ?>"> 
</div> 

<div class="form-field"> 
<input type="hidden" class="form-control" id="email21" name="user_list" value="<?php echo $data; ?>"> 
</div> 

<div class="form-field"> 
<input type="text" name="email_sub" id="email22" class="form-control" placeholder="Subject *" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required> 
</div> 

<div class="form-field"> 
<textarea class="form-control" id="email23" rows="2" name="box_msg" placeholder="Your Message *" autocomplete="off" autocorrect="off" autocapitalize="off" spellcheck="false" required>
</textarea> 
</div> </br> 
<input type="submit" id="submit" class="knob knob-data" style="background-color:orange;" value="Submit" /> 
<input type="reset" class="knob knob-data" style="background-color:#3A5580;" value="Reset" /> 
</form> 
</div> 
</div> 
</div> 
</body> 
<script> $("form").submit(function(e) { var ref = $(this).find("[required]"); $(ref).each(function() { if ($(this).val() == '') { alert("Please fill out this field"); $(this).focus(); e.preventDefault(); return false; } }); return true; }); 
</script> <?php } } ?> 
</div> 
<script> jQuery("#csv_upload").click(function(e) { var upload = jQuery('.csv_upload').val(); if (upload == "") { alert('Please Upload a CSV file!!!'); e.preventDefault(); } }); jQuery("#submit").click(function(e) { var email_sub = jQuery('.email_sub').val(); var box_msg = jQuery('.box_msg').val(); if (email_sub == "") { alert('Subject is required!!!'); e.preventDefault(); } if (box_msg == "") { alert('Message is required!!!'); e.preventDefault(); } }); 
</script> </br> <center> <img src="../img/rsb.png" alt="myw3schools.com" > </center></br> </br></br> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
<div class="clear"></div> <div class="property-content-divider"></div> </div> <div class="clear"></div> <div class="clear"></div> <div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div> </div> <script type='text/javascript' src='../js/output.min1.js'></script> <script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); </script> <script src="../js/gtag.js?id=UA-131555544-1"></script> <script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); </script></body></html>
