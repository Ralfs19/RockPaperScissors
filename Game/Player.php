<?php

class Player
{
    private Elements $beats;
    private string $player;

    public function __construct(string $player)
    {
        $this->player = $player;
    }
    public function getPlayer(): string
    {
        return $this->player;
    }

}