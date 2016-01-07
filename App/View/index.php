<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Projeto Exemplo</title>


        <link href="<?= \App\Helpers\AssetsHelper::$cssPath ?>bootstrap.min.css" rel="stylesheet">
        <link href="<?= \App\Helpers\AssetsHelper::$cssPath ?>style.css" rel="stylesheet">
        <link href="<?= \App\Helpers\AssetsHelper::$cssPath ?>dataTables.bootstrap.min.css" rel="stylesheet">



    </head>
    <body>

        <div class="container-fluid">
            <div class="row" style="margin-top: 1em">
                <div class="col-md-12 ">
                    <div class="header"><h1>Projeto CRUD Bichinhos</h1></div>

                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-md-4" >
                    <div class="titulo"><h2>Cadastro de bichinhos</h2></div>
                    <div class="borda">

                        <form method="post">
                            <div class="form-group">

                                <label for="nome">
                                    Digite o nome do bichinho
                                </label>
                                <input type="text" class="form-control" id="nome" name="nome" />
                            </div>

                            <div class="form-group">

                                <label for="cor">
                                    Digite a cor do bichinho
                                </label>
                                <input type="text" class="form-control" id="cor" name="cor"/>
                            </div>

                            <div class="form-group">

                                <label for="tipo">
                                    Digite o tipo do bichinho
                                </label>
                                <select name="tipo" class="form-control">
                                    <?php foreach ($generos as $b) { ?>

                                        <option  value="<?= $b['id'] ?>"><?= $b['descricao'] ?></option>

                                    <?php } ?>
                                </select>   
                            </div>

                            <div class="form-group">
                                <input type="submit"  name="enviar" value="Enviar" class="btn bg-primary" />
                            </div>

                        </form>
                    </div>


                </div>
                <div class="col-md-8">
                    <div class="titulo"><h2 >Lista de bichinhos</h2></div>

                    <div class="borda">

                        <table id="tabela" class="table table-condensed">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nome</th>
                                <th>Cor</th>
                                <th>Espécie</th>
                                <th></th>
                            </tr>

                            </thead>
                            <tbody>

                                <?php foreach ($dados as $valor) { ?>
                                <form method="post">

                                    <input type="hidden" name="id" value="<?= $valor['id'] ?>">
                                    <tr>
                                        <td><?= $valor['id'] ?></td>
                                        <td>
                                            <div class="form-group">


                                                <input type="text" class="form-control" id="tipo" name="nome" value="<?= $valor['nome'] ?>" />
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">


                                                <input type="text" class="form-control" id="tipo" name="cor" value="<?= $valor['cor'] ?>" />
                                            </div>
                                        </td>
                                        <td>
                                          <?= $valor['descricao'] ?>

                                        </td>
                                        <td>
                                            <input type="submit" class="btn bg-primary" name="alterar" value="Alterar">
                                            <input type="submit" class="btn btn-danger"name="excluir" value="Excluir">
                                        </td>
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

    <script src="<?= \App\Helpers\AssetsHelper::$cssPath ?>jquery.min.js"></script>
    <script src="<?= \App\Helpers\AssetsHelper::$cssPath ?>bootstrap.min.js"></script>
    <script src="<?= \App\Helpers\AssetsHelper::$cssPath ?>scripts.js"></script>


</html>