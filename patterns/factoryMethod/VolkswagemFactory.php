<?php
namespace Patterns\FactoryMethod;

use Exception;
use Patterns\FactoryMethod\Product\Fox;
use Patterns\FactoryMethod\Product\CarroProduct;

/**
 * Fábrica de carros da Volkswagem dentro do sistema.
 * @author David Rusycki
 * @since 07/01/2022
 */
class VolkswagemFactory implements CarroFactory
{
    /**
     * Cria o carro de acordo com o nome.
     * @param String $sNome - Nome do carro.
     * @return CarroProduct 
     */
    public function criarCarro(string $sNome) : CarroProduct {
        switch ($sNome) {
            case 'Fox':
                return new Fox();
                break;
            
            default:
                throw new Exception('Esse carro não existe.');
                break;
        }
    }

}
