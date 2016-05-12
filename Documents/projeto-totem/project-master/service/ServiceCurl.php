<?php
include "Response.php";

class ServiceCurl
{
    
    protected $_baseUrl;
    protected $_status;
    protected $_query;
    protected $_result;

    public function execute($request)
    {        
        $this->_baseUrl = $request->getEndPont();
        $this->_query = $this->montarQuery($request->getParans());
        $this->executeCurl();
        

        return new Response($this->getResult(), $this->getHttpStatus());
    }

    /**
     * @parans Array de parâmetros array('foo'=>'bar');
     */

//    public function execute($url, array $parans = [])
//    {
//        $this->_baseUrl = $url;
//        $this->_query = $this->montarQuery($parans);
//        $this->executeCurl();
//    }

    private function montarQuery(array $paran)
    {
        $query = '';

        if(!empty($paran)){
            $query = '?'.http_build_query($paran);
        }

        return $query;
    }

    public function executeCurl()
    {
        $initCurl = curl_init();
        curl_setopt($initCurl, CURLOPT_URL, $this->_baseUrl.$this->_query);
        curl_setopt($initCurl, CURLOPT_RETURNTRANSFER, true);
        $this->_result = json_decode(curl_exec($initCurl));
        $this->_status = curl_getinfo($initCurl, CURLINFO_HTTP_CODE);
        curl_close($initCurl);
    }
    
    public function getHttpStatus()
    {
        return $this->_status;
    }
    
    public function getQuery()
    {
        return $this->_query;
    }
    
    public function getResult()
    {
        return $this->_result;
    }
    
}