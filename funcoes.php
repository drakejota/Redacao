<?php

//Variaveis menu
define('inSub_l1',"\xf0\x9f\x97\xaf".'| Dissertação');
define('inSub_l2',"\xf0\x9f\x97\xa3".'| Narração');
define('inSub_l3',"\xf0\x9f\x91\xa4".'| Descrição');
define('inSub_l4',olho.'| Mandamentos');
define('inSub_l5',bateria.'| Estrutura da Redação');
define('inSub_l6',lapis.'| Dicas 1000');
define('inSub_l7','🙋🏻‍♂| Defender a ideia');
define('inSub_l8','📝| Violência contra a mulher');
define('inSub_l9','📝| Intolerância Religiosa');
define('inSub_l10','📝| Operação Lei seca');
define('inSub_l11','📝| A imigração no Brasil');
define('inSub_l12','🎓 APRENDER 📚');
define('inSub_l13',"📄 A persistência da violência");
define('inSub_l14',"📄 Violência Feminina");
define('inSub_l15',"📄 Parte desfavorecida");
define('inSub_l16',"📄 Violação à dignidade feminina");
define('inSub_l17',"📄 A intolerância Religiosa");
define('inSub_l18',"📄 Xenofobia religiosa");
define('inSub_l19',"📄 Cultura preconceituosa");
define('inSub_l20',"📄 Imigração do Brasil");
define('inSub_l21',"📄 Consequências da imigração");
define('inSub_l22',"📄 A Imigração no Brasil");
define('inSub_l23',"📄 Operação Lei seca");
define('inSub_l24',"📄 Trânsito e morte");
define('inSub_l25',"📕| Construção");
define('inSub_l26',"📘| Elementos");
define('inSub_l27',"📙| Diversos");
define('inSub_l28',"📔| ENEM");
define('inSub_l29',"📝| Tipos");
define('inSub_l30',"⚡️| Gêneros");
define('inSub_l31',"⭐️| Passos");
define('inSub_l32',"Fazendo uma introdução?");
define('inSub_l33',"Desenvolvendo o texto?");
define('inSub_l34',"Concluindo a redação?");
define('inSub_l35',"⚡️ Competências");
define('inSub_l36',"🖋 Como avaliam?");
define('inSub_l37',"🔎 Como corrigem?");
define('prox1','Próximo 1⃣');
define('prox2','Próximo 2⃣');
define('prox3','Próximo 3⃣');
define('prox4','Próximo 4⃣');
define('prox5','Próximo 5⃣');
define('prox6','Próximo 6⃣');
define('prox7','Próximo 7⃣');
define('prox8','Próximo 8⃣');
define('proxFinal','📫| Ok! Enviar Redação');

define('msgInicial','/start');
define('defaultMsg','padrao');
define('voltar','⬅️ Voltar');
//



function enviaM($chatID, $msg, $kb=null,$parse=null,$inlineKb=null,$rplcID=null,$linhaCad=true,$cod=null){//envia mensagem
	if($inlineKb||$rplcID){
		$aux = ($linhaCad?linhasCadastroInlinetipo2($inlineKb,$cod):$inlineKb);

		if($rplcID){
			$sendto = API_URL."editMessageText?chat_id=".$chatID.'&message_id='.$rplcID.'&text='.urlencode($msg).($aux?'&reply_markup='.$aux:'');
		}else{
			$sendto = API_URL."sendmessage?chat_id=".$chatID."&text=".urlencode($msg).($aux?'&reply_markup='.$aux:'');
		}
	}else if ($kb!= null){
		$sendto =API_URL."sendmessage?chat_id=".$chatID."&text=".urlencode($msg).'&reply_markup='.$kb;
	}
	else{$sendto =API_URL."sendmessage?chat_id=".$chatID."&text=".urlencode($msg);}
    if($parse!=null){$sendto = $sendto.'&parse_mode='.$parse;}
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
    curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,10);
    curl_setopt($ch, CURLOPT_TIMEOUT, 20);
    curl_setopt($ch, CURLOPT_URL, $sendto);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);     
	curl_setopt($ch, CURLOPT_MAXREDIRS,0);
    $data = curl_exec($ch);
    curl_close($ch);
	//file_put_contents("retorno.txt","\nurl: ".$sendto,FILE_APPEND);
	echo($sendto);
    return $data;
}
function respondeCallback($cbID){
	if($cbID){
		$sendto = API_URL."answerCallbackQuery?callback_query_id=".$cbID.'&show_alert=1';
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_AUTOREFERER, 0);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 0);
		curl_setopt($ch,CURLOPT_CONNECTTIMEOUT,3);
		curl_setopt($ch, CURLOPT_TIMEOUT, 5);
		curl_setopt($ch, CURLOPT_URL, $sendto);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);     
		curl_setopt($ch, CURLOPT_MAXREDIRS,0);
		curl_exec($ch);
		curl_close($ch);
	}
}
function traduzM(){//Recebe uma msg do telegram e devolve vetor com dados
	$content = file_get_contents("php://input");
	$update = json_decode($content, true);
	$chatID = null;
	$lat = null;
	$long = null;
	$rpl = null;
	$text = null;
	$firstName = null;
	$userName = null;
	$cbID = null;
	$msgID = null;
	if(is_array($update)){
		if(array_key_exists("callback_query",$update)){
			if(array_key_exists("id",$update["callback_query"])){
				$chatID = $update["callback_query"]["from"]["id"];
			}
			if(array_key_exists("from",$update["callback_query"])){
				$firstName = $update["callback_query"]["from"]["first_name"];
			}
			if(array_key_exists("username",$update["callback_query"])){
				$userName = $update["callback_query"]["username"];
			}
			if(array_key_exists("data",$update["callback_query"])){
				$text = $update["callback_query"]["data"];
			}
			if(array_key_exists("id",$update["callback_query"])){
				$cbID = $update["callback_query"]["id"];
			}
			if(array_key_exists("message",$update["callback_query"])){
				$msgID = $update["callback_query"]["message"]["message_id"];
			}
		}else{
			if(array_key_exists("chat",$update["message"])){
				$chatID = $update["message"]["chat"]["id"];
			}
			if(array_key_exists("text",$update["message"])){
				$text = $update["message"]["text"];
			}
			if(array_key_exists("username",$update["message"]["chat"])){//key_exists("username",$update["message"]["chat"])){
				$userName = $update["message"]["chat"]["username"];
			}else{
				$userName = "";
			}
			if(array_key_exists("location",$update["message"])){
				$lat  = $update['message']['location']['latitude'];
				$long = $update['message']['location']['longitude'];
			}
			if(array_key_exists('reply_to_message',$update["message"])){
				$rpl = $update['message']['reply_to_message']['text'];
			}
			@$firstName = $update['message']['chat']['first_name'];
		}
	}
	return array('conteudo'=> $content,'chatID'=> $chatID,'texto'=> $text, 'userName' => $userName, 'fName' => $firstName,'lat'=>$lat,'long'=>$long,'rpl'=>$rpl,'callbackID'=>$cbID,'msgID'=>$msgID);
}
function verificaMensagem($valor){
	$valor = trim($valor);
	$mensagens = array(
		array('/inicio','Início','Inicio'),
		array(b1),
		array(b2),
		array(b3),
		array(b4),
		array(b5)
	);
	$tam = count($mensagens);
	for($i=0;$i<$tam;$i++){
		$size = count($mensagens[$i]);
		for($j=0;$j<$size;$j++){
			if($mensagens[$i][$j] == $valor) {
	  			return $i;
	  		}
		}
	}
	return -1;
}
function botaoVoltar($chatID,$msg,$msgID=null,$fname=null){
	/*recebe o calback do botao voltar
		0 / qualquer outro - voltar ao inicio
		1 - voltar ao b1
	*/
	$arr = array(
		1=>array(inSub_l9,inSub_l10,inSub_l11,inSub_l13,
				inSub_l14,inSub_l15,inSub_l16,
				inSub_l17,inSub_l18,inSub_l19,
				inSub_l20,inSub_l21,inSub_l22,
				inSub_l23,inSub_l24),
		2=>array(inSub_l25,inSub_l26,inSub_l27,inSub_l28,
				inSub_l29,inSub_l30,inSub_l31,inSub_l32,
				inSub_l33,inSub_l34,inSub_l35,inSub_l36,inSub_l37)//volta para o b1
		);
	$cod = null;
	foreach($arr as $row => $innerArray){
		foreach($innerArray as $innerRow => $value){
			if($value == $msg){
				$cod = $row;
			}
		}
	}

	switch ($cod) {
		case 1:
			//echo("\n---------TESTE02-------\n".$cod);
			enviaM($chatID,stringResp(b3),null,"HTML",inlineCorresp(b3),$msgID);
			break;
		case 2:
			enviaM($chatID,stringResp(b1),null,"HTML",inlineCorresp(b1),$msgID);
			break;
		default:
			enviaM($chatID,stringResp(msgInicial,$fname),keyboardDados(1),"HTML",null,null);
			break;
	}
}