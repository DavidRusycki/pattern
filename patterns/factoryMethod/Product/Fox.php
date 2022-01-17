<?php
namespace Patterns\FactoryMethod\Product;

class Fox implements CarroProduct
{
    
    public function acelerar() {
        echo 'Acelerando o Fox';
    }

    public function frear() {
        echo 'Freiando o Fox';
    }

    public function shiftUp() {
        echo 'Metendo Marcha no Fox';
    }

    public function shiftDown() {
        echo 'Reduzindo no Fox';
    }

}
