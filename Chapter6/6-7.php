<?php
  class checkPoints {

    private function calucPoints($points) {
      $sum = array_sum($points);
      $aver = $sum / count($points);
      sort($points);
      list($highP) = array_splice($points, -1);
      list($lowP) = array_splice($points, 0);
      echo "合計点は{$sum}です。\n";
      echo "平均点は{$aver}です。\n";
      echo "最高点は{$highP}です。\n";
      echo "最低点は{$lowP}です。";
    }

    protected function getPoints($peopNum) {
      $a = [];
      echo "点数を入力せよ。\n";
      for ($i = 1; $i <= $peopNum; $i++) {
        echo "{$i}番の点数：";
        $point = trim(fgets(STDIN));
        array_push($a, $point);
      }
      return $a;
    }

    private function checkpeop() {
      echo "人数：";
      $peopNum = trim(fgets(STDIN));
      return $peopNum;
    }

    public function checkHandler() {
      $peopNum = $this->checkpeop();
      $a = $this->getPoints($peopNum);
      $this->calucPoints($a);
    }

  }
  $instanse = new checkPoints;
  $instanse->checkHandler();
?>