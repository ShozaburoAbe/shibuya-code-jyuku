<?php
function powerNum() {
  echo "nの値：";
  $stdin = trim(fgets(STDIN));
  for ($i = 1; $i <= $stdin; $i++) {
    $powN = pow($i, 2);
    echo "{$i}の2乗は{$powN}\n";
  }
}
powerNum();
?>