<?php
  class showNums {

    private function showResult($c, $num, $numofline) {
      echo "配列cの各要素の値は次のようになっています。\n";
      for ($i = 0; $i < $numofline; $i++) {
        for ($j = 0; $j < $num[$i]; $j++) {
          echo $c[$i][$j] . "  ";
        }
        echo "\n";
      }
    }

    protected function inputProps($num, $numofline) {
      for ($i = 0; $i < $numofline; $i++) {
        for ($j = 0; $j < $num[$i]; $j++) {
          echo "c[$i][$j]：";
          $prop = trim(fgets(STDIN));
          $c[$i][$j] = $prop;
          // echo $c[$i][$j];
        }
      }
      return $c;
    }

    private function getNumofLine($numofline) {
      for ($i = 0; $i < $numofline; $i++) {
        echo "{$i}行目の列数："; 
        $stdin = trim(fgets(STDIN));
        $num[$i] = $stdin;
      }
      // var_dump($num);
      return $num;
    }
    
    public function introHandler() {
      echo "凹凸な２次元配列を作ります。\n";
      echo "行数：";
      $numofline = trim(fgets(STDIN));
      $num = $this->getNumofLine($numofline);
      $c = $this->inputProps($num, $numofline);
      $this->showResult($c, $num, $numofline);
    }

  }

  $inst = new showNums;
  $inst->introHandler();
?>