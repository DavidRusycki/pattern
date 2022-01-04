<?php
namespace Valuation;

/**
 * Classe para criar estimativas de tempo.
 * @author David Rusycki
 */
class EstimateTime
{
 
    /**
     * Indica o tempo inicial.
     * @var float
     */
    private float|Null $initial = null;

    /**
     * Indica o tempo final.
     * @var float
     */
    private float|Null $final = null;

    /**
     * Retorna a diferença dos tempos.
     * @return string
     */
    public function getEstimate() : string {
        return intval((($this->getFinal() - $this->getInitial()) * 1000)) . ' ms';
    }

    /**
     * Limpa os valores dos atributos.
     */
    public function clear() : void {
        $this->setInitial(null);
        $this->setFinal(null);
    }

    /**
     * Get indica o tempo final.
     *
     * @return  floateger
     */ 
    public function getFinal() : float|null
    {
        return $this->final;
    }

    /**
     * Set indica o tempo final.
     *
     * @param  float  $final  Indica o tempo final.
     *
     * @return  self
     */ 
    public function setFinal(float|Null $final = null)
    {
        if (empty($final)) {
            $final = $this->getTime();
        }

        $this->final = $final;

        return $this;
    }

    /**
     * Get indica o tempo inicial.
     *
     * @return  float
     */ 
    public function getInitial() : float|Null
    {
        return $this->initial;
    }

    /**
     * Set indica o tempo inicial.
     *
     * @param  float  $initial  Indica o tempo inicial.
     *
     * @return  self
     */ 
    public function setInitial(float|Null $initial = null)
    {
        
        if (empty($initial)) {
            $initial = $this->getTime();
        }

        $this->initial = $initial;
        
        return $this;
    }

    /**
     * Retorna o tempo atual.
     * @return float
     */
    private function getTime() : float {
        return microtime(true);
    }

}
