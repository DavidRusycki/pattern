<?php
namespace Patterns\Prototype;

/**
 * Classe de livro php.
 * @author David Rusycki
 * @since 07/01/2022
 */
class LivroPhpPrototype extends LivroPrototype
{
    public function __construct() {
        $this->setTitulo('Livro PHP 5.6');
    }

    public function __clone() {
        echo 'Clonado o Livro de php';
    }

}
