<?php

//namespace YourProject;

/**
 * Class Botan
 * @package YourProject
 *
 * Usage:
 *
 * private $token = 'token';
 *
 * public function _incomingMessage($message_json) {
 *     $messageObj = json_decode($message_json, true);
 *     $messageData = $messageObj['message'];
 *
 *     $botan = new YourProject\Botan($this->token);
 *     $botan->track($messageData, 'Start');
 * }
 *
 */

class Botan {

    /**
     * @var string Tracker url
     */
    protected $template_uri = 'https://api.botan.io/track?token=#TOKEN&uid=#UID&name=#NAME';

    /**
     * @var string Url shortener url
     */
    protected $shortener_uri = 'https://api.botan.io/s/?token=#TOKEN&user_ids=#UID&url=#URL';

    /**
     * @var string Yandex AppMetrica application api_key
     */
    protected $token;

    function __construct($token) {
        if (empty($token) || !is_string($token)) {
            throw new \Exception('Token should be a string', 2);
        }
        $this->token = $token;
    }

    public function track($message,$chatID, $event_name = 'Message') {
        $uid = $chatID;
        $url = str_replace(
            ['#TOKEN', '#UID', '#NAME'],
            [$this->token, $uid, urlencode($event_name)],
            $this->template_uri
        );
        $result = $this->request($url, $message);
        if (!$result) {
            ob_start();
            echo('\n------------\n'.$_SERVER['REQUEST_TIME'].'Erro na funcao tracking\n');
            var_dump($result);
            echo("\n-------------------\n");
            var_dump($url);
            $result = ob_get_clean();
            file_put_contents("analyticsErro.txt",$result,FILE_APPEND);
        }
        return $result;
    }

    public function shortenUrl($url, $user_id) {
        $request_url = str_replace(
            ['#TOKEN', '#UID', '#URL'],
            [$this->token, $user_id, urlencode($url)],
            $this->shortener_uri
        );
        $response = file_get_contents($request_url);
        return $response === false ? $url : $response;
    }

    function getHTTPResponseCode($headers){
        $matches = [];
        $res = preg_match_all('/[\w]+\/\d+\.\d+ (\d+) [\w]+/', $headers[0], $matches);
        if ($res < 1)
        	throw new \Exception('Incorrect response headers');
        $code = intval($matches[1][0]);
        return $code;
    }

    protected function request($url, $body) {
        $ch = curl_init();//  open connection
        curl_setopt($ch, CURLOPT_URL, $url);//  set the url
        curl_setopt($ch, CURLOPT_POST, count($body));//  number of POST vars
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($body));//  POST data
        curl_setopt($ch, CURLOPT_TIMEOUT, 10);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);//  To display result of curl
        $result = curl_exec($ch);//  execute post
        curl_close($ch);
        file_put_contents("botan_teste.txt",$url."\n",FILE_APPEND);
        return $result;
    }

}
