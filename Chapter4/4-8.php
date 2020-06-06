<?php
  function showsymbols() {
    echo "何個表示しますか？";
    $num = trim(fgets(STDIN));
    for ($i = 0; $i < $num; $i++) {
      if ($i % 2 == 0) {
        echo "*";
      } else {
        echo "+";
      }
    }
  }
  showsymbols();
?>