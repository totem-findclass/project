<?php
include "Horario.php";
class Response
{
    private $_result;
    private $_status;

    /**
     * Response constructor.
     * @param $_horario
     * @param $_status
     */
    public function __construct($_horario, $_status)
    {
        $this->_result = new Horario($_horario);
        $this->_status = $_status;
    }


    public function getHorario()
    {
        return $this->_result;
    }


    public function setHorario($horario)
    {
        $this->_result = $horario;
    }


    public function getStatus()
    {
        return $this->_status;
    }


    public function setStatus($status)
    {
        $this->_status = $status;
    }


}