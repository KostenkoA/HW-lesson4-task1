<?php

use App\DesignPatterns\InMemoryStorage;

require __DIR__ . '/vendor/autoload.php';

$data = new InMemoryStorage();

$data->set('monday',1);
$data->set('tuesday',2);
$data->set('wednesday',3);


var_dump($data);

var_dump($data->has('wednesday'));
var_dump($data->has('friday'));

$data->remove('monday');
var_dump($data);

$data->clear();
var_dump($data);