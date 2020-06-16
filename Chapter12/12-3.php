<?php
  class Car {
    private $name;
    private $width;
    private $height;
    private $length;
    private $x;
    private $y;
    private $fuel;
    private $dayPurchased;
    private static $dist;

    public function __construct($name, $width, $height, $length, $fuel, $dayPurchased) {
      $this->name = $name; $this->width = $width; $this->height = $height; 
      $this->length = $length; $this->fuel = $fuel; $this->dayPurchased = $dayPurchased;
    }

    public function getX() {return $this->x;}
    public function getY() {return $this->y;}
    public function getFuel() {return $this->fuel;}
    public function getPurchasedDay() {
      $datetime = new DateTime();
      list($year, $month, $day) = $this->dayPurchased;
      $datetime->setDate($year, $month, $day);
      $week = array("日", "月", "火", "水", "木", "金", "土");
      $w = (int)$datetime->format('w');
      return "{$year}年{$month}月{$day}日({$week[$w]})";
    }

    public function putSpec() {
      echo "名前：{$this->name}\n";
      echo "車幅：{$this->width}mm\n";
      echo "車高：{$this->height}mm\n";
      echo "車長：{$this->length}mm\n";
    }

    public function move($dx, $dy) {
      $this->dist = sqrt($dx * $dx + $dy * $dy);

      if ($this->dist > $this->fuel) {
        return false;
      } else {
        $this->fuel -= $this->dist;
        $this->x += $this->dist;
        $this->y += $this->dist;
        return true;
      }
    }
  }

  class ExCar extends Car {

    private $totalMileage;

    public function __construct($name, $width, $height, $length, $fuel, $dayPurchased) {
      parent::__construct($name, $width, $height, $length, $fuel, $dayPurchased);
      $this->totalMileage = 0.0;
    }

    public function getTotalMilage() {
      return $this->totalMileage;
    }

    public function putSpec() {
      parent::putSpec();
      echo "総走行距離：{$this->totalMileage}km";
    }

    public function move($dx, $dy) {
      $dist = sqrt($dx * $dx + $dy * $dy);

      if ($dist > $this->fuel) {
        return false;
      } else {
        $this->totalMileage += $dist;
        return true;
      }
    }
    
  }

  $inst = new ExCar("W140", 1885, 1490, 5220, 95.0, [2005, 10, 13]);
  $inst->putSpec();
?>