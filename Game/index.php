<?php
require_once 'Player.php';
require_once 'Game.php';
require_once 'elements.php';

$player1 = new Player('JU');
$player2 = new Player('JE');

$rock = new Elements('Rock');
$paper = new Elements('Paper',);
$scissors = new Elements('Scissors');

$rock->setBeats($scissors);
$paper->setBeats($rock);
$scissors->setBeats($paper);

$elements = [
    $rock,
    $paper,
    $scissors,
];

foreach ($elements as $key => $element){
    echo "[{$key}]{$element->getName()}" . PHP_EOL;
}

$selection = (int) readline('Enter element: ');

$player1 = $elements[$selection];

$player2 = $elements[array_rand($elements)];

$game = new Game($player1, $player2);
$winner = $game->getWinner();

echo "{$player1->getName()}  VS  {$player2->getName()}";
echo PHP_EOL;

if ($winner === null)
{
    echo 'The game is tie!' . PHP_EOL;
    exit;
}


echo "Winner: " .  $winner->getName();
echo PHP_EOL;