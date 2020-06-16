<?php

  class IntergerLimits {

    public function showThem() {
      echo "整数型の表現範囲\n";
      echo "byte 型：-128〜127\n";
      echo "short型：";
    
      echo "int  型：";
      echo "long 型：";
    }
  }
  $inst = new IntergerLimits;
  $inst->showThem();
?>