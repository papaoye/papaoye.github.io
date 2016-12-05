<?php
$to = "success@papoye.com";
$subject = $_REQUEST['subject'];
$txt = $_REQUEST['message'];
$headers = "From: success@papoye.com" . "\r\n" .
"CC: success@papoye.com";




$res=mail($to,$subject,$txt,$headers);



header('Location: http://papoye.com);



?>