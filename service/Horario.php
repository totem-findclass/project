<?php
include "Util.php";
class Horario
{
    private $_horario;
    
    public function __construct($result)
    {
        $this->_horario = horarioSort($result);
    }


    public function getResult()
    {
        return $this->_horario;
    }

    public function setResult($result)
    {
        $this->_horario = $result;
    }

//    public function getResultAsArray()
//    {
//        return json_decode($this->_horario, true);
//    }
//
//    public function getResultAsObject()
//    {
//        return json_decode($this->_horario);
//    }
}