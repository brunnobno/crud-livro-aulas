<?php
require_once __DIR__./'header.php';

// if(isset($_POST['editar-info'])) {
//     $_SESSION['editar-info-session'] = "Autorizado";
// }

// if(isset($_POST['remover-session'])) {
//     unset($_SESSION['editar-info-session']);
// }

if(isset($_GET['excluir'])) {
    $excluir = $_GET['excluir'];
    unset($_SESSION['cadastro'][$excluir]);
}

?>

<div class="container-fluid bg-light">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-white">

            <div class="row mt-5">
                <div class="col-12 col-md-8">
                    <br>
                    <h3><i class="fas fa-book"></i> Listagem dos livros</h3>
                    <p class="lead"> Listagem de todos os livros disponíveis no site.</p>
                </div>
                <div class="col-12 col-md-4">
                    <br>
                    <?php
                    // if(!empty($_SESSION['editar-info-session'])) {
                    //     echo '<form action="form-session.php" method="POST"><button type="submit" class="btn btn-info" name="remover-session">Quero apenas visualizar</button></form>';
                    // } else {
                    //     echo '<form action="form-session.php" method="POST"><button type="submit" class="btn btn-info" name="editar-info">Eu quero editar as informações</button></form>';
                    // }
                    ?>

                </div>
            </div>

                <hr>

            <div class="row justify-content-center">
                <div class="table-responsive col-12 col-md-12">
                    <table class="table table-hover justify-content-center text-center">
                    <thead>
                        <tr>
                        <th scope="col">ID</th>
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
                                // $infoLivros = [
                                //             [
                                //             'id'        =>  01,
                                //             'titulo'    =>  'Investidor inteligente',
                                //             'autor'     =>  'Brunno Hernandez',
                                //             'ano'       =>  2002,
                                //             'estado'    =>  'Conservado',
                                //             'upload'      =>  'capa-livro.png'
                                //             ],  
                                //             [
                                //             'id'        =>  02,
                                //             'titulo'    =>  'Mais inteligente que o diabo',
                                //             'autor'     =>  'Napoleon Hill',
                                //             'ano'       =>  1989,
                                //             'estado'    =>  'Ruim',
                                //             'upload'      =>  'capa-livro.png' 
                                //             ],  
                                //             [
                                //             'id'        =>  03,
                                //             'titulo'    =>  'O Preço é o lucro',
                                //             'autor'     =>  'Richar H. Thaler',
                                //             'ano'       =>  1977,
                                //             'estado'    =>  'Ótimo',
                                //             'upload'    =>  'capa-livro.png' 
                                //             ]
                                //         ];

                                // foreach($infoLivros as $key => $value) {

                                //     var_export($value);

                                if(isset($_POST['cadastro'])) {
                                    $_SESSION['cadastro'][] = [
                                        'titulo'     =>  $_POST['titulo'],
                                        'autor'      =>  $_POST['autor'],
                                        'ano'        =>  $_POST['ano'],
                                        'colecao'    =>  $_POST['colecao'],
                                        'descricao'  =>  $_POST['descricao'],
                                        'upload'     =>  $_POST['upload'],
                                    ];                              
                                }                                   
                                        foreach($_SESSION['cadastro'] as $key => $value) {
                                        
                                        
                            ?>                           

                            <tr>
                            <th scope="row"><?= $key; ?></th>
                            <td><a class="navbar-brand" href="arquivo-livro.php?title=<?= $value['titulo']; ?>"><?= $value['titulo']; ?></a></td>
                            <td><?= $value['autor']; ?></td>
                            <td><?= $value['ano']; ?></td>
                            <td><?= $value['colecao']; ?></td>
                            <td><img src="<?= $upload = (isset($value['upload']) && !empty($value['upload'])) ? $value['upload'] : "capa-livro.png" ; ?>" width="50" height="50">
                            </td>
                            <td>
                            
                                <a href="cadastro-livro.php?title=<?= $value['titulo']; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <form action="index.php" method="GET"><a href="form-session.php?excluir=<?= $key; ?>"><button type="button" class="btn btn-danger btn-sm" name="excluir">Excluir</button></a></form>
                          
                                <a href="arquivo-livro.php?title=<?= $value['titulo']; ?>"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
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