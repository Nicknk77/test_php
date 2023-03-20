<?php


class Fruit
{
    public function __construct (
        private string  $regNumber,
        private int $qty
    ) {}
    /**
     * @return string
     */
    public function getRegNumber(): string{
        return $this->regNumber;
    }

    /**
     * @param string $regNumber
     */
    public function setRegNumber(string $regNumber): void
    {
        $this->regNumber = $regNumber;
    }

    /**
     * @return int
     */
    public function getQty(): int
    {
        return $this->qty;
    }

    /**
     * @param int $qty
     */
    public function setQty(int $qty): void
    {
        $this->qty = $qty;
    }

    /**
     * @return float
     */

}