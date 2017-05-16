<?php

define('smileEmoji', "\xf0\x9f\x98\x84");
define('infoIcon',"\xe2\x84\xb9\xef\xb8\x8f");
define('brazilFlag', "\xf0\x9f\x87\xa7\xf0\x9f\x87\xb7");
define('hashEmoji',"\x23\xe2\x83\xa3");
define('blueDiamond',"\xf0\x9f\x94\xb9");
define('speechIcon', "\xf0\x9f\x92\xac");
define('heavyMinus',"\xe2\x9e\x96");
define('megafone',"\xf0\x9f\x93\xa2");
define('robot',"\xf0\x9f\xa4\x96");
define('cpyRght',"\xc2\xa9");
define('alfinete',"\xf0\x9f\x93\x8c");
define('postbox',"\xf0\x9f\x93\xae");
define('pastaEmoji',"\xf0\x9f\x97\x82");
define('booksEmoji',"\xf0\x9f\x93\x9a");
define('voltarEmoji',"\xe2\xac\x85\xef\xb8\x8f");
define('lampEmoji',"\xf0\x9f\x92\xa1");
define('cadernoEmoji',"\xf0\x9f\x93\x9d");
define('dado',"\xf0\x9f\x8e\xb2");
define('lapis',"\xe2\x9c\x8f\xef\xb8\x8f");
define('caixaMsg',"\xf0\x9f\x93\xae");
define('lupa',"\xf0\x9f\x94\x8e");
define('emojiPiscando',"\xf0\x9f\x98\x89");
define('chapelUn',"\xf0\x9f\x8e\x93");
define('olho',"\xf0\x9f\x91\x81");
define('bateria',"\xf0\x9f\x94\x8b");
define('pessoaMaos',"\xf0\x9f\x99\x8b\xf0\x9f\x8f\xbb");
define('flag',"\xf0\x9f\x94\xb0");
//---botoes
//define('b1',cadernoEmoji." Tipos de Redação ".cadernoEmoji);
define('b1',"📝 MENU 📝");
define('b2',dado." Dicas ".dado);
define('b3',lapis." Redações");
//define('b4',caixaMsg."Suporte");
//define('b5',lupa."Sobre");
define('b4','/contato');
define('b5','/sobre');
define('b6','📮| ENVIAR REDAÇÃO');

function montaKbDados($arr){
	//recebe um array e monta um keyboard 
	return json_encode(retornaKeyboard($arr));
}
function linhasCadastroInlinetipo2($arr,$cod=null){
	$maxItemLinha = 0;//+1
	$i = 0;
	$ct = 0;
	$arrAux = null;
	if((array) $arr !== $arr){
		//não é array
		return null;
	}else{
		foreach($arr as $row => $innerArray){
			if((array) $innerArray !== $innerArray){
				if($i>$maxItemLinha){
					$ct++;
					$i=1;
					$arrAux[$ct][] = array('text'=>$innerArray,'callback_data'=> $innerArray);
				}else{
					$arrAux[$ct][] = array('text'=>$innerArray,'callback_data'=> $innerArray);
					$i++;
				}
			}else{
				foreach($innerArray as $innerRow => $value){
					if($i>$maxItemLinha){
						$ct++;
						$i=1;
						$arrAux[$ct][] = array('text'=>$value,'callback_data'=> $value);
					}else{
						$arrAux[$ct][] = array('text'=>$value,'callback_data'=> $value);
						$i++;
					}
				}

			}			
		}
	}
	$ct++;
	$arrAux[$ct][] = array('text'=>voltar,'callback_data'=> voltar.($cod?';'.$cod:''));
	
	return json_encode(array("inline_keyboard"=>$arrAux));
}
function linhasCadastroInline($arr){
	$maxItemLinha = 0;//+1
	$i = 0;
	$ct = 0;
	$arrAux = null;
	if(!empty($arr[0])){
		foreach($arr as $value){
			if($i>$maxItemLinha){
				$ct++;
				$i=1;
				$arrAux[$ct][] = array('text'=>$value,'callback_data'=> $value);
			}else{
				$arrAux[$ct][] = array('text'=>$value,'callback_data'=> $value);
				$i++;
			}
		}
	}
	return json_encode(array("inline_keyboard"=>$arrAux));
}
function rplcMessage($msgID,$text,$parse,$kb=null){
	if($kb){
		return json_encode(array('message_id'=>$msgID,'text'=>$text,'parse_mode'=>$parse,'reply_markup'=>$kb));
	}else{
		return json_encode(array('message_id'=>$msgID,'text'=>$text,'parse_mode'=>$parse));
	}
}
function keyboardDados($indice,$hide=true){
	$str = array();
	$tipo = 0;
	switch ($indice) {
		case 1: //Mensagem inicial
			$str[0][0] = b1;
			$str[1][0] = b2;
			$str[1][1] = b3;
			$str[2][0] = b6;
			break;
		default:
			break;
	}
	if($tipo){//caso de InlineKeyboardButton
		return json_encode(retornaInlineKeyboardButton($str));
	}else{
		return json_encode(array('keyboard' => $str,'resize_keyboard'=>true,'one_time_keyboard'=>true,'hide_keyboard'=>$hide));
	}
}
function retornaKeyboard($arr){
	$maxItemLinha = 1;//+1
	$i = 0;
	$ct = 0;
	foreach($arr as $value){
		if($i>$maxItemLinha){
			$ct++;
			$i=1;
			$arrAux[$ct][] = $value;
		}else{
			$arrAux[$ct][] = $value;
			$i++;	
		}
		
	}
	return array('keyboard' => $arrAux,'resize_keyboard'=>true,'one_time_keyboard'=>true,'hide_keyboard'=>true); 
}
function retornaInlineKeyboardButton($arr){
	return array("inline_keyboard"=> array($arr));
}
function botaoVoltarRetornaInline($cod){
	$str = array();
	$tipo = 0;
	switch ($indice) {
		case 1: //Mensagem inicial
			$str[0][0] = b1;
			$str[1][0] = b2;
			$str[1][1] = b3;
			$str[2][0] = b4;
			$str[2][1] = b5;
			break;
		default:
			break;
	}
	if($tipo){//caso de InlineKeyboardButton
		return json_encode(retornaInlineKeyboardButton($str));
	}else{
		return json_encode(array('keyboard' => $str,'resize_keyboard'=>true,'one_time_keyboard'=>true,'hide_keyboard'=>$hide));
	}

}