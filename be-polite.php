<?php

$hour = date('H');

if ($hour >= 6 && $hour <= 12) {
    echo "Bonjour! Passez une bonne journée :)";
} elseif ($hour > 12 && $hour <= 18) {
    echo "Passez une bonne après-midi!";
} elseif ($hour > 18 && $hour <= 21) {
    echo "Bonsoir! J'espère que vous avez passé une bonne journée!";
} else {
    echo "Bonne nuit! À demain :)";
}

?>