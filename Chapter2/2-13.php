<?php
  function rand_float($min=0, $max=1) {
    $randnum = $min + mt_rand() / mt_getrandmax() * ($max - $min);
    return $randnum;
  }
  echo "3個の乱数を生成しました。\n";
  echo "0.0以上1.0未満：".rand_float(0.0, 1.0) ."\n";
  echo "0.0以上10.0未満：".rand_float(0.0, 10.0) ."\n";
  echo "-1.0以上1.0未満：".rand_float(-1.0, 1.0);
?>