<?php
namespace Patterns\Builder;

/**
 * Representa o Foguete do sistema.
 * @author David Rusycki
 * @since 09/01/2022
 */
class FogueteProduct 
{

    protected float $tanqueCombustivel;
    protected string $modelo;
    protected int $numeroMotores;
    protected int $numeroLugares;

    /**
     * Retorna a representação do objeto em string.
     */
    public function __toString()
    {
        $sString = "Foguete Model: {$this->getModelo()} \n";

        return $sString;
    }

    /**
     * Get the value of tanqueCombustivel
     */ 
    public function getTanqueCombustivel()
    {
        return $this->tanqueCombustivel;
    }

    /**
     * Set the value of tanqueCombustivel
     * @param Float $tanqueCombustivel
     * @return  self
     */ 
    public function setTanqueCombustivel(float $tanqueCombustivel) : FogueteProduct
    {
        $this->tanqueCombustivel = $tanqueCombustivel;

        return $this;
    }

    /**
     * Get the value of modelo
     */ 
    public function getModelo()
    {
        return $this->modelo;
    }

    /**
     * Set the value of modelo
     * @param String $modelo
     * @return  self
     */ 
    public function setModelo(string $modelo) : FogueteProduct
    {
        $this->modelo = $modelo;

        return $this;
    }

    /**
     * Get the value of numeroMotores
     */ 
    public function getNumeroMotores()
    {
        return $this->numeroMotores;
    }

    /**
     * Set the value of numeroMotores
     * @param Integer $numeroMotores
     * @return  self
     */ 
    public function setNumeroMotores(int $numeroMotores) : FogueteProduct
    {
        $this->numeroMotores = $numeroMotores;

        return $this;
    }

    /**
     * Get the value of numeroLugares
     */ 
    public function getNumeroLugares()
    {
        return $this->numeroLugares;
    }

    /**
     * Set the value of numeroLugares
     * @param Integer $numeroLugares
     * @return  self
     */ 
    public function setNumeroLugares(int $numeroLugares) : FogueteProduct
    {
        $this->numeroLugares = $numeroLugares;

        return $this;
    }

}
