<?php 

session_start();

if(!isset($_SESSION['UserData']['Username'])){

	header("location: ../login");

	exit;

}

?>

<!DOCTYPE html><html><head> <meta http-equiv="Content-Type" content="text/html; charset=gb18030"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /><META HTTP-EQUIV="refresh" CONTENT="4;URL=index.php" /> <meta name="expires" content="0" /> <META NAME="robots" CONTENT="noindex,nofollow" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <link rel="shortcut icon" href="http://www.static.myw3schools.com/img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title> Unable to delete </title> <meta name="distribution" content="web" /> <style type="text/css"> .py-ripple { margin: 40px auto; width: 50px; color: white; height: 40px; text-align: center; font-size: 10px; } .py-ripple .py-plane { background-color: orange; color: white; height: 100%; width: 6px; display: inline-block; -webkit-animation: py-rippleStretchDelay 1.2s infinite ease-in-out; animation: py-rippleStretchDelay 1.2s infinite ease-in-out; } .py-ripple .py-plane1 { -webkit-animation-delay: -1.2s; animation-delay: -1.2s; } .py-ripple .py-plane2 { -webkit-animation-delay: -1.1s; animation-delay: -1.1s; } .py-ripple .py-plane3 { -webkit-animation-delay: -1s; animation-delay: -1s; } .py-ripple .py-plane4 { -webkit-animation-delay: -0.9s; animation-delay: -0.9s; } .py-ripple .py-plane5 { -webkit-animation-delay: -0.8s; animation-delay: -0.8s; } @-webkit-keyframes py-rippleStretchDelay { 0%, 40%, 100% { -webkit-transform: scaleY(0.4); transform: scaleY(0.4); } 20% { -webkit-transform: scaleY(1); transform: scaleY(1); } } @keyframes py-rippleStretchDelay { 0%, 40%, 100% { -webkit-transform: scaleY(0.4); transform: scaleY(0.4); } 20% { -webkit-transform: scaleY(1); transform: scaleY(1); } } </style></head><body style="background-color: white;"> <br></br> <br></br> <br></br> <br></br> <center> <div class="py-ripple"> <div class="py-plane py-plane1"></div> <div class="py-plane py-plane2"></div> <div class="py-plane py-plane3"></div> <div class="py-plane py-plane4"></div> <div class="py-plane py-plane5"></div> </div> <p style="font-weight:bold; color:black; font-size:25px; text-align:center;"> Oops! Something went wrong. </p> <p style="font-weight:bold; color:black; font-size:15px; text-align:center;">Unable to delete. Please Try again. </p> </center> <br></br> <br></br> <br></br> <br></br></body></html>