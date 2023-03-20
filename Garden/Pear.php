<?php

require_once 'Fruit.php';

class Pear extends Fruit
{
    private float $weight = 0.18;

    /**
     * @return float
     */
    public function getWeight(): float
    {
        return $this->weight;
    }

    /**
     * @param float $weight
     */
    public function setWeight(float $weight): void
    {
        $this->weight = $weight;
    }
}