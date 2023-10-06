<<?php 
$bot_id = "5812175895:AAFqFU_OlBr6R3BZkxDy21e_jawXg1pr5AM"; 


$bot_url = "https://api.telegram.org/$bot_id/";

function kirim_pesan($chat_id,$text){
	global $bot_url;

	$text_fix = urldecode($text);
	file_get_contents($bot_url."sendMessage?chat_id=$chat_id&text=
$text_fix");
}

kirim_pesan("2108777082","tes tes tes");

 ?>