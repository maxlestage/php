<?php
$array1 = ["test1" => 1991, "test2" => 1995, "test3" => 1992];

arsort($array1);

foreach ($array1 as $key => $item) {
  echo $item;
  echo " - ";
  echo $key;
  echo "      ";
}
