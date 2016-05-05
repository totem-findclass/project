<?php

class ServiceCurl
{
    protected $_url;
    protected $_query;
    protected $_status;
    protected $_result;

    /**
     * @parans Array de parâmetros array('foo'=>'bar');
     */
    function __construct($url, array $parans)
    {
        $this->_url = $url;
        $this->_query = $parans == "" ? $parans: '?'.http_build_query($parans);
    }



    public function executeCurl()
    {
        $initCurl = curl_init();
        curl_setopt($initCurl, CURLOPT_URL, $this->_url.$this->_query);
        curl_setopt($initCurl, CURLOPT_RETURNTRANSFER, true);
        $this->_result = curl_exec($initCurl);
        $this->_status = curl_getinfo($initCurl, CURLINFO_HTTP_CODE);
        curl_close($initCurl);
    }


    public function getResult()
    {
        return $this->_result;
    }
    
    public function getResultAsArray()
    {
        return json_decode($this->_result, true);
    }

    public function getResultAsObject()
    {
        return json_decode($this->_result);
    }
    
    public function getHttpStatus()
    {
        return $this->_status;
    }
    
}