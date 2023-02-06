<?php

namespace pph21;


class FourthRule extends AbstractCals
{
    function maxPkp(): float
    {
        return 999999999999999999999999999999999;
    }
    
    function minPkp(): float
    {
        return 500000000;
    }

    function taxPercentage(): float
    {
        return 0.3;
    }
}


?>