<?php

class Player
{
    private Elements $element;
    private string $name;

    public function __construct(string $name, Elements $element)
    {
        $this->name = $name;
        $this->element = $element;
    }
    public function getName(): string
    {
        return $this->name;
    }
    public function getElement(): Elements
    {
        return $this->element;
    }

}