<?php
if(!isset($_GET["matricula"])){
    header('Location: error.php');
}else {
    include "../service/HorarioMatricula.php";
    $matricula = $_GET["matricula"];
    $horario = buscaPorMatricula($matricula);
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>FindClass</title>
	<style>
		@import url(estilos/geral.css);
	</style>
</head>
<body>
	<header>
		<h1>Quadro de Horários</h1>
	</header>

	<main>
		<table>
			<tr>
                <th class="tabela-coluna"><span></span></th>
				<th class="tabela-coluna"><span>Segunda</span></th>
				<th class="tabela-coluna"><span>Terça</span></th>
				<th class="tabela-coluna"><span>Quarta</span></th>
				<th class="tabela-coluna"><span>Quinta</span></th>
				<th class="tabela-coluna"><span>Sexta</span></th>
			</tr>
<?php
            for($i = 0; $i < 4; $i++){
                $hAtual = $horario->getAtual()->horaIncial;
                echo '<tr>';
                echo '<td class="tabela-coluna"><span>'.$hAtual.'</span></td>';
                for($j = 1; $j < 6; $j++){
                    if($horario->isHorario($j+1, $hAtual))
                        echo '<td class="tabela-coluna"><span>'.$horario->getNext()->disciplina.'</span></td>';
                    else{
                        echo '<td class="tabela-coluna"><span></span></td>';
                    }
                }
                echo '</tr>';
            }

?>
			<tr>
			</tr>
		</table>

	</main>

</body>
</html>