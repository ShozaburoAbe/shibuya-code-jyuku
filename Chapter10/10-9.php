<?php
  class Point2D {

    public static $year;
    public static $month;
    public static $day;
    public static $counter;

    public function __construct($x = 0, $y = 0) {
      $this->x = $x;
      $this->y = $y;
      self::$counter += 1;
      $this->showPoints($x, $y);
      $this->checkCount();
    }

    public function getDay() {
      echo "今日の日付\n";
      echo "年：";
      $year = trim(fgets(STDIN));
      self::$year = $year;
      echo "月：";
      $month = trim(fgets(STDIN));
      self::$month = $month; 
      echo "日：";
      $day = trim(fgets(STDIN));
      self::$day = $day;
    }

    private function showPoints($x, $y) {
      $a = self::$counter;
      echo "{$a} ({$x}, {$y})\n";
    }

    public function checkCount() {
      $c = self::$counter;
      if (self::$day == self::$counter) echo "『当たり！今日{$c}個目の座標が生成されました。』\n";

    } 
  }

  Point2D::getDay();
  for ($i = 0; $i < 40; $i++) {
    $inst1 = new Point2D();
  }

?>