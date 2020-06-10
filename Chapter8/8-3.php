<?php
  class Car {

    private $x = 0;
    private $y = 0;
    private $tank;
    private $gas;
    private $gasEfficiency;

    public function __construct(string $name, string $number, int $breadth, int $height, int $length) {
      $this->name = $name;
      $this->nummber = $number;
      $this->breadth = $breadth;
      $this->height = $height;
      $this->length = $length;
    }

    public function getXandY() {
      echo "現在地xは。。。yは。。。です。";
    } 

    public function getRestofFuel() {
      echo "残りのガソリン残量は・・・です。";
    }

    public function showCarsSpec() {

    }

    public function moveCar() {
      echo "xに・・yに・・移動する。";
      refillGas();
    }

    private function refillGas() {
      echo "ガスを給油します。";
    }

  }
?>