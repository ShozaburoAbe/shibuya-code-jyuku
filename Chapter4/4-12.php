<?php
  function count2zero() {
  echo "カウントダウンします。\n";
  echo "正の整数値：";
  $stdinNum = trim(fgets(STDIN));
  for($i = $stdinNum; $i >= 0; $i--) {
    echo $i."\n";
  }
  }
  count2zero();
?>