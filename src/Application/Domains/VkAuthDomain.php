<?php


namespace Sandbox\Application\Domains;


class VkAuthDomain
{
    private $_appId;
    private $_redirectUri;
    private $_clientSecret;

    public function __construct(){
        $this->_appId = 7685290;
        $this->_redirectUri = 'http://helle-sonne.com/vk';
        $this->_clientSecret = 'rlzhWg8oBkD6S9S8AaIP';
        $a = "https://oauth.vk.com/authorize?client_id=7685290&display=page&redirect_uri=http://helle-sonne.com/vk&response_type=code";
    }

    /**
     * Получить токен код по которому будет отрабатывать Vk OAuth
     *
     * @return mixed|null
     */
    private function getCode(){
        return $_GET['code'] ?: null;
    }

    public function getToken(){
        $code = $this->getCode();
        $get_token = file_get_contents("https://oauth.vk.com/access_token?client_id=.$this->_appId.&display=page&redirect_uri=.$this->_redirectUri.&client_secret=.$this->_clientSecret.&code=".$code);
        return $get_token ?: null;
    }

    public function f(){
        $get_token = $this->getToken();
        $token = json_decode($get_token, true);
        $user_id = $token['user_id'];
        $access_token = $token['access_token'];

    }

}