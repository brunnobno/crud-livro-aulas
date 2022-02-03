<?php
require_once __DIR__."/header.php";

if(isset($_GET['id'])) {
    $id = $_GET['id'];

?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">
                <br>
                <h3 class="mt-5"><i class="fas fa-search-plus"></i> Informações sobre o Livro</h3>
                <p class="lead"> Veja informações sobre o livro escolhido.</p>
                <hr>
          
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="col-12 col-md-10">                
                        <h2 class="text-primary"><?= $_SESSION['cadastro'][$id]['titulo']; ?></h5>
                    </div>
                    <div class="col-12 col-md-10">
                        <p> <strong>Descrição:</strong> <span class=""><?= $_SESSION['cadastro'][$id]['descricao']; ?></span></p>
                    </div>
                                    
                    <div class="col-12 col-md-10">
                        <p> <strong>Autor:</strong> <span class=""><?= $_SESSION['cadastro'][$id]['autor']; ?></span></p>
                    </div>
                    
                    <div class="col-12 col-md-10">
                        <p> <strong>Ano da publicação:</strong> <span class=""><?= $_SESSION['cadastro'][$id]['ano']; ?></span></p>
                    </div>

                    <div class="col-12 col-md-10">
                        <p> <strong>Item de coleção:</strong> <span class=""><?= $_SESSION['cadastro'][$id]['colecao']; ?></span></p>
                    </div>

                </div>
                <div class="col-12 col-md-4">
                    <p><img src="<?= $_SESSION['cadastro'][$id]['upload']; ?>" width="" height="300px"></p>   
                </div> 
                
                <div class="row">                  
                    <div class="col-12 col-md-10 mt-3 mb-3">
                    
                        <?php
                            if(!empty($_SESSION['editar-info-session'])) {
                        ?>
                            <a href="cadastro-livro.php?title=<?= $_GET['id']; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <form method="GET"><a href="index.php?excluir=<?= $_SESSION['cadastro'][$id]; ?>"><button type="button" class="btn btn-danger btn-sm" name="excluir">Excluir</button></form>
                        <?php
                            } 
                        ?>

                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php
} else {
?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">
                <br>
                <div class=" col-12 col-md-6 mt-5 alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle"></i> Nenhum livro foi selecionado!
                </div>
        </div>
    </div>
</div>

<?php

}

include('footer.php');
