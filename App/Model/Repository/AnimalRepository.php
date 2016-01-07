<?php

namespace App\Model\Repository;

use App\Helpers\RepositoryHelper;
use App\Model\Animal;

class AnimalRepository {

    public function cadastra($nome, $cor, $tipo) {

        Animal::create(
            [
                'nome' => $nome,
                'cor' => $cor,
                'tipo' => $tipo
            ]
        );


    }

    public function altera($id, $nome, $cor) {

        $a = Animal::find($id);

        $a->update_attributes(
            [
                'nome' => $nome,
                'cor' => $cor
            ]
        );
    }
    
    public function exclui($id) {
        $a =Animal::find($id);
        $a->delete();

    }

    public function busca() {

        $data = Animal::all(
            array(
                'joins' => array('genero'),
                'select' => 'animal.id, nome, cor, descricao'
            )
        );

        return RepositoryHelper::objectsToArray($data);

    }
    
    public function buscaGenero($tipo) {
        $a = Animal::all(
            array(
                'conditions' => array('tipo = ?', $tipo)
            )
        );

        return RepositoryHelper::objectsToArray($a);
    }

}
