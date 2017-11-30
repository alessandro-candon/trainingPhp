<?php

namespace src;

require_once __DIR__ . '/../bootstrap.php';

class Calculator
{

    /**
     * @param int $a
     * @param int $b
     * @return int
     */
    public function sum($a, $b)
    {
        return $a + $b;
    }

}