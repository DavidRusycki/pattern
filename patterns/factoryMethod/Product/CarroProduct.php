<?php
namespace Patterns\FactoryMethod\Product;

/**
 * Interface para os carros do sistema.
 * @author David Rusycki
 * @since 07/01/2022
 */
interface CarroProduct {

    public function acelerar();
    public function frear();
    public function shiftUp();
    public function shiftDown();

}