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
    preg_match('/^[a-zA-Z]+/',$sala, $matches);
    $content = file_get_contents('service/sala.json');
    $salas = json_decode($content, true);
    if(!array_key_exists(strtolower($matches[0]), $salas))
        return null;
    $result = $salas[strtolower($matches[0])]['img'];
    return 'img/map/'.$result;
}