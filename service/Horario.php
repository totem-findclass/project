<?php
include "Util.php";
class Horario
{
    private $_horario;
    private $_next = 0;
    
    public function __construct($result)
    {
        if(!empty($result))
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

    public function getNext()
    {
        return $this->_horario[$this->_next++];
    }

    public function getAtual()
    {
        return $this->_horario[$this->_next];
    }

    public function isHorario($semana, $hora)
    {
        $atual = $this->_horario[$this->_next];
        if($atual->diaSemana == $semana AND $atual->horaIncial == $hora){
            return true;
        }
        return false;
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