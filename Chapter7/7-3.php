<?php
  class GetNum {
    public function method() {
      for ($i = "a"; $i <= "c"; $i++) {
        echo "整数{$i}：";
        $stdin = trim(fgets(STDIN));
        $nums[$i] = $stdin;
      }
      sort($nums);
      $midNum = array_slice($nums, 1);
      echo "中央値は{$midNum[0]}です。";
    }
  }
  $inst = new GetNum;
  $inst->method();
?>