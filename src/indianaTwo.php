<?php

$indiana_movies = [
  "Les Aventuriers de l'arche perdue" => [
    "Harrison Ford",
    "Karen Allen",
    "Paul Freeman",
  ],
  "Indiana Jones et la dernière croisade" => [
    "Harrison Ford",
    "Sean Connery",
    "Denholm Elliott",
  ],
  "Indiana Jones et le Temple maudit" => [
    "Harrison Ford",
    "Kate Capshaw",
    "Ke Huy Quan",
  ],
];

foreach ($indiana_movies as $title => $actors) {
  echo " Dans le film $title, les principaux acteurs sont : \n ";
  foreach ($actors as $actor) {
    echo " - $actor \n ";
  }
}
