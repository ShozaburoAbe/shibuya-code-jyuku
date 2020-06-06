<?php
  function checkseason($m) {
    // (!($m >= 1 && $m <= 12)) && $r = "そんな月はありません。";
    switch ($m) {
      case 3;
      case 4;
      case 5;
        $r = "春";
      break;
      case 6;
      case 7;
      case 8;
        $r = "夏";
      break;
      case 9;
      case 10;
      case 11;
        $r = "秋";
      break;
      case 12;
      case 1;
      case 2;
        $r = "冬";
      break;
      default:
        $r = "そんな月はありません。";
    }
    echo $r;
  }
  echo "何月ですか？";
  $stdin = trim(fgets(STDIN));
  checkseason($stdin);
?>