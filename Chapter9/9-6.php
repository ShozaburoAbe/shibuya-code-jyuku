<?php

  class Human {

    public function __construct($name, $height, $weight, $birthd, $ln) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
      $this->birthd = $birthd;
      $this->ln = $ln;
    }

    public function toString() {

      $datetime = new DateTime();
      list($year, $month, $day) = $this->birthd;
      $datetime->setDate($year, $month, $day);
      $week = array("日", "月", "火", "水", "木", "金", "土");
      $w = (int)$datetime->format('w');
      echo "{$this->ln} = {{$this->name}: {$this->height}cm {$this->weight}kg\n";
      echo "{$year}年{$month}月{$day}日({$week[$w]})生まれ}\n";

    }
  }

  $sato = new Human("鈴木二郎", 170, 60, [1975, 3, 12], "suzuki");
  $sato->toString();
  echo "\n";
  $takada = new Human("高田龍一", 166, 72, [1987, 10, 07], "takada");
  $takada->toString()


?>