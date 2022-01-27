<?php
include('header.php');
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-light">
                <br>
                <h3 class="mt-5"><i class="fas fa-wrench"></i></i> Verificação do método de envio.</h3>
                <p class="lead"> </p>
                <hr>
            <div class="row">
                <div class="col-12 col-md-4">
                  <div class="alert alert-primary" role="alert">

                        <!--- Verificação de método --->
                        <?php

                            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                                echo "Método de envio POST <br><br>";

                                var_export($_POST);
                            }
                            
                            if ($_SERVER['REQUEST_METHOD'] === 'GET') {
                                echo  "Método de envio GET";
                            
                                $search = $_GET['search'];
                                echo "<br><br>Procurar por: <b>$search</b>";
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