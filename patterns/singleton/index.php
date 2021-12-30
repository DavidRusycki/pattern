<?php
require_once('../../vendor/autoload.php');

$LogsSingleton = Patterns\Singleton\LogsSingleton::obterInstancia();

var_dump($LogsSingleton);