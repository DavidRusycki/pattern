<?php
namespace singleton;

/**
 * Classe de logs.
 * @pattern Singleton
 */
class LogsSingleton {

    /** @var self $instancia Instância da classe de logs. */
    protected static $instancia;

    /**
     * Grava os logs no arquivo de texto.
     * @param Array $aDados
     */
    public function gravarLog(Array $aDados): void {

    }

}