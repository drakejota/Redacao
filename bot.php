<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);
ini_set('default_charset', 'utf-8');

//define('Root',$_ENV['OPENSHIFT_HOMEDIR']);
//define('mainDir',Root.'app-root/runtime/repo/');

include('./funcoes/documento.php');
include('./funcoes/documento.php');
include('./funcoes/documento.php');
include('./funcoes/documento.php');
include('./funcoes/documento.php');
include('./funcoes/documento.php');

http_response_code(200);
/*//em caso de manutenção
if($msg['chatID']!='149280605'){
	enviaM($msg['chatID'],stringResp(18)[1],keyboardDados(1));
	//enviaM($msg['chatID'],'lat: '.$msg['lat']."\nlong: ".$msg['lat']."\ntxt: ".$msg['rpl']);
	return 0;
}
*/
$msg = traduzM();
if($msg['chatID']){
	//ob_start();
	//var_dump($msg);
	//$res = ob_get_clean();
	//file_put_contents("teste.txt",$res,FILE_APPEND);
	respondeCallback($msg['callbackID']);
	$argBotao = explode(';',$msg['texto']);
	if($argBotao[0]==voltar){
		if(strlen($argBotao[1])>2){
			echo("\n---------TESTE01-------\n".($argBotao[1]==inSub_l16));
			botaoVoltar($msg['chatID'],$argBotao[1],$msg['msgID'],$msg['fName']);
			@botAnalytics($msg['conteudo'],$msg['chatID'],"Botao Voltar - ".$argBotao[1]);
		}else{
			enviaM($msg['chatID'],stringResp(msgInicial,$msg['fName']),keyboardDados(1),"HTML",null,null);
		}
	}else if($msg['texto']==b5){
		//Caso especifico da funcao enviaM -- Botao 'Sobre'
		@botAnalytics($msg['conteudo'],$msg['chatID'],b5);
		$kb[0][] = array('text'=>inSub_l12,'callback_data'=>inSub_l12,'url'=>urlencode('https://telegram.me/aprender'));
		$kb[1][] = array('text'=>voltar,'callback_data'=>voltar);
		$final = json_encode(array("inline_keyboard"=>$kb));
		enviaM($msg['chatID'],stringResp($msg['texto'],$msg['fName']),keyboardDados(1),"HTML",$final,$msg['msgID'],false);
	}else if($msg['texto']==prox8){
		@botAnalytics($msg['conteudo'],$msg['chatID'],prox8);
		$kb[0][] = array('text'=>proxFinal,'url'=>urlencode('http://t.me/redacoesbot'));
		$kb[1][] = array('text'=>voltar,'callback_data'=>voltar);
		$final = json_encode(array("inline_keyboard"=>$kb));
		enviaM($msg['chatID'],stringResp($msg['texto'],$msg['fName']),null,"HTML",$final,$msg['msgID'],false);
	}else if($msg['texto']==inSub_l12){
		@botAnalytics($msg['conteudo'],$msg['chatID'],inSub_l12);
		//do nothing
	}else{
		@botAnalytics($msg['conteudo'],$msg['chatID'],stringResp($msg['texto'],$msg['fName'],1));
		enviaM($msg['chatID'],stringResp($msg['texto'],$msg['fName']),keyboardDados(1),"HTML",inlineCorresp($msg['texto']),$msg['msgID'],true,$msg['texto']);
	}
}else{
	return 0;
	//do nothing
}