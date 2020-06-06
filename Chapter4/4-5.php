<?php
  // function countto0() {
  //   echo "正の整数値：";
  //   $stdin = trim(fgets(STDIN));
  //   ($stdin > 0) ? "" : countto0();
  //   for ($i= &$stdin;; $i--) { 
  //     echo $i."\n";
  //     if ($i == 0) break;
  //   }
  //   echo "xの値は{$stdin}になりました。";
  // }
  // echo "カウントダウンします。\n";
  // countto0();


  function count2zero() {
    echo "カウントダウンします。\n";
    do {
      echo "正の整数値：";
      $stdin = trim(fgets(STDIN));
    } while ($stdin <= 0);

    while($stdin >= 0) {
      echo $stdin--."\n";
    }
    echo "xの値は{$stdin}になりました。";
  }
  count2zero();
?>