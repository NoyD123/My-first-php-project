<?php
/*Noy and Aline*/

    require_once("home.html");
    $tpl=file_get_contents("mail.eml");//תקרא מקובץ
    if(isset($_POST['sendTo'])&&isset($_POST['subject'])&& isset($_POST['message'])&&strlen($_POST['sendTo'])>4)
	{
        $to      = $_POST['sendTo'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];
        $headers = 'From: Aline,noy,shai,eliya'."\r\n".'X-Mailer: PHP/'.phpversion();
        $mail=$tpl;		
		$mail=strtr($mail,array("{TO}"=> $to,"{TEXT}"=> $message));//מחליף טקסט בטקסט אחר
		list($head,$body)=preg_split("/\r?\n\r?\n/s",$mail,2);
		mail($to,$subject,$message,$headers);
    }
?>
<!-- Form for input -->
<br><pre>Send Mail</pre>
<br>
<form action="" method="post">

    To &#160;<input type="text" name="sendTo" placeholder="m@gmail.com"><br><br>
    <br><br>
    Subject &#160;<input type="text" name="subject" placeholder="some subject"><br><br>
    <p>Message</p><br>
    <textarea name="message" cols="40" rows="5" placeholder="Enter Message Here"></textarea><br><br>
    <br><input type="submit" value="Send">
</form> 
<br>
<br>