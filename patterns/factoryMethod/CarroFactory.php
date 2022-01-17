<?php
namespace Patterns\FactoryMethod;

use Patterns\FactoryMethod\Product\CarroProduct;

/**
 * Interface para as fábricas de carro.
 * @author David Rusycki
 * @since 07/01/2022
 */
interface CarroFactory {

    public function criarCarro(string $sNome) : CarroProduct;

}