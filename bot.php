<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
//$chat_id = $update["message"]["chat"]["id"];
//$message = $update["message"]["text"];
$message_id = $update["result"]["channel_post"]["message_id"];
$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";

function edit_message($message_id){
	  //$token = "5395119875:AAG1OSy4z_vpD4-fQySYNneoTfVrUHOTAFw";
        file_get_contents("https://api.telegram.org/bot5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU/editMessageCaption?chat_id=@mood4it&message_id=$message_id&caption=@mood4it");
    }


edit_message($message_id);


?>
