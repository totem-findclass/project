<?php
if(!isset($_GET["matricula"]) || empty($_GET["matricula"])){
    header('Location: index.php');
}else {
    include "service/HorarioMatricula.php";
    $matricula = $_GET["matricula"];
    $horario = buscaPorMatricula($matricula)->getResult();
    include 'header.php';
}
?>

	<main style="text-align:center">
        <?php if (!empty($horario)) { ?>
        <h1>Quadro de Horários</h1>
        <table class="horario">
            <tr>
                <th ><span></span></th>
                <th ><span>Segunda</span></th>
                <th ><span>Terça</span></th>
                <th ><span>Quarta</span></th>
                <th ><span>Quinta</span></th>
                <th ><span>Sexta</span></th>
                <th ><span>Sabado</span></th>
            </tr>
            <?php

            while(($atual = current($horario))){
                $horaLinhaAtual = $atual->horaIncial;
                echo '<tr>';
                echo '<td class="horario"><span>' . $horaLinhaAtual . '</span></td>';
                for ($j = 2; $j < 8; $j++) {
                        echo '<td class="horario">';
                        if ($atual) {
                            if ($atual->diaSemana == $j AND $atual->horaIncial == $horaLinhaAtual) {
                                echo '<span><a href="mapa.php?sala=' . $atual->sala . '">' . $atual->disciplina . '</br>' . $atual->sala . '</span>';
                                $atual = next($horario);
                                if ($atual)
                                while($atual->diaSemana == $j AND $atual->horaIncial == $horaLinhaAtual){

                                    $atual = next($horario);
                                    if (!$atual)
                                        break;
                                }
                            }
                        }
                        echo '</td>';

                }
                echo '</tr>';
            }

            echo '</table>';
            }else{
                echo '<h2>Matricula invalida!</h2>';
                echo '<a class="voltar" href="javascript:history.back(1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>';
            }
?>


	</main>

</body>
</html>