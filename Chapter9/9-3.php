<?php

  class Human {

    private $name;
    private $height;
    private $weight;
    private $num;

    protected function printIds($name, $height, $weight, $num) {
      for ($h = 0, $i = "p"; $h <= 10; $h++, $i++) {
        echo "■配列{$i}\n";
        for ($j = 0; $j < $num[$i]; $j++) {
          echo "No.{$j} {$name[$i][$j]} {$height[$i][$j]} {$weight[$i][$j]}\n";
        }
      }
    }

    public function getIds() {
      for ($h = 0, $i = "p"; $h <= 10; $h++, $i++) {
        echo "■配列{$i}の要素数：";
        $num[$i] = trim(fgets(STDIN));
        for ($j = 0; $j < $num[$i]; $j++) {
          echo "名前：";
          $name[$i][$j] = trim(fgets(STDIN));
          echo "身長：";
          $height[$i][$j] = trim(fgets(STDIN));
          echo "体重：";
          $weight[$i][$j] = trim(fgets(STDIN));
        }
      }
      $this->printIds($name, $height, $weight, $num);
    }

    public function printIdsHandler() {
      $this->getIds();
    }

  }
  $inst = new Human;
  $inst->printIdsHandler();
?>