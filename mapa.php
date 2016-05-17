<?php
if(!isset($_GET["sala"]) || empty($_GET["sala"])){
    header('Location: index.php');
}else {
    include 'header.php';
    include "service/HorarioMatricula.php";
    $sala = $_GET["sala"];
    $rota = buscaRota($sala);
        ?>
        <main>

            <div class="map">
                <?php if($rota != null) { ?>
                <a class="voltar" style="float: right" href="javascript:history.back(1);"><i class="fa fa-chevron-left"
                                                                                             aria-hidden="true"></i>
                    Voltar</a>
                <h2>Veja no mapa:</h2>
                <a href="<?php echo $rota; ?>" data-lightbox="image-1"><img class="rota" src="<?php echo $rota; ?>"></a>
                <?php } else { ?>
                    <div style="text-align:center">
                    <h2 >Bloco invalido!</h2>
                    <a class="voltar" href="javascript:history.back(1);"><i class="fa fa-chevron-left" aria-hidden="true"></i> Voltar</a>
                    </div>
                <?php } ?>
            </div>

        </main>
        <script src="lightbox/js/lightbox-plus-jquery.min.js"></script>
        <?php
    }
?>
</body>
</html>