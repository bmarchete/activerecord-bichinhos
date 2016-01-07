<?php


require_once __DIR__ . '/../vendor/autoload.php';


ActiveRecord\Config::initialize(function($cfg)
{
    $cfg->set_connections(
        array(
            'development' => 'mysql://root:@localhost/revisao',
        )
    );
});