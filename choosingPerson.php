<?php

$players = array("Meena", "Vanessa", "Margaret", "Tyler", "Jabari");
$numberOfPlayers = count($players);
$index = $numberOfPlayers - 1;

echo $numberOfPlayers."<br/>";
echo "The index is: ".$index."<br/>";
echo "Here are all the players: ";


for($x = 0; $x < $numberOfPlayers; $x++) {
  echo $players[$x];
  echo " ";
  echo $x." ";
}
$randomNumber = rand(0, $index);
echo"<br/>";
echo "The random number index is ".$randomNumber."<br/>";
echo "The player that will go first is: ".$players[$randomNumber];