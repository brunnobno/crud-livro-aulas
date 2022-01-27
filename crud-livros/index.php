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
                <table class="table table-hover">
                <thead>
                    <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título do Livro</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Estado</th>
                    <th scope="col">Capa</th>
                    <th scope="col">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row d-flex align-items-center">1</th>
                    <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                    <td>Brunno Hernandez</td>
                    <td>2002</td>
                    <td>Conservado</td>
                    <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                    </td>
                    <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                    </tr>
                    <tr>
                    <th scope="row d-flex align-items-center">1</th>
                    <td><a class="navbar-brand" href="arquivo-livro.php">Livro 01</a></td>
                    <td>Brunno Hernandez</td>
                    <td>2002</td>
                    <td>Conservado</td>
                    <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                    </td>
                    <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                    </tr>
                    <tr>
                    <th scope="row d-flex align-items-center">2</th>
                    <td><a class="navbar-brand" href="arquivo-livro.php">Livro 02</a></td>
                    <td>Brunno Hernandez</td>
                    <td>2002</td>
                    <td>Conservado</td>
                    <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                    </td>
                    <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                    </tr>
                    <tr>
                    <th scope="row d-flex align-items-center">3</th>
                    <td><a class="navbar-brand" href="arquivo-livro.php">Livro 03</a></td>
                    <td>Brunno Hernandez</td>
                    <td>2002</td>
                    <td>Conservado</td>
                    <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                    </td>
                    <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                    </tr>
                    <tr>
                    <th scope="row d-flex align-items-center">4</th>
                    <td><a class="navbar-brand" href="arquivo-livro.php">Livro 04</a></td>
                    <td>Brunno Hernandez</td>
                    <td>2002</td>
                    <td>Conservado</td>
                    <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                    </td>
                    <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                    </tr>
                    <tr>
                    <th scope="row d-flex align-items-center">5</th>
                    <td><a class="navbar-brand" href="arquivo-livro.php">Livro 05</a></td>
                    <td>Brunno Hernandez</td>
                    <td>2002</td>
                    <td>Conservado</td>
                    <td><img src="https://www.sguerra.com.br/wp-content/uploads/2018/04/livro-antonio-chicola.png" width="50" height="50">
                    </td>
                    <td><a href="cadastro-livro.php"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                    </tr>
                    

                </tbody>
                </table>

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
