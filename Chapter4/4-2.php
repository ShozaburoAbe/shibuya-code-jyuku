<?php
// function threeDigits() {
//   do {
//     echo "三桁の正の整数値：";
//     $stdin = trim(fgets(STDIN));
//   } while (!($stdin >= 100 && $stdin <= 999));
//   echo "{$stdin}と入力しましたね。";
// }
// threeDigits()


class readNum {
  
    private function repeat() {
      $this->readit();
    }
    protected function answer($num) {
      echo "{$num}と入力しましたね。";
    }
    public function readit() {
      echo "3桁の正の整数値：";
      $num = trim(fgets(STDIN));
      !($num >= 100 && $num <= 999) ? $this->repeat() : $this->answer($num);
    }
  }
  $instance = new readNum;
  $instance->readit();
?>