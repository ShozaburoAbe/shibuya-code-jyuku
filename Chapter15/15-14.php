<?php

  $radius = $argv[1];
  $circle = round(2 * $radius * pi(), 2);
  $area = round($radius * $radius * pi(), 2);
  echo "半径{$radius}の円周は{$circle}で面積は{$area}です。";
?>