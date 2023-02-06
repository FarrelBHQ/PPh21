<?php

class PPH21Cals 
{
    private function firstRule(float $pkp) : float {
        if (0 < $pkp && 50000000 >= $pkp ){
            return $pkp * 0.05;
        }
        return 0;
    }

    private function secondRule(float $pkp) : float {
        if (50000000 < $pkp && 250000000 >= $pkp ){
            $pkp -= 50000000;
            $prev = $this->firstRule(50000000);
            return ($pkp * 0.15) + $prev;
        }
        return 0;
    }

    private function thirdRule(float $pkp) : float {
        if (250000000 < $pkp && 500000000 >= $pkp ){
            $pkp -= 250000000;
            $prev = $this->secondRule(250000000);
            return ($pkp * 0.25) + $prev;
        }
        return 0;
    }

    private function fourthRule(float $pkp) : float {
        if (500000000 < $pkp && 999999999999999999999999999 >= $pkp ){
            $pkp -= 500000000;
            $prev = $this->thirdRule(500000000);
            return ($pkp * 0.3) + $prev;
        }
        return 0;
    }


    public function Calculate (float $pkp) : float
    {
        return $this->firstRule($pkp) ?: $this->secondRule($pkp) ?: $this->thirdRule($pkp) ?: $this->fourthRule($pkp) ;
    }
}

$pph21 = new PPH21Cals;

echo $pph21->Calculate(3500000);
echo PHP_EOL;
echo $pph21->Calculate(10000000);
echo PHP_EOL;
echo $pph21->Calculate(50000000);
echo PHP_EOL;
echo $pph21->Calculate(100000000000);

?>

