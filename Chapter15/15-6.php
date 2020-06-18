<?php
  function matchCheck() {
    echo "文字列s1：";
    $s1 = trim(fgets(STDIN));
    echo "文字列s2：";
    $s2 = trim(fgets(STDIN));
    $index = strpos($s1, $s2);
    echo $s1 . "\n";
    for ($i = 0; $i < $index; $i++) {
      echo " ";
    }
    echo $s2;
  } 
  matchCheck();

  // function searchString() {
  //   echo "文字列s1：";
  //   $s1 = trim(fgets(STDIN));
  //   echo "文字列s2：";
  //   $s2 = trim(fgets(STDIN));
  //   $index = strpos($s1, $s2);
  //   echo "{$index}文字目にマッチします。\n";
  //   echo $s1 . "\n";
  //   for ($i = 0; $i < $index; $i++) {
  //     echo " ";
  //   }
  //   echo $s2;
  // }
  // searchString();
?>