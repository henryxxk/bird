<?php

/**
 *  Curl 封装类
 *  @author henry@juzili.com
 *  @version v1.0
 */
 
class CurlObj{
    protected $ttl = 0;
     
    protected $port = "";
     
    protected $options = array();
     
    protected $ch = null;
     
    function __construct($url){
        $this->ch = curl_init();
    }
     
    public function get($url){
        curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->ttl);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_URL, $url);
        
        $ret = curl_exec($this->ch);
        
        return $ret;
    }
    
    public function post($url, $data){
        curl_setopt($this->ch, CURLOPT_POST, 1);
        curl_setopt($this->ch, CURLOPT_TIMEOUT, $this->ttl);
        curl_setopt($this->ch, CURLOPT_HEADER, false);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($this->ch, CURLOPT_URL, $url);
        
        $ret = curl_exec($this->ch);
        
        return $ret;
    }
}
