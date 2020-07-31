<?php 

session_start();

if(!isset($_SESSION['UserData']['Username'])){

	header("location: ../login");

	exit;

}

?>



<?php



require 'db.php';

if(isset($_POST['submit_btn'])) {

        $query = "UPDATE tbl_infk SET name=?, amount=?, renewal_date=?, status=?  WHERE id=?";

        $stmt = $dbc->prepare($query);

        $stmt->bindParam(1, $_POST['name']);

        $stmt->bindParam(2, $_POST['amount']);

		 $stmt->bindParam(3, $_POST['renewal_date']);

        $stmt->bindParam(4, $_POST['status']);

		$stmt->bindParam(5, $_GET['id']);

        if($stmt->execute()) {

                 echo '<script>window.location.href = "3";</script>';

        } else {

                 echo '<script>window.location.href = "4";</script>';

        }

} else {

try {

$query = "SELECT * FROM tbl_infk WHERE id=?";

$stmt = $dbc->prepare($query);

$stmt->bindParam(1, $_GET['id']);

$stmt->execute();

$row=$stmt->fetch(PDO::FETCH_ASSOC);

$name = $row['name'];

$amount = $row['amount'];

$renewal_date = $row['renewal_date'];

$status = $row['status'];





$id = $row['id'];

} catch(PDOException $e) {

        echo "Error: " . $e->getMessage();

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
<meta property="og:locale" content="en_GB" /> 
<meta property="og:type" content="website" /> 
<meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> 
<meta name="robots" content="noindex,nofollow" /> 

<link rel="shortcut icon" href="../img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> 
<title>Edit Subscriptions | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!
</title> 
<meta name="distribution" content="web" /> 

<link rel='stylesheet' id='google-fonts-css' href='../css/font.css' type='text/css' media='all' /> 

<link rel='stylesheet' id='font-awesome-min-css' href='../css/font-awesome.min.css' type='text/css' media='screen' /> 

<link rel='stylesheet' id='transform-css' href='../css/transform.css' type='text/css' media='screen' /> 
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

<div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="index" title="Subscriptions">

<span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">SUBSCRIPTIONS
</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout">

<span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT
</span> </a> &nbsp; &nbsp;
</div> </nav> 
</div> </header> 

<div id="former-text"> 

<div id="former-text-list" class="bag_24"> 

<div class="property-content-divider">
</div> 

<div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> 

<div class='list-text-cover'> 

<div class="cont_col_1 widget_text secondary_object_category"> 

<div class="textwidget"></br> 

<div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas> 
<script> var canvas = document.getElementById("canvas"); var ctx = canvas.getContext("2d"); var radius = 100; ctx.translate(100, 100); radius = radius * 0.9; setInterval(drawClock, 1000); function drawClock() { drawFace(ctx, radius); drawNumbers(ctx, radius); drawTime(ctx, radius); } function drawFace(ctx, radius) { var grad; ctx.beginPath(); ctx.arc(0, 0, radius, 0, 2 * Math.PI); ctx.fillStyle = 'white'; ctx.fill(); grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05); grad.addColorStop(0, '#67D2C8'); grad.addColorStop(0.5, '#67D2C8'); grad.addColorStop(1, 'white'); ctx.strokeStyle = grad; ctx.lineWidth = radius * 0.1; ctx.stroke(); ctx.beginPath(); ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI); ctx.fillStyle = 'black'; ctx.fill(); } function drawNumbers(ctx, radius) { var ang; var num; ctx.font = radius * 0.15 + "px arial"; ctx.textBaseline = "middle"; ctx.textAlign = "center"; for (num = 1; num < 13; num++) { ang = num * Math.PI / 6; ctx.rotate(ang); ctx.translate(0, -radius * 0.85); ctx.rotate(-ang); ctx.fillText(num.toString(), 0, 0); ctx.rotate(ang); ctx.translate(0, radius * 0.85); ctx.rotate(-ang); } } function drawTime(ctx, radius) { var now = new Date(); var hour = now.getHours(); var minute = now.getMinutes(); var second = now.getSeconds(); hour = hour % 12; hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60)); drawHand(ctx, hour, radius * 0.5, radius * 0.07); minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60)); drawHand(ctx, minute, radius * 0.8, radius * 0.07); second = (second * Math.PI / 30); drawHand(ctx, second, radius * 0.9, radius * 0.02); } function drawHand(ctx, pos, length, width) { ctx.beginPath(); ctx.lineWidth = width; ctx.lineCap = "rectangle"; ctx.moveTo(0, 1); ctx.rotate(pos); ctx.lineTo(0, -length); ctx.stroke(); ctx.rotate(-pos); } 
</script> 
</div> </br> </br> 

<body onload="qikenq.reset();"> 

<div class="contacten" name="quick_enq_side"> 

<div class="panel panel-default"> 

<div class="panel-heading"> <h3 class="panel-title" style="font-size:15px;font-weight:bold;"> </h3>
</div> 

<div class="panel-body"> 

<div id="wrapper"> 

<form action="" method="POST" name="qikenq_side" id="qikenq"> 

<div class="form-field"> 
<input type="text" class="form-control" id="email21" name="name" value="<?php echo $name; ?>" placeholder="Subscription Name *" autocomplete="off" style="color:#999;" autocorrect="off" autocapitalize="off" spellcheck="false" required> 
</div> 

<div class="form-field"> 
<input type="text" class="form-control" id="email22" name="amount" value="<?php echo $amount; ?>" placeholder="Subscription Amount *" autocomplete="off" style="color:#999;" autocorrect="off" autocapitalize="off" spellcheck="false" required> 
</div> 

<div class="form-field"> 
<input type="date" class="form-control" id="email23" name="renewal_date" value="<?php echo $renewal_date; ?>" placeholder="End Date *" autocomplete="off" style="color:#999;" autocorrect="off" autocapitalize="off" spellcheck="false" required> 
</div> </br> 

<div class="form-field"> 

<div class="panel panel-default"> 

<div class="panel-heading" id="item-12" role="tab" style="background-color:#eef1f4;"> <h5 class="panel-title" style="text-align: left;font-size:12px;"><a aria-controls="content-item-12" aria-expanded="true" data-parent="#accordion-1" data-toggle="collapse" href="#content-item-12" role="button"> <?php echo $status; ?> </a></h5>
</div> 

<div aria-labelledby="item-12" class="panel-collapse collapse" id="content-item-12" role="tabpanel"> 

<div class="panel-body" style="background-color:#eef1f4;"> 
<select class="form-control" id="email24" name="status" value="<?php echo $status; ?>" style="color:#999;" required> 

<option value="Selected None">Please select status *</option> 

<option value="Subscribed">Subscribed</option> 

<option value="Not Subscribed">Not Subscribed</option> 
</select> 
</div> 
</div> 
</div> 
</div> </br> 
<input name="submit_btn" class="knob knob-data" type="submit" style="background-color:#ff7a59;" value="Submit" /> 
<input type="reset" class="knob knob-data" style="background-color:#3A5580;" value="Reset" /> 
</form> <?php } ?> 
</div> 
</div> 
</div> 
</div> 
</body> 
<script> $("form").submit(function(e) { var ref = $(this).find("[required]"); $(ref).each(function() { if ($(this).val() == '') { alert("Please fill out this field"); $(this).focus(); e.preventDefault(); return false; } }); return true; }); 
</script></br> <center> <img src="../img/rsb.png" alt="myw3schools.com" > </center></br> </br></br> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div> 
</div>
<div class="property-content-divider">
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

<div class="suggareas"> 

<p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> 
</div> 

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
<script type='text/javascript' src='../js/output.min1.js'>
</script> 
<script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } }); 
</script> 
<script src="../js/gtag.js?id=UA-131555544-1">
</script> 
<script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1'); 
</script>
</body>
</html>