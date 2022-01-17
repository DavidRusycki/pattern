<?php
namespace Patterns\Prototype;

/**
 * Classe de livro apenas para testar o tempo de vantagem do pattern Prototype.
 * @author David Rusycki
 * @since 07/01/2022
 */
class LivroStandart extends LivroPrototype
{
    
    public function __clone() {}

}
