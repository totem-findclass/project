<?php
include "ServiceCurl.php";
include "Request.php";
include "Consts.php";

function buscaPorMatricula($matricula)
{
    $content = new ServiceCurl();
    $request = new Request(Consts::END_POINT_MATRICULA, ["ra" => $matricula, "token" => Consts::TOKEN_MATRICULA]);

    $response = $content->execute($request);

    if($response->getStatus() != Consts::SUSSESO)
        return null;
    
    return $response->getHorario();
}

function buscaRota($sala){
    return "img/map/mapa.png";
}