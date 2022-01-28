<?php
include('header.php');
?>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-10 bg-light">
                <br>
                <h3 class="mt-5"><i class="fas fa-wrench"></i></i> Laços de repetição.</h3>
                <p class="lead"> </p>
                <hr>
            <div class="row">
                <div class="col-12 col-md-10">
                  <div class="alert alert-warning" role="alert">

                        
                        <?php  

                        //For (variável; Condição; Incremento)
                        for($i = 0; $i <= 10; $i++){ 
                            echo "$i ";
                        }
                          
                        echo "<hr>";
                        
                        //Foreach (variável as chave => valor)                        
                        $array = [
                            [
                            'id'        => 01,
                            'titulo'    => 'Investidor Inteligente',
                            'autor'     => 'Brunno Hernandez'
                        ],
                        [
                            'id'        => 02,
                            'titulo'    => 'Mais esperto que o Diabo',
                            'autor'     => 'Napolleon Hill'
                        ],
                        [
                            'id'        => 03,
                            'titulo'    => 'Mais esperto que o Diabo',
                            'autor'     => 'Napolleon Hill'
                        ]
                        ];
                        
                        foreach($array as $key => $value) {
                            echo "ID: ".$value['id']."<br>Título do livro: ".$value['titulo']."<br> Autor: ".$value['autor']."<br><br>";
                        }
                        
                        echo "<hr>";
                        
                        //While (condição)
                        $valor = 10;
                        while($valor < 100) {
                            $valor = $valor * 2;
                            echo "$valor ";
                        }
                        
                        echo "<hr>";

                        //Do {} While (condição)
                        $valor = 100;
                        do{
                            $valor = $valor * 2;
                            echo "$valor ";

                        } while($valor < 100);

                            ?>

                            

                    </div>
                </div>
            </div>


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
                    <?php

                    $teste = "BNO Brunno";

                    $array = [
                                [
                                'id'        =>  01,
                                'titulo'    =>  'Investidor inteligente',
                                'autor'     =>  $teste,
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
                    
                    foreach($array as $key => $value) {
                    
                    ?>                           
                    
                        <tr>
                        <th scope="row"><?= $value['id']; ?></th>
                        <td><a class="navbar-brand" href="arquivo-livro.php?id=<?= $value['id']; ?>"><?= $value['titulo']; ?></a></td>
                        <td><?= $value['autor']; ?></td>
                        <td><?= $value['ano']; ?></td>
                        <td><?= $value['estado']; ?></td>
                        <td><img src="<?= $value['upload']; ?>" width="50" height="50">
                        </td>
                        <td><a href="cadastro-livro.php?id=<?= $value['id']; ?>"><button type="button" class="btn btn-primary btn-sm">Editar</button></a> <a href="#excluir"><button type="button" class="btn btn-danger btn-sm">Excluir</button></a> <a href="arquivo-livro.php?=id=<?= $value['id']; ?>"><button type="button" class="btn btn-success btn-sm">Detalhes</button></a></td>    
                        </tr>
                
                <?php
                }
                ?>
                     </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>


</div>

<?php
include('footer.php');