<?php

namespace pph21;


class SecondRule extends AbstractCals
{
    function maxPkp(): float
    {
        return 250000000;
    }
    
    function minPkp(): float
    {
        return 50000000;
    }

    function taxPercentage(): float
    {
        return 0.15;
    }
}


?>