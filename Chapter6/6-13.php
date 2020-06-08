<?php
  function shuffleNums() {
    echo "要素数：";
    $n = trim(fgets(STDIN));
    $a = [];
    for ($i = 0; $i < $n; $i++) {
      echo "a[{$i}] = ";
      $inputNum = trim(fgets(STDIN));
      for ($j = 0; ; $j++) {
        $randNum = rand(0, $n - 1);
        if (!array_key_exists($randNum, $a)) {
          $a[$randNum] = $inputNum;
        break;
        }
      }
      ksort($a);
      
    }
    echo "要素をかき混ぜました。\n";
    foreach ($a as $key => $number) {
      echo "a[$key] = $number\n";
    } 
  }
  shuffleNums();
?>