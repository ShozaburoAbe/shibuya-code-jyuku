<?php
  function guessNum() {
    echo "数当てゲーム開始!!\n0〜99の数を当ててください。\n";
    $randNum = rand(0, 99);
    for ($i = 0; $i < 6; $i++) {
      $rest = 6 - $i;
      echo "残り{$rest}回。いくつかな：";
      $num = trim(fgets(STDIN));
      if ($randNum > $num) {
        echo "もっと大きな数だよ。\n";
      } elseif ($randNum < $num) {
        echo "もっと小さな数だよ。\n";
      } elseif ($randNum == $num) {
        $count = $i + 1;
        echo "{$count}回で当たりましたね。";
        break;
      } else continue;
      
    }
    echo "残念。正解は{$randNum}でした。";
      
  }
  guessNum();
?>