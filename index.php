<?php
declare(strict_types=1);

require 'Suit.php';
require 'Card.php';
require 'Deck.php';
require 'Player.php';
require 'blackjack.php';
session_start();
$blackJack = new Blackjack();
$_SESSION["blackJack"] = $blackJack;
require 'view.php';





