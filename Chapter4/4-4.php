<?php
  // function getBetweenNums(...$nums) {
  //   sort($nums);
  //   $smallN = $nums[0];
  //   $largeN = $nums[1];
  //   while($largeN >= $smallN) {
  //     $numBet = $smallN++;
  //     echo $numBet . "  ";
  //   }
  // }
  // echo "整数値A：";
  // $stdinA = trim(fgets(STDIN));
  // echo "整数値B：";
  // $stdinB = trim(fgets(STDIN));
  // getBetweenNums($stdinA, $stdinB);

  class sortNums {

    private function createNums($bigNum, $smallNum) {
      for ($i = $smallNum; $i <= $bigNum; $i++) {
        echo $i . " ";
      }
    }

    private function getNums() {
      echo "整数A：";
      $numA = trim(fgets(STDIN));
      echo "整数B：";
      $numB = trim(fgets(STDIN));
      return [$numA, $numB];
    }

    public function sortNumbers() {
      list($numA, $numB) = $this->getNums();
      ($numA > $numB) ? $this->createNums($numA, $numB) : $this->createNums($numB, $numA);
    }

  }
  $inst = new sortNums;
  $inst->sortNumbers();

?>