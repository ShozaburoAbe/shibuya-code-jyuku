<?php
  function checkequality() {
    echo "整数xをnにビットシフトします。\n";
    echo "x：";
    $x = trim(fgets(STDIN));
    echo "n：";
    $n = trim(fgets(STDIN));
    $pow = pow(2, $n); 
    $answerA = $x * $pow;
    echo "[a] x × (2の{$n}乗) = {$answerA}\n";
    $answerB = floor($x / $pow);
    echo "[a] x ÷ (2の{$n}乗) = {$answerB}\n";
    $shiftC = $x << $n;
    echo "[c] x << {$n} = {$shiftC}\n"; 
    $shiftD = $x >> $n;
    echo "[d] x >> {$n} = {$shiftD}\n";
    echo "[a]と[c]の値は一致";
    echo ($answerA == $shiftC) ? "します。\n" : "しません。\n";
    echo "[b]と[d]の値は一致";
    echo ($answerB == $shiftD) ? "します。\n" : "しません。\n";
  }
  checkequality();
?>