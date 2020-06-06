<?php
  function sortNum(...$nums) {
    sort($nums);
    echo "a>=b>=cとなるようにソートしました。\n";
    echo "変数aは{$nums[0]}です\n";
    echo "変数bは{$nums[1]}です\n";
    echo "変数bは{$nums[2]}です";
  }
  echo "整数a：";
  $stdina = trim(fgets(STDIN));
  echo "整数b：";
  $stdinb = trim(fgets(STDIN));
  echo "整数c：";
  $stdinc = trim(fgets(STDIN));
  sortNum($stdina, $stdinb, $stdinc);
?>