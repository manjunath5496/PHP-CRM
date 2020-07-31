<?php

 

session_start();



if(!isset($_SESSION['UserData']['Username'])){

	header("location:../login");

	exit;

}

?>   

      

  

       <?php

	  error_reporting(0);

        // Include PHPMailerAutoload.php library file

        include("lib/PHPMailerAutoload.php");

        $email_sub = "";

        $msg = "";

        $user_list = array();

        $status = array();

        $file_path = "";

        

        // Retrieving & storing user's submitted information

        if (isset($_POST['user_list'])) {

            $user_list = json_decode($_POST['user_list']);

        }

        if (isset($_POST['email_sub'])) {

            $email_sub = $_POST['email_sub'];

        }

        if (isset($_POST['box_msg'])) {

            $msg = $_POST['box_msg'];

        }

        if (isset($_POST['uploaded_file_path'])) {

            $file_path = $_POST['uploaded_file_path'];

        }

        

        // Sending personalized email 

        foreach ($user_list as $list) {

            $receiver_name = "";

            $receiver_add = "";

            $per_msg = "";

            $per_email_sub = "";

            $receiver_name = $list[0];

            $receiver_add = $list[1];

            

            // Replacing {user} with client name from subject and message

            $per_msg = str_replace("{user}", $receiver_name, $msg);

            $per_email_sub = str_replace("{user}", $receiver_name, $email_sub);



            $mail = new PHPMailer();

            $mail->IsSMTP();

            $mail->Mailer = "smtp";

            $mail->Host = "mail.myw3schools.com";

            $mail->Port = 465;



            // Enable SMTP authentication

            $mail->SMTPAuth = true;



            // SMTP username

            $mail->Username = 'info@myw3schools.com';



            // SMTP password

            $mail->Password = 'myw3schools@123';



            // Enable encryption, 'tls' also accepted

            $mail->SMTPSecure = 'ssl';



            // Sender Email address

            $mail->From = 'info@myw3schools.com';



            // Sender name

            $mail->FromName = "MyW3schools.com";



            // Receiver Email address

            $mail->addAddress($receiver_add);



            $mail->Subject = $per_email_sub;

            $mail->Body = $per_msg;

            $mail->WordWrap = 50;



            // Sending message and storing status

            if (!$mail->send()) {

                $status[$receiver_add] = False;

            } else {

                $status[$receiver_add] = TRUE;

            }

        }

        ?>





<?php

  $dir = 'uploads'; 

  

  if (count(glob("$dir/*")) === 0)

  

  { 

      

      echo '<meta http-equiv="refresh" content="0;url=index.php" />'; 

    

  }

  

  

 

?>

<!DOCTYPE html><html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" prefix="og: http://ogp.me/ns#" class="loading"><head profile="http://gmpg.org/xfn/11"><meta http-equiv="Content-Type" content="text/html; charset=utf-8"> <meta http-equiv="X-UA-Compatible" content="IE=9" /> <meta name="format-detection" content="telephone=no" /> <meta HTTP-EQUIV="CACHE-CONTROL" CONTENT="NO-CACHE" /> <meta http-equiv="cache-control" content="no-store" /> <meta http-equiv="X-UA-Compatible" content="IE=edge" /> <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" /> <meta name="author" content="MyW3schools" /> <meta property="og:site_name" content="MyW3schools | internet's best source for free eBook downloads" /> <meta property="og:locale" content="en_GB" /> <meta property="og:type" content="website" /> <meta property="og:title" content="MyW3schools | internet's best source for free eBook downloads." /> <meta name="robots" content="noindex,nofollow" /> <link rel="shortcut icon" href="../img/logo.png" alt="The internet's best source for free eBook downloads" title="MyW3schools Logo" /> <title>Email Status | MyW3schools.com | Download Fiction, Health, Romance and many more ebooks for Free: any where, anytime!</title> <meta name="distribution" content="web" /><link rel="stylesheet" href="../css/display.css"> <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700|Source+Serif+Pro:700" rel="stylesheet"> <script> var html = document.getElementsByTagName('html')[0]; var removeLoading = function() { setTimeout(function() { html.className = html.className.replace(/loading/, ''); }, 3000); }; removeLoading(); </script></head><body> <main> <div class="container--lg pt1 pb1"> <div class="grid-row grid-row--center"> <div class="grid-column mt3 mb2"> <img src="../img/ms8.png" alt="Empower Your Jewish Journey"> </div> <div class="grid-column span-1"></div> <div class="grid-column mt3 mb2"> <div class="border--bottom pb2 mb2"> 

<p><?php foreach ($status as $user => $sent_status) { if ($sent_status == True) { $img = "</br>&nbsp;

<span style='font-size:15px; color:#3CB371'>&check;
</span>"; } else { $img = "</br>&nbsp;

<span style='font-size:15px; color:red'>&times;
</span>"; } echo "$img" . $user; } unlink($file_path); echo '
<meta http-equiv="refresh" content="6;url=index.php" />'; ?> </p> 
</div> <span></span> </div> </div> </div> </main></body></html>





