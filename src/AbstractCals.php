<?php

namespace pph21;

abstract class AbstractCals implements CalsInterface
{
    private $chain;

    function __construct(?CalsInterface $chain = null)
    {
        $this->chain = $chain;
    }

    function cals (float $pkp) : float
    {
        $prevvalue =  0;
        if ($previous = $this->chain){
            $prevvalue = $this->chain->cals($previous->maxPkp());
            $pkp -= $previous->maxPkp();
        }

        return ($this->taxPercentage() * $pkp) + $prevvalue;
    }

    

}


?>