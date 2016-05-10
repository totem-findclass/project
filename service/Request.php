<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 10/05/2016
 * Time: 14:02
 */
class Request
{
    private $_args;
    private $_endPoint;
    private $_token;

    public function __construct($url = null, array $args = null)
    {
        $this->setEndPont($url);
        $this->setParans($args);
    }

    public function getParans(){
        return $this->_args;
    }
    public function getEndPont(){
        return $this->_endPoint;
    }
    public function setParans(array $args = [])
    {
        $this->_args = $args;
    }
    public function setEndPont($_endPoint){
        $this->_endPoint = $_endPoint;
    }

    public function getToken(){
        return $this->_token;
    }

    public function setToken($_token){
        $this->_token = $_token;
    }
    
}