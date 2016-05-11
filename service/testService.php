<?php
include "ServiceCurl.php";
include "Request.php";
include "Consts.php";

$content = new ServiceCurl();
$request = new Request(Consts::END_POINT_MATRICULA, ["ra" => "1320120212", "token" => Consts::TOKEN_MATRICULA]);

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