<?php
  echo "整数値：";
  $stdin = fgets(STDIN);
  $r = ($stdin == 0) ? "0" : (($stdin > 0) ? "正" : "負");
  echo "その値は".$r."です。"; 
?>