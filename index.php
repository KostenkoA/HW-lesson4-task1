<?php

use App\DesignPatterns\KeyValueStorage;
use App\DesignPatterns\KeyValueStorageJson;
use App\DesignPatterns\KeyValueStorageYaml;
require __DIR__ . '/vendor/autoload.php';

//check memory
/*
$data = new KeyValueStorage();

$data->set('monday',1);
$data->set('tuesday',2);
$data->set('wednesday',3);

var_dump($data->get('tuesday'));
var_dump($data->has('wednesday'));
$data->remove('monday');
var_dump($data);

$data->clear();
var_dump($data);
*/

//check yaml

$dataYaml = new KeyValueStorageYaml();

$dataYaml->set('monday',410);
$dataYaml->set('tuesday',131);
$dataYaml->set('wednesday',555);

var_dump($dataYaml->get('monday'));
var_dump($dataYaml->has('monday'));
$dataYaml->remove('monday');
$dataYaml->clear();

//check json
/*
$dataJson = new KeyValueStorageJson();

$dataJson->set('monday',10);
$dataJson->set('tuesday',24);
$dataJson->set('wednesday',54);

var_dump($dataJson->get('tuesday'));
var_dump($dataJson->has('monday'));
$dataJson->remove('wednesday');
$dataJson->clear();
*/