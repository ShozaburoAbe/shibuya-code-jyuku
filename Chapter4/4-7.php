<?php
  function showstars() {
    echo "何個*を表示しますか？";
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
      echo "*";
    }
  }
  showstars();
?>