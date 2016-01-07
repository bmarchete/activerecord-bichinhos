<?php

namespace App\Control;


use App\Model\Repository\AnimalRepository;
use App\Model\Repository\GeneroRepository;



class Controller {



    public function index() {

        $a = new AnimalRepository();

        if (isset($_POST['enviar'])) {
            $nome = $_POST['nome'];
            $cor = $_POST['cor'];
            $tipo = $_POST['tipo'];

            $a->cadastra($nome, $cor, $tipo);
        }

        if (isset($_POST['excluir'])) {
            $id = $_POST['id'];

            $a->exclui($id);
        }

        if (isset($_POST['alterar'])) {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $cor = $_POST['cor'];


            $a->altera($id, $nome, $cor);
        }

        //this representa uma variavel de classe
        $dados = $a->busca();

        $g = new GeneroRepository();

        $generos = $g->busca();
        $x = 2;

        //chama a view
        include_once __DIR__ . '/../View/index.php';
    }



}
