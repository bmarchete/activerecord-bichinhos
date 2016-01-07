<?php

namespace App\Model\Repository;

use App\Helpers\RepositoryHelper;
use App\Model\Genero;


class GeneroRepository {

    public function cadastra($nome, $cor, $tipo) {

    }

    public function altera($id, $nome, $cor, $tipo) {

    }
    
    public function exclui($id) {

    }

    public function busca() {



        $data = Genero::all();

        return RepositoryHelper::objectsToArray($data);
    }
    
    

}
