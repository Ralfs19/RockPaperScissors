<?php

class Game
{
    private Elements $atacker;
    private Elements $defender;

    public function __construct(Elements $atacker, Elements $defender)
    {
        $this->atacker = $atacker;
        $this->defender = $defender;
    }
    public function getWinner(): ?Elements
    {
        if ($this->atacker->getName() === $this->defender->getName())
        {
            return null;
        }
        if ($this->atacker->getBeats()->getName() === $this->defender->getName())
        {
            return $this->atacker;
        }
        return $this->defender;
    }

}