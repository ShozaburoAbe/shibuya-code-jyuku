<?php
  function showstars() {
    echo "何個*を表示しますか：";
    $stdin = trim(fgets(STDIN));
    for ($i = 1; $i <= $stdin; $i++) {
      echo "*";
      if ($i % 5 === 0) {
        echo "\n";
      }
    }
  }
  showstars();
?>