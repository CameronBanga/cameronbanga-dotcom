<?php
if(isset($_POST['email'])){
		$mailTo = "cameronbanga@gmail.com";
		$subject = "Email from CameronBanga.com";
		$body = "New message from CameronBanga.com
<br><br>
FROM: ".$_POST['email']."<br>
NAME: ".$_POST['author']."<br>
COMMENTS: ".$_POST['message']."<br>";	
		$headers = "To: Cameron <".$mailTo.">\r\n";
		$headers .= "From: ".$_POST['author']." <".$_POST['email'].">\r\n";
		$headers .= "Content-Type: text/html";
		//envio destinatario
		$mail_success =  mail($mailTo, utf8_decode($subject), utf8_decode($body), $headers);		
}
?>  