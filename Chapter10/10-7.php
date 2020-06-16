<?php

  class MinMax {

    public function getProps() {
      echo "xの値：";
      $this->x = trim(fgets(STDIN));
      echo "yの値：";
      $this->y = trim(fgets(STDIN));
      echo "zの値：";
      $this->z = trim(fgets(STDIN));
      echo "配列aの要素数：";
      $eleNum = trim(fgets(STDIN));
      for ($i = 0; $i < $eleNum; $i++) {
        echo "a[{$i}] = ";
        $this->a[$i] = trim(fgets(STDIN));
      }
    }

    protected function searchIndex($number) {
      foreach($this->a as $key => $n) {
        if ($n == $number) {
          $index[$key] = $key;
        }
      }
      $array = implode(" ", $index);
      echo "そのインデックスは{{$array}}です。\n";
    }

    public function showResult() {
      $nums = [$this->x, $this->y];
      sort($nums);
      echo "x, yの最小値は{$nums[0]}です。\n";
      echo "x, yの最大値は{$nums[1]}です。\n";
      $allnums = [$this->x, $this->y, $this->z];
      sort($allnums);
      echo "x, y, zの最小値は{$allnums[0]}です。\n";
      echo "x, y, zの最大値は{$allnums[2]}です。\n\n";

      $sortedArray = $this->a;
      sort($sortedArray);
      $min = min($sortedArray);
      $max = max($sortedArray);
      echo "配列aの最小値は{$min}です。\n";
      $minIndex = $this->searchIndex($min);
      echo "配列aの最大値は{$max}です。\n";
      $maxIndex = $this->searchIndex($max);

    }


  }
  $inst = new MinMax();
  $inst->getProps();
  $inst->showResult();
?>