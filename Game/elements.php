<?php

class Elements
{
    private string $name;
    private array $wins = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getWins(): array
    {
        return $this->wins;
    }
    public function setWins(Elements ...$elements): void
    {
        foreach ($elements as $element){
            $this->wins[] = $element;
        }
    }
}
