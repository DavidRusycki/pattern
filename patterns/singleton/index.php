<?php
require_once('../../vendor/autoload.php');

$oEstimate = new \Valuation\EstimateTime();
$oInstancia = null;
$iFinal = 1000;

$oEstimate->setInitial();

for ($i=0; $i < $iFinal; $i++) { 
    $oInstancia = new \Patterns\Singleton\LogsSingleton();
}

$oEstimate->setFinal();

echo '<br>';
echo 'Usando new: ';
echo $oEstimate->getEstimate();
echo '<br>';

$oEstimate->clear();

$oEstimate->setInitial();

for ($i=0; $i < $iFinal; $i++) { 
    $oInstancia = \Patterns\Singleton\LogsSingleton::obterInstancia();
}

$oEstimate->setFinal();

echo '<br>';
echo 'Usando Singleton: ';
echo $oEstimate->getEstimate();
echo '<br>';


