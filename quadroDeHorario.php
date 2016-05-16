<?php
if(!isset($_GET["matricula"]) || empty($_GET["matricula"])){
    header('Location: index.php');
}else {
    include "service/HorarioMatricula.php";
    $matricula = $_GET["matricula"];
    $horario = buscaPorMatricula($matricula);
    include 'header.php';
}
?>

	<main style="text-align:center">
        <h1>Quadro de Horários</h1>
		<table class="horario">
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
                $horaLinhaAtual = $horario->getAtual()->horaIncial;
                echo '<tr>';
                echo '<td class="tabela-coluna"><span>'.$horaLinhaAtual.'</span></td>';
                for($j = 2; $j < 7; $j++){
                    if($horario->isHorario($j, $horaLinhaAtual)) {
                        $atual = $horario->getNext();
                        echo '<td class="tabela-coluna"><span><a href="mapa.php?sala=' . $atual->sala . '">' . $atual->disciplina . '</span></td>';
                    } else{
                        echo '<td class="tabela-coluna"><span></span></td>';
                    }
                }
                echo '</tr>';
            }

?>
		</table>

	</main>

</body>
</html>