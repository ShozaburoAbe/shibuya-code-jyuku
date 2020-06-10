<?php
  // for ($i = 2; $i <= 33; $i++) {
  //   $fp = fopen("7-{$i}.php", "w");
  // fwrite($fp, "<?php?\>");
  // }
  
  function checkNum() {
    echo "整数：";
    $stdin = trim(fgets(STDIN));
    if ($stdin == 0) {
      $r = 0;
    } elseif ($stdin > 0) {
      $r = 1;
    } else {
      $r = -1;
    }
    // $r = ($stdin == 0) ? 0 : ($stdin > 0) ? 1 : -1;
    echo "singOf(x)は{$r}です。";
  }
  checkNum();

?>