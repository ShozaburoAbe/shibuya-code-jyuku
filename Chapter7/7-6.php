<?php
  function showSeason() {
    echo "何月ですか？(1〜12)：";
    $m = trim(fgets(STDIN));
    if ($m >= 3 && $m <= 5) {
      $s = "春";
    } elseif ($m >= 6 && $m <= 8) {
      $s = "夏";
    } elseif ($m >= 9 && $m <= 11) {
      $s = "秋";
    } else {
      $s = "冬";
    }
    echo "その月の季節は{$s}です。";
  }
  showSeason();
?>