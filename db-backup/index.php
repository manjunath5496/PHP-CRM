<?php

if (!session_id() && !headers_sent()) {
   session_start();
}  

$connect = new PDO("mysql:host=localhost;dbname=mywschoo_db", "root", "");
$get_all_table_query = "SHOW TABLES";
$statement = $connect->prepare($get_all_table_query);
$statement->execute();
$result = $statement->fetchAll();

if(isset($_POST['table']))
{
 $output = '';
 foreach($_POST["table"] as $table)
 {
  $show_table_query = "SHOW CREATE TABLE " . $table . "";
  $statement = $connect->prepare($show_table_query);
  $statement->execute();
  $show_table_result = $statement->fetchAll();

  foreach($show_table_result as $show_table_row)
  {
   $output .= "\n\n" . $show_table_row["Create Table"] . ";\n\n";
  }
  $select_query = "SELECT * FROM " . $table . "";
  $statement = $connect->prepare($select_query);
  $statement->execute();
  $total_row = $statement->rowCount();

  for($count=0; $count<$total_row; $count++)
  {
   $single_result = $statement->fetch(PDO::FETCH_ASSOC);
   $table_column_array = array_keys($single_result);
   $table_value_array = array_values($single_result);
   $output .= "\nINSERT INTO $table (";
   $output .= "" . implode(", ", $table_column_array) . ") VALUES (";
   $output .= "'" . implode("','", $table_value_array) . "');\n";
  }
 }
 $file_name = 'database_backup_on_' . date('y-m-d') . '.sql';
 $file_handle = fopen($file_name, 'w+');
 fwrite($file_handle, $output);
 fclose($file_handle);
 header('Content-Description: File Transfer');
 header('Content-Type: application/octet-stream');
 header('Content-Disposition: attachment; filename=' . basename($file_name));
 header('Content-Transfer-Encoding: binary');
 header('Expires: 0');
 header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file_name));
    ob_clean();
    flush();
    readfile($file_name);
    unlink($file_name);
}

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#" class="loading"><head profile="http://gmpg.org/xfn/11"> <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" /> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <link rel="shortcut icon" href="../img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Database Backup | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /> <style> .boxed { margin-top: 1em; margin-bottom: 1em; border: 1px solid #eddab7; padding: 1ex 1em; } .shaded { color: inherit; background-color: #f5ecdb; } </style> <link rel='stylesheet' id='google-fonts-css' href='../css/font.css' type='text/css' media='all' /> <link rel='stylesheet' id='font-awesome-min-css' href='../css/font-awesome.min.css' type='text/css' media='screen' /> <link rel='stylesheet' id='transform-css' href='../css/transform.css' type='text/css' media='screen' /> <link rel='stylesheet' id='input-css' href='../css/input.css' type='text/css' media='screen' /> <script type="text/javascript" src="../js/output.min.js"></script><script> var html = document.getElementsByTagName('html')[0]; var removeLoading = function() { setTimeout(function() { html.className = html.className.replace(/loading/, ''); }, 3000); }; removeLoading(); </script></head><body itemtype="http://schema.org/WebPage" itemscope="itemscope" class="page-template-default page page-id-497 page-child parent-pageid-490 u-design-responsive-on u-design-menu-auto-arrows-on u-design-menu-drop-shadows-on "> <div id="cover-1"> <div class="clear"></div> <header id="" class="top-segment trans-content-white" style="background-color:white; height:45px"> <div id="" class="bag over-all-nav"> <div class="leftnavi navbar"> <div class="nav-collapse"> <ul class="nav"> <li class="dropdown active"> <a class="pointer" class="dropdown-knob pointer" style=" text-decoration:none; font-weight: bold; color:gray; font-size:13px;margin-top: -10px;"><span class="bari"><i class="fa fa-bars"></i></span> <span class="stripnav dark-xl">&nbsp;&nbsp;</span></a> </br> <ul class="dropdown-menu" role="menu"> <li> <a class="pointer" href="../mail" title="Email">Email</a> </li> <li><a class="pointer" href="../email-marketing" title="Email Marketing">Email Marketing</a></li> <li> <a class="pointer" href="../bulk_mail/index" title="Bulk Email">Bulk Email</a> </li> </ul> </li> </ul> </div> </div> <nav id="rightnav " class="position-navi"> <div class="user-nav"> <a class="pointer" style="color:gray; font-weight: bold; font-size:12px;" href="../home" title="Home">HOME</a> &nbsp; &nbsp; <a class="pointer" href="../subscriptions/index" title="Subscriptions"><span style="padding:5px 10px; text-decoration:none; background-color:transparent;font-weight: bold; border:1px solid white; color:gray; font-size:12px;">SUBSCRIPTIONS</span> </a> &nbsp; &nbsp; <a class="pointer" href="../logout" title="Logout"><span style="padding:5px 10px; text-decoration:none; background-color:#3A5580; font-weight: bold; border:1px solid #3A5580; color:white; font-size:12px;">LOGOUT</span> </a> &nbsp; &nbsp;</div> </nav> </div> </header> <div id="former-text"> <div id="former-text-list" class="bag_24"> <div class="property-content-divider"></div> <div id='before-cont-box-1' class='column_3_of_3 home-cont-box'> <div class='list-text-cover'> <div class="cont_col_1 widget_text secondary_object_category"> <div class="textwidget"> <p style="color:black; text-align:center; font-size:20px;"> </p> <div class="drop-accordion"> <h5 class="panel-title" id="contact-form" style="text-align: left; ">&nbsp;&nbsp;&nbsp;</h5></br> <div style="text-align:right"> <canvas id="canvas" width="200" height="200"></canvas> <script> var canvas = document.getElementById("canvas"); var ctx = canvas.getContext("2d"); var radius = 100; ctx.translate(100, 100); radius = radius * 0.9; setInterval(drawClock, 1000); function drawClock() { drawFace(ctx, radius); drawNumbers(ctx, radius); drawTime(ctx, radius); } function drawFace(ctx, radius) { var grad; ctx.beginPath(); ctx.arc(0, 0, radius, 0, 2 * Math.PI); ctx.fillStyle = 'white'; ctx.fill(); grad = ctx.createRadialGradient(0, 0, radius * 0.95, 0, 0, radius * 1.05); grad.addColorStop(0, '#67D2C8'); grad.addColorStop(0.5, '#67D2C8'); grad.addColorStop(1, 'white'); ctx.strokeStyle = grad; ctx.lineWidth = radius * 0.1; ctx.stroke(); ctx.beginPath(); ctx.arc(0, 0, radius * 0.1, 0, 2 * Math.PI); ctx.fillStyle = 'black'; ctx.fill(); } function drawNumbers(ctx, radius) { var ang; var num; ctx.font = radius * 0.15 + "px arial"; ctx.textBaseline = "middle"; ctx.textAlign = "center"; for (num = 1; num < 13; num++) { ang = num * Math.PI / 6; ctx.rotate(ang); ctx.translate(0, -radius * 0.85); ctx.rotate(-ang); ctx.fillText(num.toString(), 0, 0); ctx.rotate(ang); ctx.translate(0, radius * 0.85); ctx.rotate(-ang); } } function drawTime(ctx, radius) { var now = new Date(); var hour = now.getHours(); var minute = now.getMinutes(); var second = now.getSeconds(); hour = hour % 12; hour = (hour * Math.PI / 6) + (minute * Math.PI / (6 * 60)) + (second * Math.PI / (360 * 60)); drawHand(ctx, hour, radius * 0.5, radius * 0.07); minute = (minute * Math.PI / 30) + (second * Math.PI / (30 * 60)); drawHand(ctx, minute, radius * 0.8, radius * 0.07); second = (second * Math.PI / 30); drawHand(ctx, second, radius * 0.9, radius * 0.02); } function drawHand(ctx, pos, length, width) { ctx.beginPath(); ctx.lineWidth = width; ctx.lineCap = "rectangle"; ctx.moveTo(0, 1); ctx.rotate(pos); ctx.lineTo(0, -length); ctx.stroke(); ctx.rotate(-pos); } </script> </div> </br> </br> <div class="panel panel-default"> <div class="panel-heading" id="item-12" role="tab"> <h5 class="panel-title" style="text-align: left;"><a aria-controls="content-item-12" aria-expanded="true" data-parent="#accordion-1" data-toggle="collapse" href="#content-item-12" role="button"><i class="fa fa-angle-right" aria-hidden="true"></i> <b>Select Tables for Export</b> </a></h5></div> <div aria-labelledby="item-12" class="panel-collapse collapse" id="content-item-12" role="tabpanel"> <div class="panel-body"> <div class="container" style ="margin-left: 30px;"> <div class="row"><form method="post" id="export_form">


	<?php
    foreach($result as $table)
    {
    ?>
     <div class="checkbox">
      <label><input type="checkbox" class="checkbox_table" name="table[]" value="<?php echo $table["Tables_in_mywschoo_db"]; ?>" /> <?php echo $table["Tables_in_mywschoo_db"]; ?></label>
     </div>
    <?php
    }
    ?>
</br> 

<div class="form-group"> 
<input type="submit" name="submit" id="submit" style="padding:6px 6px;font-size:11pt;color:white;background-color:#3A5580;border:2px solid #3A5580;" class="knob knob-data" value="&nbsp;&nbsp;Export&nbsp;&nbsp;" /> <a class="knob knob-data pointer" style="padding:6px 6px;font-size:11pt;color:white;background-color:#ff7a59;border:2px solid #ff7a59;" href="../home.php" title ="Home | Admin Panel">&nbsp;&nbsp;Cancel&nbsp;&nbsp; </a> 
</div> 
</form> 
</div> 
</div>
<script>$(document).ready(function(){ $('#submit').click(function(){ var count = 0; $('.checkbox_table').each(function(){ if($(this).is(':checked')) { count = count + 1; } }); if(count > 0) { $('#export_form').submit(); } else { alert("Please Select Atleast one table for Export"); return false; } });});
</script> 
</div> </div> </div> </br> <center> <img src="../img/rsb.png" alt="myw3schools.com" > </center></br> </br></br> </div></div></div></div></div></div></div><div class="clear"></div><div class="property-content-divider"></div></div><div class="clear"></div><div class="clear"></div><div id="page-footer" style="font-size:12px;background-color:#f1f1f1;"> <div id="footer" class="bag_24 footer-head"> <div itemtype="http://schema.org/WPFooter" itemscope="itemscope"> <div id="footer-content" class="grid_20"> <div> <div class="suggareas"> <p style="text-indent:10px;text-align: justify;-moz-text-align-last: right; text-align-last: left;"> </p> </div> <div class="clear"></div> <div style="font-size:12px;color:gray;text-align:center"> Copyright &#169; 2018 myw3schools. All rights reserved. </div> </div> </div> <div class="tail-to-head"> <a class="pointer" href="#top" style="text-decoration:none"> <font color="gray"> <i class="fa fa-arrow-up" aria-hidden="true"></i> Back to Top</font> </a> </div> </div> </div></div><script type='text/javascript' src='../js/output.min1.js'></script><script> $(window).bind("pageshow", function(event) { if (event.originalEvent.persisted) { window.location.reload() } });</script><script src="../js/gtag.js?id=UA-131555544-1"></script><script> window.dataLayer = window.dataLayer || []; function gtag() { dataLayer.push(arguments); } gtag('js', new Date()); gtag('config', 'UA-131555544-1');</script></body></html>