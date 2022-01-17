<?php
require_once('../../vendor/autoload.php');

$aPessoas = [
     'Pedrao'
    ,'Joao'
    ,'Fabio'
    ,'Daniel'
    ,'Samuel'
    ,'William'
    ,'David'
    ,'Alexsandra'
    ,'Amanda'
    ,'Tiago'
    ,'Maitê'
];

$oEstimate = new \Valuation\EstimateTime();

$oEstimate->setInitial();

$aLivros = [];

foreach($aPessoas as $sNome) {
    $oLivro = new \Patterns\Prototype\LivroStandart();
    $oLivro->setTitulo('Livro PHP');
    $oLivro->setAssunto('PHP');
    $oLivro->setNomeTitular($sNome);
    $aLivros[] = $oLivro;
}

$oEstimate->setFinal();

echo '<br>';
echo 'New :';
echo $oEstimate->getEstimate();
echo '<br>';

echo '<pre>';
var_dump($aLivros);

$oEstimate->clear();

$aLivros = [];

$oEstimate->setInitial();

$oLivroPhp = new \Patterns\Prototype\LivroPhpPrototype(); 
$oLivroPhp->setAssunto('PHP');

foreach($aPessoas as $sNome) {
    $oLivro = clone $oLivroPhp;
    $oLivro->setNomeTitular($sNome);
    $aLivros[] = $oLivro; 
}

$oEstimate->setFinal();

echo '<br>';
echo 'Clone :';
echo $oEstimate->getEstimate();
echo '<br>';

echo '<pre>';
var_dump($aLivros);