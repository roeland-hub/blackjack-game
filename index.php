<?php
declare(strict_types=1);
//samenstelling
require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'blackjack.php';
require 'Dealer.php';

session_start();
//if all parameters are true
if (!isset($_SESSION["blackJack"])) {
    $blackJack = new Blackjack();
    $_SESSION["blackJack"] = $blackJack;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST["hit"]) {
        $_SESSION["blackJack"]->getPlayer()->hit($_SESSION["blackJack"]->getDeck());
        return $_SESSION["blackJack"]->getPlayer()->hasLost();
    }
    if ($_POST["stand"]) {
        $_SESSION["blackJack"]->getDealer()->hit($_SESSION["blackJack"]->getDeck());
    }
    if ($_POST["surrender"]) {
        $_SESSION["blackJack"]->getPlayer()->surrender();
    }
}

require 'view.php';



