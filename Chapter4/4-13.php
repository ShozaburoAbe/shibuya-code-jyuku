<?php
  function countFromzero() {
  echo "カウントアップします。\n";
  echo "正の整数値：";
  $stdinNum = trim(fgets(STDIN));
  for($i = 0; $i <= $stdinNum; $i++) {
    echo $i."\n";
  }
  }
  countFromzero();
?>