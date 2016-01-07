<?php

use App\Model\Repository\GeneroRepository;

require_once __DIR__ . '/../App/init.php';


echo '<pre>';
$g = new GeneroRepository();
$g->busca();