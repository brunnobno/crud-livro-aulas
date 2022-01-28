<?php
include('header.php');
?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">
                <br>
                <h3 class="mt-5"><i class="fas fa-book"></i> Listagem dos livros</h3>
                <p class="lead"> Listagem de todos os livros disponíveis no site.</p>
                <hr>
            <div class="row justify-content-center">
                <div class="table-responsive col-12 col-md-12">
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
                   
                        <?php
                                $infoLivros = [
                                            [
                                            'id'        =>  01,
                                            'titulo'    =>  'Investidor inteligente',
                                            'autor'     =>  'Brunno Hernandez',
                                            'ano'       =>  2002,
                                            'estado'    =>  'Conservado',
                                            'upload'      =>  'capa-livro.png'
                                            ],  
                                            [
                                            'id'        =>  02,
                                            'titulo'    =>  'Mais inteligente que o diabo',
                                            'autor'     =>  'Napoleon Hill',
                                            'ano'       =>  1989,
                                            'estado'    =>  'Ruim',
                                            'upload'      =>  'capa-livro.png' 
                                            ]
                                        ];

                                foreach($infoLivros as $key => $value) {

                            ?>                           

                            <tr>
                            <th scope="row"><?= $value['id']; ?></th>
                            <td><a class="navbar-brand" href="arquivo-livro.php?title=<?= $value['titulo']; ?>"><?= $value['titulo']; ?></a></td>
                            <td><?= $value['autor']; ?></td>
                            <td><?= $value['ano']; ?></td>
                            <td><?= $value['estado']; ?></td>
                            <td><img src="<?= $value['upload']; ?>" width="50" height="50">
                            </td>
                            <td><a href="cadastro-livro.php?title=<?= $value['titulo']; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php?title=<?= $value['titulo']; ?>"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                            </tr>

                        <?php
                        }
                        ?>
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
