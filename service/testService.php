<?php
include "ServiceCurl.php";
include "Request.php";
include "Consts.php";

$content = new ServiceCurl();
$request = new Request(Consts::END_POINT_MATRICULA, ["ra" => "1320110212", "token" => Consts::TOKEN_MATRICULA]);


$endPoint = "http://sistemas.unipe.br:8080/uniservicetoten/totenAPI/consultaSala/v1";
$endPoint1 = "http://sistemas.unipe.br:8080/uniservice/cursoAPI/consultaDisciplinasCurso/v1"; // 'c' => '003', 'p'=>'1', 'token'=>'unipe@2016', 'pr'=>'123123'


?>
<html>
<head>
</head>
<body>
<?php


$response = $content->execute($request);

echo $response->getStatus();

$data = $response->getHorario()->getResult();

print_r($data);
?>
</body>
</html>