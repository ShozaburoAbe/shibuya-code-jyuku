<?php
  class Day {

    private function copyday($day1) {
      echo "day2をday1と同じ日付として作りました。\n";
      $day2 = $day1;
      $this->printDays($day2[0], $day2[1], $day2[2], "day2");
      echo "day1とday2は等しいです。\n";
    }

    public function printDays($year, $month, $day, $ndDay) {
      $datetime = new DateTime();
      $datetime->setDate($year, $month, $day);
      $week = array("日", "月", "火", "水", "木", "金", "土");
      $w = (int)$datetime->format('w');
      echo "{$ndDay} = {$year}年{$month}月{$day}日({$week[$w]})\n";
    }
    public function inputDays() {
      echo "day1を入力せよ。\n";
      echo "年：";
      $year = trim(fgets(STDIN));
      echo "月：";
      $month = trim(fgets(STDIN));
      echo "日：";
      $day = trim(fgets(STDIN));
      $day1 = [$year, $month, $day];
      $this->printDays($year, $month, $day, "day1");
      $this->copyday($day1);
    }
  }

  $inst = new Day;
  $inst->inputDays();
  $others = new Day;
  $others->printDays("0001", "01", "01", "d1  ");
  $others->printDays("2010", "01", "01", "d2  ");
  $others->printDays("2010", "10", "01", "d3  ");
  $others->printDays("2010", "01", "01", "d4  ");

  for ($i = 0; $i < 3; $i++) {
    $others->printDays("0001", "01", "01", "a[$i]");
  }

?>