<?php

namespace App\Control;


use App\Model\Repository\AnimalRepository;
use App\Model\Repository\GeneroRepository;


class Controller {

    // variaveis de funções nao aparecem para a pagina
    //esta é uma variável de classe
    public $dados;
    public $generos;
    public $animais;

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
        $this->dados = $a->busca();

        $g = new GeneroRepository();

        $this->generos = $g->busca();
    }

    public function consulta() {

        $g = new GeneroRepository();

        $this->generos = $g->busca();

        if (isset($_GET['genero'])) {
            $a = new AnimalRepository();


            $this->animais = $a->buscaGenero($_GET['genero']);
        }else{
            $this->animais = array();
        }
    }

}
