<?php
include('header.php');
?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">
                <br>
                <h3 class="mt-5"><i class="fas fa-wrench"></i></i> Verificação do método de envio.</h3>
                <p class="lead"> </p>
                <hr>
            <div class="row">
                <div class="col-12 col-md-10">
                  <div class="alert alert-warning" role="alert">

                        <!--- Verificação de método --->
                        <?php

                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                echo "Método de envio POST <br><br>";

                                echo "<b>Título do livro:</b> ".$_POST['titulo'];  
                                echo "<br><b>Autor:</b> ".$_POST['autor'];
                                echo "<br><b>Ano da publicação:</b> ".$_POST['ano'];
                                echo "<br><b>Item de coleção:</b> ".$_POST['colecao'];
                                echo "<br><b>Descrição:</b> ".$_POST['descricao'];
                                echo "<br><b>Capa do livro (imagem):</b> ".$_POST['upload']."<br><br>";

                                var_export($_POST);

                            }
                            
                            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                                echo  "Método de envio GET";
                            
                                echo "<br><br><b>Pesquisar: </b>".$_GET['search'];
                            }
                        ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');