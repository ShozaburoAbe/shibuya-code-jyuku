<?php
  function guess2digitsnum() {
    $randnum = rand(10, 99);

    echo "数当てゲーム開始！！\n10〜99の数を当ててください。\n";
    do {
      echo "いくつかな：";
      $stdin = trim(fgets(STDIN));
      $hint = ($stdin == $randnum) ? "" : (($stdin > $randnum) ? "もっと小さな数だよ。\n" : "もっと大きな数だよ。\n");
      echo $hint;
    } while ($randnum != $stdin);
    echo "正解です。";
  }
  guess2digitsnum();
?>