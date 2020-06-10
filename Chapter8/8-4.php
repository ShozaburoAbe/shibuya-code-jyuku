<?php
  class Car {

    private $x = 0;
    private $y = 0;
    private $tank;
    private $gasRest;
    private $gasEfficiency;

    public function __construct(string $name, string $number, int $breadth, int $height, int $length, float $tank, float $gasEfficiency) {
      $this->name = $name;
      $this->number = $number;
      $this->breadth = $breadth;
      $this->height = $height;
      $this->length = $length;
      $this->tank = $tank;
      $this->gasEfficiency = $gasEfficiency;
    }

    public function getXandY() {
      echo "現在地xは。。。yは。。。です。";
    } 

    public function getRestofFuel() {
      echo "残りのガソリン残量は・・・です。";
    }

    public function showCarsSpec() {
      echo "名　　前：{$this->name}\n";
      echo "ナンバー：{$this->number}\n";
      echo "車　　幅：{$this->breadth}mm\n";
      echo "車　　高：{$this->height}mm\n";
      echo "車　　長：{$this->length}mm\n";
      echo "タンク　：{$this->tank}リットル\n";
      echo "燃　　費：{$this->gasEfficiency}km／リットル\n";
    }

    public function moveCar() {
      echo "xに・・yに・・移動する。";
      refillGas();
    }

    private function refillGas() {
      echo "ガスを給油します。";
    }

  }

//   $pitz = new Car("ピッツ", "福岡999ん99-99", 1660, 1500, 3640, 40.0, 12.0);
//   $pitz->showCarsSpec();
//   echo "\n";
//   $march = new Car("マーチ", "福岡999ん99-99", 1660, 1525, 3695, 41.0, 12.0);
//   $march->showCarsSpec();


?>