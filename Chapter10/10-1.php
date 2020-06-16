<?php

  class Human {

    protected static $num;

    public function __construct($name, $height, $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }

    public function showId() {
      echo "名前：{$this->name}\n";
      echo "身長：{$this->height}cm\n";
      echo "体重：{$this->weight}kg\n";
      $number = self::$num += 1;
      echo "番号：{$number}\n";
    }
  }
  $sato = new Human("佐藤二郎", 170, 60);
  $sato->showId();
  echo "\n";
  $takada = new Human("高田龍一", 166, 72);
  $takada->showId()

?>