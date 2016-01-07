<?php

namespace App\Model;

use ActiveRecord\Model;


class Animal extends Model
{
    static $table_name = 'animal';
    static $belongs_to =
        array(
            array(
                'genero',
                'foreign_key' => 'tipo'

            )
        );
}