<?php
namespace Patterns\Prototype;

/**
 * Classe de prótipo (Interface) para as classes de livro.
 * @author David Rusycki
 * @since 07/01/2022 
 */
abstract class LivroPrototype 
{

    protected string $titulo;
    protected string $assunto;
    protected string $nomeTitular;

    /**
     * Método abstrato responsável por clonar o objeto;
     */
    abstract public function __clone();

    /**
     * Get the value of titulo
     */ 
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * Set the value of titulo
     * @param String $titulo - Titulo do livro 
     * @return  self
     */ 
    public function setTitulo(string $titulo)
    {
        $this->titulo = $titulo;

        return $this;
    }

    /**
     * Get the value of assunto
     */ 
    public function getAssunto()
    {
        return $this->assunto;
    }

    /**
     * Set the value of assunto
     * @param String $assunto - Assunto do livro.
     * @return  self
     */ 
    public function setAssunto(string $assunto)
    {
        $this->assunto = $assunto;

        return $this;
    }

    /**
     * Get the value of nomeTitular
     */ 
    public function getNomeTitular()
    {
        return $this->nomeTitular;
    }

    /**
     * Set the value of nomeTitular
     * @param String $nomeTitular - Nome do titular (Capa do livro)
     * @return  self
     */ 
    public function setNomeTitular(string $nomeTitular)
    {
        $this->nomeTitular = $nomeTitular;

        return $this;
    }
}
