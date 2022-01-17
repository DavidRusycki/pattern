<?php
require_once('../../vendor/autoload.php');

$oVolksFactory = new \Patterns\FactoryMethod\VolkswagemFactory();
$oFox = $oVolksFactory->criarCarro('Fox');

echo '<pre>';
var_dump($oFox);


