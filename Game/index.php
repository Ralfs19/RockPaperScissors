<?php
require_once 'Player.php';
require_once 'Game.php';
require_once 'elements.php';

$rock = new Elements('Rock');
$paper = new Elements('Paper',);
$scissors = new Elements('Scissors');
$lizard = new Elements("Lizard");
$spock = new Elements("Spock");

$rock->setWins($lizard, $scissors);
$paper->setWins($spock, $rock);
$scissors->setWins($lizard, $paper);
$lizard->setWins($spock, $paper);
$spock->setWins($scissors, $rock);

$elements = [
    $rock,
    $paper,
    $scissors,
    $lizard,
    $spock,
];

foreach ($elements as $key => $element){
    echo "[{$key}]{$element->getName()}" . PHP_EOL;
}

$selection = (int) readline('Enter element: ');

$player1El = $elements[$selection];
$player2El = $elements[array_rand($elements)];
$player1 = new Player("Player", $player1El);
$player2 = new Player('Computer', $player2El);

$game = new Game($player1, $player2);
$winner = $game->getWinner();

echo $player1El->getName() . ' VS ' . $player2El->getName();
echo PHP_EOL;

if ($winner === null)
{
    echo 'The game is tie!' . PHP_EOL;
}else{
    echo "Winner: " . $winner->getName();
    echo PHP_EOL;
}


echo PHP_EOL;