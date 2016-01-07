<?php
use App\Control\Controller;

require_once __DIR__ . '/../App/init.php';

$c = new Controller();
$c->consulta();
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto Exemplo</title>


        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">


        
    </head>
    <body>

        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 ">
                    <h1>Projeto CRUD Bichinhos</h1>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4" >
                    <div style="border-radius: 1em; background-color: #c4e3f3;  padding: 5%;">
                        <h2>Gêneros</h2>
                       <?php foreach ($c->generos as $b) {?>
                           
                        <p><a href="consulta.php?genero=<?= $b['id']?>"><?= $b['descricao']?></a></p>
                         
                       <?php }?>
                    </div>


                </div>
                <div class="col-md-8">
                    <div style="border-radius: 1em; background-color: #d9edf7;  padding: 2%;">
                        <h2>Lista de bichinhos</h2>
                        <table id="tabela" class="table table-hover">
                            <thead>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Cor</th>
                            
                            
                            </thead>
                            <tbody>

                                <?php foreach ($c->animais as $valor) { ?>
                                <form method="post">

                                    
                                    <tr>
                                        <td><?= $valor['id'] ?></td>
                                        <td><?= $valor['nome'] ?></td>
                                        <td><?= $valor['cor'] ?></td>
                                      
                                    </tr>
                                </form>
                            <?php } ?>

                            </tbody>
                        </table>
                    </div>

                </div>
            </div>

        </div>


    </body>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
    
    <script type="text/javascript" src="js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">

            $(document).ready(function () {
                $('#tabela').DataTable();
            });
            
        </script>
</html>