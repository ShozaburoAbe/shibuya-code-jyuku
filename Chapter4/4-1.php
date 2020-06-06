<?php
  // function continueoNo() {
  //   echo "もう一度？ 1･･･Yes/0･･･No：";
  //   $yesoNo = trim(fgets(STDIN));
  //   switch($yesoNo) {
  //     case 1:
  //       echo "整数値：";
  //       $stdin = trim(fgets(STDIN));
  //       checkPosoNeg($stdin);
  //       break;
  //     case 0;
  //       break;
  //     default:
  //       echo "１か０のどちらかでお答えください。\n";
  //       continueoNo();
  //   }
  // }

  // function checkPosoNeg($n) {
  //   $r = ($n >= 0) ? "正" : "負";
  //   echo "その値は{$r}です。\n";
  //   continueoNo();
  // }

  // echo "整数値：";
  // $stdin = trim(fgets(STDIN));
  // checkPosoNeg($stdin);


  function checkPositiveoNegative() {
    do {
      echo "整数値：";
      $stdin = trim(fgets(STDIN));
      $r = ($stdin >= 0) ? "正" : "負";
      echo "その値は{$r}です。\n"; 
      echo "もう一度？ 1･･･Yes/0･･･No：";
      $answer = trim(fgets(STDIN)); 
    } while ($answer == 1);
  }
  checkPositiveoNegative();


  class PosNeg {

    private function repeat() {
      echo "もう一度？ 1...Yes／2...No：";
      $a = trim(fgets(STDIN));
      ($a == 1) && $this->getNum();
    }

    private function showResult($num) {
      $r = ($num % 2 == 0) ? "その値は正です。" : "その値は負です。";
      echo $r;
    }

    public function getNum() {
      echo "整数値：";
      $stdin = trim(fgets(STDIN));
      $this->showResult($stdin);
      $this->repeat();
    }
  }
  $positiveOrNegative = new PosNeg;
  $positiveOrNegative->getNum();
?>