<?php
include('header.php');
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-light">
                <br>
                <h3 class="mt-5"><i class="fas fa-pencil-alt"></i> Cadastrar/editar livro</h3>
                <p class="lead"> Cadastre um novo livro ou edite um já existente.</p>
                <hr>
            <div class="row justify-content-center">
                <div class="col-12 col-md-6"></div>
                    <form action="request.php" method="POST">                
                        <div class="col-12 col-md-6 mb-3">                        
                            <label for="titulo"><strong>Título do Livro: <span class="text-danger">*</span></strong></label>
                            <input type="text" class="form-control" id="titulo" placeholder="Escreva o título do livro" name="titulo" required>
                        </div>

                        <div class="col-12 col-md-6 mb-3">                        
                            <label for="autor"><strong> Autor:<span class="text-danger">*</span></strong></label>
                            <input type="text" class="form-control" id="autor" placeholder="Escreva o do autor do livro" name="autor" required>
                        </div>

                        <div class="col-12 col-md-4 mb-3">                        
                            <label for="titulo"><strong>Ano de publicação:</strong></label>
                            <input type="date" class="form-control" id="ano" name="ano">
                        </div>
                        
                        <div class="col-12 col-md-4 mb-3">    
                            <div class="col-md-10">
                                <label for="titulo"><strong>Item de coleção:</strong></label> 
                            </div>                  
                            <div class="col-md-10"><input type="radio" class="form-check-input" id="colecao" name="colecao" value="SIM">
                                <label class="form-check-label" for="autor">Sim</label>
                            </div>
                            <div class="col-md-10"><input type="radio" class="form-check-input" id="colecao" name="colecao" value="NÃO">
                                <label class="form-check-label" for="autor">Não</label>
                            </div>
                        </div>
                        
                        <div class="col-12 col-md-6 mb-3">                        
                            <label for="descricao"><strong>Sinopse/Descrição: <span class="text-danger">*</span></strong></label>
                            <textarea type="textarea" class="form-control" id="descricao" name="descricao"></textarea>
                        </div>

                        <div class="col-12 col-md-6 mb-3">
                            <label for="capa"><strong>Capa (imagem): <span class="text-danger">*</span></strong></label>
                            <input class="form-control" name="upload" type="file" id="formFile">
                        </div>

                        <div class="col-12 col-md-10 mt-5 mb-5">                        
                            <button type="submit" class="btn btn-primary">Salvar informações</button>
                        </div>                
                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('footer.php');
