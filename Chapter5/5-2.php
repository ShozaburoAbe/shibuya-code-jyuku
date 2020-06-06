<?php
  class decoctANDdechex {
  
    private function convertNum($num) {
      $decoct = decoct($num);
      $dechex = dechex($num);
      echo "8進数では{$decoct}です。\n";
      echo "16進数では{$dechex}です。";
    }

    public function readNum() {
      echo "整数：";
      $num = trim(fgets(STDIN));
      $this->convertNum($num);
    }
  }

  $changeNum = new decoctANDdechex;
  $changeNum->readNum();
?>