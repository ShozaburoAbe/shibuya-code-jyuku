<?php
  function sortNum(...$nums) {
    rsort($nums);
    echo "a>=bとなるようにソートしました。\n";
    echo "変数aは{$nums[0]}です\n";
    echo "変数bは{$nums[1]}です";
  }
  echo "整数a：";
  $stdina = trim(fgets(STDIN));
  echo "整数b：";
  $stdinb = trim(fgets(STDIN));
  sortNum($stdina, $stdinb);
?>