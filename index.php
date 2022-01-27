<?php
include('header.php');
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-light">
                <br>
                <h3 class="mt-5"><i class="fas fa-book"></i> Listagem dos livros</h3>
                <p class="lead"> Listagem de todos os livros disponíveis no site.</p>
                <hr>
            <div class="row justify-content-center">
                <div class="col-12 col-md-12">
                    <table class="table table-hover justify-content-center text-center">
                    <thead>
                        <tr>
                        <th scope="col ">ID</th>
                        <th scope="col">Título do Livro</th>
                        <th scope="col">Autor</th>
                        <th scope="col">Ano</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Capa</th>
                        <th scope="col">Ações</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        <th scope="row">1</th>
                        <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                        <td>Brunno Hernandez</span></td>
                        <td>2002</td>
                        <td>Conservado</td>
                        <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                        </td>
                        <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                        <td>Brunno Hernandez</span></td>
                        <td>2002</td>
                        <td>Conservado</td>
                        <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                        </td>
                        <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                        <td>Brunno Hernandez</span></td>
                        <td>2002</td>
                        <td>Conservado</td>
                        <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                        </td>
                        <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                        <td>Brunno Hernandez</span></td>
                        <td>2002</td>
                        <td>Conservado</td>
                        <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                        </td>
                        <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                        </tr>
                        <tr>
                        <th scope="row">1</th>
                        <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                        <td>Brunno Hernandez</span></td>
                        <td>2002</td>
                        <td>Conservado</td>
                        <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                        </td>
                        <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                        </tr>
                     </tbody>
                    </table>
                </div>
            </div>
               
                    <nav aria-label="Navegação de página exemplo">
                        <ul class="pagination justify-content-center">
                            <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                            <a class="page-link" href="#">Próximo</a>
                            </li>
                        </ul>
                    </nav>
        </div>
    </div>
</div>

<?php
include('footer.php');
