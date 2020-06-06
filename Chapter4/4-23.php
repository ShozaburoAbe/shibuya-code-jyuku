<?php
  // function createPyramid() {
  //   echo "ピラミッドを表示します。\n段数は：";
  //   $stdin = trim(fgets(STDIN));
  //   for($i = 1; $i <= $stdin; $i++) {
  //     for($j = 1; $j <= $stdin - $i; $j++) {
  //       echo " ";
  //     }
  //     for($j = 1; $j <= 2 * $i -1; $j++) {
  //       echo "*";
  //     }
  //     echo "\n";
  //   }
  // }
  // createPyramid();

  function givebirthtoPyramid() {
    echo "ピラミッドを表示します。\n段数は：";
    $stdin = trim(fgets(STDIN));
    for ($i = 1; $i <= $stdin; $i++) {
      for ($j = 1; $j <= ($stdin - $i) ; $j++) {
        echo " ";
      }
      for ($k = 1, $star = 1; $k <= 2 * $i - 1; $k++) {
        echo "*";
      }
      echo "\n";
    }
  }
  givebirthtoPyramid();
?>