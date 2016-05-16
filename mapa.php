<?php
if(!isset($_GET["sala"]) || empty($_GET["sala"])){
    header('Location: index.php');
}else {
    include "service/HorarioMatricula.php";
    $sala = $_GET["sala"];
    $rota = buscaRota($sala);
    include 'header.php';
}
?>
        <main>
            <div class="map">
                <h2>Veja no mapa:</h2>

             <a href="<?php echo $rota; ?>" data-lightbox="image-1"><img class="rota" src="<?php echo $rota; ?>"></a>
            </div>
        </main>
<script src="lightbox/js/lightbox-plus-jquery.min.js"></script>
</body>
</html>