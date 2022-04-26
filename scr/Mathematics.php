<?php

namespace Mathematics;

class Mathematics
{
    public function sum($a, $b)
    {
       return $a+ $b;
    }
    public function divide($a, $b)
    {
        return $a / $b;
    }
    public function multiplication($a, $b)
    {
        return $a * $b;
    }
    public function difference($a, $b)
    {
        return $a - $b;
    }
    public function exponentiation($a, $b)
    {
        return pow($a, $b);
    }
}