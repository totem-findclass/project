<?php
include "ServiceCurl.php";
include "Status.php";
$content = new ServiceCurl("http://sistemas.unipe.br:8080/uniservice/cursoAPI/consultaDisciplinasCurso/v1",
                array('c' => '011', 'p'=>'6', 'token'=>'unipe@2016', 'pr'=>'123123'));
?>
<html>
<head>
</head>
<body>
<?php

$content->executeCurl();

if ($content->getHttpStatus() == Status::SUSSESO)
{
    foreach ($content->getResultAsObject() as $chave => $valor)
    {
        if ($valor->semestre == '2016.1')
        {
            print_r($valor->nome);
            echo "</br>";
        }
    }
}
?>
</body>
</html>