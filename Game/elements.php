<?php

class Elements
{
    private string $name;
    private Elements $beats;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getBeats(): ?Elements
    {
        return $this->beats;
    }
    public function setBeats(Elements $element): void
    {
        $this->beats = $element;
    }
}
