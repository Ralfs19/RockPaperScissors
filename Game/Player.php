<?php

class Player
{
    //  NAV Pabeigts bet pabeigsu.
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