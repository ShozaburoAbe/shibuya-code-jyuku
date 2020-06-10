<?php
    function rRotate($binX, $n) {
      $rRotate = $binx << $n;
      return $rRotate;
    }
  
    function lRotate($binX, $n) {
      $lRotate = $binX >> $n;
      return $lRotate;
    }

  function bitNum() {
    echo "整数xをnビット回転します。\n";
    echo "x：";
    $x = trim(fgets(STDIN));
    echo "n：";
    $n = trim(fgets(STDIN));
    $binX = decbin($x);
    echo "回転前 = {$binX}\n";
    $rRotate = rRotate($binX, $n);
    echo "右回転 = {$rRotate}\n";
    $lRotate = lRotate($binX, $n);
    echo "左回転 = {$lRotate}";
  }
  bitNum();
?>