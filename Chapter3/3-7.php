<?php
  echo "変数a：";
  $stdinA = fgets(STDIN);
  echo "変数b：";
  $stdinB = fgets(STDIN);

  if ($stdinA > $stdinB) {
    echo "aのほうが大きいです。";
  } elseif ($stdinB > $stdinA) {
    echo "bのほうが大きいです。";
  } else {
    echo "aとbは同じ値です。";
  }
?>