<?php
  function getSquare() {
    echo "正方形を表示します。\n段数は：";
    $stdin = trim(fgets(STDIN));
    for($i = 1; $i <= pow($stdin, 2); $i++) {
      print "*";
      if ($i % $stdin == 0) print "\n";
    }
  }
  getSquare();

  // function getSquare() {
  //   echo "正方形を表示します。\n段数は：";
  //   $stdin = trim(fgets(STDIN));
  //   for($i = 1; $i <= $stdin; $i++) {
  //     for($j = 1; $j <= $stdin; $j++) {
  //       echo "*";
  //     }
  //     echo "\n";
  //   }
  // }
  // getSquare();
?>