<?php
  function checkScore($p) {
    if ($p >= 0 && $p <= 59) {
      echo "不可";
    } elseif ($p >= 60 && $p <= 69) {
      echo "可";
    } elseif ($p >= 70 && $p <= 79) {
      echo "良";
    } elseif ($p >= 80 && $p <= 100) {
      echo "優";
    } else {
      echo "不正な点数です。";
    }
  }
  echo "点数：";
  $stdin = fgets(STDIN);
  checkScore($stdin);
?>