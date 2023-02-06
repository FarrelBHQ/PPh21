<?php

namespace pph21;

final class Pph21Cals 
{
    private $calculator;

    function __construct(CalsInterface ...$calculator)
    {
        $this->calculator = $calculator;
    }

    function cals (float $pkp) : float
    {
        foreach ($this->calculator as $calc) {
            if ($pkp < $calc -> maxPkp() && $pkp >= $calc->minPkp())
            return $calc->cals($pkp);
        }
    }

}



?>
