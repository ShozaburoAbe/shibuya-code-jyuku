<?php
  class ShowPyramid {
    public function putstars() {
      echo "左下直角の三角形を表示します。\n段数は：";
      $numRow = trim(fgets(STDIN));
      for ($i = 0; $i <= $numRow; $i++) {
        for ($j = 0; $j <= $i; $j++) {
          echo "*"; 
        }
        echo "\n";
      }
    }
  }
  $inst = new ShowPyramid;
  $inst->putstars();
?>