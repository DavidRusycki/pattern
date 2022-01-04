<?php
namespace Patterns\Singleton;

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
        $sArquivo = 'logs.txt';

        $aLogsAnteriores = [];
        if (filesize($sArquivo) > 0) {
            $sConteudo = file_get_contents($sArquivo);

            $aLogsAnteriores = json_decode($sConteudo, true);
        }

        $aLogsAnteriores[] = $aDados;

        $arquivo = fopen($sArquivo, 'W'); 
        fwrite($arquivo, json_encode($aLogsAnteriores));
        fclose($arquivo);
    }

    /**
     * Retorna a intância da classe, criando a mesma caso ela não exista.
     * @return Self
     */
    public static function obterInstancia(): self {
        if (empty(self::$instancia)) {
            self::$instancia = new self();
        }

        return self::$instancia;
    }

    public function __construct() {
        $oInstancia = null;
        for ($i=0; $i < 5000; $i++) { 
            $oInstancia = new \Valuation\EstimateTime();
        }
    }
    
    private function __clone() {}
    
}