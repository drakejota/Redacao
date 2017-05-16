<?php 	 
 

function botAnalytics($contentMessage,$chatID,$passo){
	$token = '3rzgjjqFqkQmz3_QHdtd6YysGeg_F422';
	global $msg;
	$botan = new Botan($token);
	$update = json_decode($msg['conteudo'], true);
	//file_put_contents("analyticsteste.txt",$update,FILE_APPEND);
    (array_key_exists('message',$update)?$botan->track($update['message'],$chatID, $passo):$botan->track($update['callback_query']['message'],$chatID, $passo));
    return 0;	
}