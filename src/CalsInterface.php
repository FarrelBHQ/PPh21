<?php
namespace pph21;

interface CalsInterface
{
    function cals (float $pkp) : float;

    function maxPkp() : float;
    function minPkp() : float;

    function taxPercentage() : float;
}



?>