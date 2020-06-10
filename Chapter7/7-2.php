<?php
  class GetNum {
    public function method() {
      for ($i = "a"; $i <= "c"; $i++) {
        echo "整数{$i}：";
        $stdin = trim(fgets(STDIN));
        $nums[$i] = $stdin;
      }
      $minNum = min($nums);
      echo "最小値は{$minNum}です。";
    }
  }
  $inst = new GetNum;
  $inst->method();
?>